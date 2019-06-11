<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use DB;
use App\ProfileHotel; 
use App\FasilitasKamar;
use App\GambarKamar;
use App\Invoice;
use App\Kamar;
use App\Payment;
use App\Cleaning;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        // $kamar = Kamar::get();
        // return view('index', compact('kamar'));
        $profile = ProfileHotel::get();
        $kamarPromo = DB::table('kamar')->whereRaw('harga_promo < harga')->take(3)->get();
        return view('index', compact('kamarPromo'));
    }

    public function getDate(Request $request)
    {
        $checkIn      = Carbon::parse($request->date1)->format('Y-m-d');
        $checkOut     = Carbon::parse($request->date1)->addDays($request->lamaMenginap)->format('Y-m-d');
        $lamaMenginap = $request->lamaMenginap;

        //check kamar yang sudah dibooking lunas
        $booked = Invoice::select('invoice.kamar_id')
            ->join('kamar', 'kamar.id', '=', 'invoice.kamar_id')
            ->join('payment_invoice', 'payment_invoice.invoice_id', '=', 'invoice.id')
            ->where('payment_invoice.flag_payment', '1')
            ->whereRaw("(
                '$checkIn' between invoice.check_in and invoice.check_out
                or '$checkOut' between invoice.check_in and invoice.check_out
                or invoice.check_in between '$checkIn' and '$checkOut'
                or invoice.check_out between '$checkIn' and '$checkOut')")
            ->distinct()
            ->get();

        //simpan id kamar di array
        $idKamarBooked = [];
        foreach ($booked as $b) {
            array_push($idKamarBooked, $b->kamar_id);
        }

        //select kamar exclude yang sudah dibooking lunas
        $kamar = Kamar::select('*', 'kamar.id as id_kamar')
            ->whereNotIn('id', $idKamarBooked)
            ->join('tipe_kamar', 'tipe_kamar.id', '=', 'kamar.tipe_kamar_id')
            ->get();

        return view('roomList', compact('checkIn', 'lamaMenginap', 'kamar'));
    }

    public function getKamar(Request $request)
    {
        //get info kamar
        $kamarByID = Kamar::select('*', 'kamar.id as id_kamar')
            ->join('tipe_kamar', 'kamar.tipe_kamar_id', '=', 'tipe_kamar.id')
            ->where('kamar.id', $request->id)
            ->get();
        $kamarTanggalMasuk = $request->checkIn;
        $kamarLamaMenginap = $request->lamaMenginap;

        //get fasilitas kamar
        $fasilitas = FasilitasKamar::where('kamar_id', $request->id)
            ->join('tipe_fasilitas', 'tipe_fasilitas.id', '=', 'fasilitas_kamar.tipe_fasilitas_id')
            ->get();

        //get gambar kamar
        $gambar = GambarKamar::where('kamar_id', $request->id)->get();
        return view('roomDetail', compact('kamarTanggalMasuk', 'kamarLamaMenginap', 'kamarByID', 'fasilitas', 'gambar'));
    }

    public function bookingForm(Request $request)
    {
        $kamarByID         = Kamar::where('id', $request->kamarId)->get();
        $kamarTanggalMasuk = $request->guestMasuk;
        $kamarLamaMenginap = $request->guestDurasi;
        $totalHarga        = $request->guestHarga;
        return view('bookingForm', compact('kamarByID', 'kamarTanggalMasuk', 'kamarLamaMenginap', 'totalHarga'));
    }

    // status menginap 0 = check_in, 1 = sedang_menginap, 2 = check_out
    // status payment 1 = debit, 2 = transfer, 3 = tunai
    public function getInvoice(Request $request)
    {

        $invoiceFinal      = new Invoice;
        $code              = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $invoice_code_temp = "";
        for ($i = 0; $i < 8; $i++) {
            $invoice_code_temp .= $code[mt_rand(0, strlen($code) - 1)];
        }
        $invoiceFinal->invoice_code    = $invoice_code_temp;
        $invoiceFinal->nama            = $request->namaGuest;
        $invoiceFinal->email           = $request->emailGuest;
        $invoiceFinal->phone           = $request->handphoneGuest;
        $invoiceFinal->check_in        = Carbon::parse($request->guestMasuk)->format('Y-m-d');
        $invoiceFinal->check_out       = Carbon::parse($request->guestMasuk)->addDays($request->guestDurasi)->format('Y-m-d');
        $invoiceFinal->lama_menginap   = $request->guestDurasi;
        $invoiceFinal->final_harga     = $request->totalHarga;
        $invoiceFinal->status_menginap = 0;
        $invoiceFinal->kamar_id        = $request->kamarID;
        $invoiceFinal->save();
        $invoice  = Invoice::where('phone', $request->handphoneGuest)->where('invoice_code', $invoice_code_temp)->first();
        $duration = 0;

        $payment               = new Payment;
        $payment->invoice_id   = $invoice->id;
        $payment->tipe_payment = 1;
        $payment->flag_payment = 0;
        $payment->save();

        $cleaning   = new Cleaning;
        $cleaning->vacant = 0;
        $cleaning->snack = 0;
        $cleaning->bersih_ringan = 0;
        $cleaning->bed = 0;
        $cleaning->invoice_id = $invoice->id;
        $cleaning->save();
        // return dd($invoiceFinal);
        // return view('invoice', compact('invoice', 'duration'));
        return redirect()->route('invoice.view', compact('invoice'));
    }

    // flag_pembayaran 1 = lunas, 0 = menunggu_pembayaran
    public function cekInvoice(Request $request)
    {
        $current = Carbon::now();
        $invoice = Invoice::where('phone', $request->phone)->where('invoice_code', $request->invoiceCode)->first();
        if ($invoice == null || $invoice->status_menginap == 2) {
            //kasih action alert di halaman cek invoice
            return redirect()->back()->with('fail','Invoice tidak valid, silahkan isi kembali');;
            // return 'invoice tidak valid';
        }
        $interval = date_diff($invoice->created_at, $current);
        if ($interval->h > 0) {
            $invoice = Invoice::where('phone', $request->phone)->where('invoice_code', $request->invoiceCode)->delete();
            //kasih action drop invoice bahwa sudah kadaluarsa
            return redirect()->back()->with('kadaluarsa','Invoice telah kadaluarsa, silahkan lakukan pemesanan ulang');;
            // return "invoice telah lebih dari 1 jam";
        } else {
            $duration = $interval->i * 60 + $interval->s;
            // return view('invoice', compact('invoice', 'duration'));
            return redirect()->route('invoice.view', compact('invoice'));
        }
    }

    public function uploadPayment(Request $request)
    {
        $uploadFile = $request->file('buktiPembayaran');

        $path = $uploadFile->store('public/files');

        $invoicePayment = Payment::where('invoice_id', $request->paymentInvoiceID)->update(['bukti_pembayaran_file' => str_replace('public/', '', $path)]); //public nya harus diilangin biar gampang retrivenya
        // return view('index');
        $invoice = Invoice::where('id', $request->paymentInvoiceID)->first();

        return redirect()->route('invoice.view', compact('invoice'));
    }

    public function invoiceView($id)
    {
        $current = Carbon::now();
        $invoice = Invoice::join('payment_invoice', 'payment_invoice.invoice_id', '=', 'invoice.id')
            ->where('invoice.id', $id)
            ->where('status_menginap', '!=', 2)
            ->first();
        $interval = date_diff($invoice->created_at, $current);
        $duration = $interval->i * 60 + $interval->s;
        $profileHotel = ProfileHotel::first();
        // return dd($invoice);
        return view('invoice', compact('invoice', 'duration', 'profileHotel'));
    }

    public function promoView()
    {
        $kamarPromo = DB::table('kamar')->whereRaw('harga_promo < harga')->get();
        return view('promo', compact('kamarPromo'));
    }

    public function about($url = "safa")
    {
        switch ($url) {
            case 'safa':
                return view('static.tentang.safa');
            case 'fasilitas':
                return view('static.tentang.fasilitas');
            case 'cara-pesan':
                return view('static.tentang.caraPesan');
            default:
                return redirect()->route('index');
        };
    }
    public function destinasi($url = null)
    {
        switch ($url) {
            case 'coban-rais':
                return view('static.destinasi.cobanRais');
            case 'gunung-semeru':
                return view('static.destinasi.gunungSemeru');
            case 'pantai-balekambang':
                return view('static.destinasi.pantaiBalekambang');
            case 'museum-angkut':
                return view('static.destinasi.museumAngkut');
            case 'kampung-jodipan':
                return view('static.destinasi.kampungJodipan');
            case null:
                return redirect()->route('index');
            default:
                return redirect()->route('index');
        };
    }
}
