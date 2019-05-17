<?php

namespace App\Http\Controllers\Guest;

use App\Kamar;
use App\Invoice;
use App\Payment;
use App\FasilitasKamar;
use App\GambarKamar;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    public function index()
    {
        $kamar = Kamar::get();
        return view('index', compact('kamar'));
    }

    public function getDate(Request $request){
        $checkIn = $request->date1;
        $lamaMenginap = $request->lamaMenginap;
        $kamar = Kamar::join('tipe_kamar', 'kamar.tipe_kamar_id', '=', 'tipe_kamar.id')->get();
        return view('roomList', compact('checkIn', 'lamaMenginap', 'kamar'));
    }

    public function getKamar(Request $request)
    {
        //get info kamar
        $kamarByID = Kamar::join('tipe_kamar', 'kamar.tipe_kamar_id', '=', 'tipe_kamar.id')
                        ->where('kamar.id', $request->id)
                        ->get();
        $kamarTanggalMasuk = $request->checkIn;
        $kamarLamaMenginap = $request->lamaMenginap;

        //get fasilitas kamar
        $fasilitas = FasilitasKamar::where('kamar_id', $request->id)->get();

        //get gambar kamar
        $gambar = GambarKamar::where('kamar_id', $request->id)->get();

        return view('roomDetail', compact('kamarTanggalMasuk', 'kamarLamaMenginap', 'kamarByID', 'fasilitas', 'gambar'));
    }

    public function bookingForm(Request $request)
    {
        $kamarByID = Kamar::where('id', $request->kamarId)->get();
        $kamarTanggalMasuk = $request->guestMasuk;
        $kamarLamaMenginap = $request->guestDurasi;
        $totalHarga = $request->guestHarga;
        return view('bookingForm', compact('kamarByID', 'kamarTanggalMasuk', 'kamarLamaMenginap', 'totalHarga'));
    }

    // status menginap 0 = check_in, 1 = sedang_menginap, 2 = check_out
    // status payment_invoice 1 = debit, 2 = transfer, 3 = tunai
    public function getInvoice(Request $request)
    {

        $invoiceFinal = new Invoice;
        $code = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $invoice_code_temp = "";
        for ($i = 0; $i < 8; $i++){
            $invoice_code_temp .= $code[mt_rand(0, strlen($code)-1)];
        }
        $invoiceFinal->invoice_code = $invoice_code_temp;
        $invoiceFinal->nama = $request->namaGuest;
        $invoiceFinal->email = $request->emailGuest;
        $invoiceFinal->phone = $request->handphoneGuest;
        $invoiceFinal->check_in = Carbon::parse($request->guestMasuk)->format('Y-m-d');
        $invoiceFinal->lama_menginap = $request->guestDurasi;
        $invoiceFinal->final_harga = $request->totalHarga;
        $invoiceFinal->status_menginap = 0;
        $invoiceFinal->kamar_id = $request->kamarID;
        $invoiceFinal->save();
        $invoice = Invoice::where('phone', $request->handphoneGuest)->where('invoice_code', $invoice_code_temp)->first();
        $duration = 0;

        $payment = new Payment;
        $payment->invoice_id = $invoice->id;
        $payment->tipe_payment = 1;
        $payment->flag_payment = 0;
        $payment->save();

        // return dd($invoiceFinal);
        // return view('invoice', compact('invoice', 'duration'));
        return redirect()->route('invoice.view', compact('invoice'));
    }

    // flag_pembayaran 1 = lunas, 0 = menunggu_pembayaran
    public function cekInvoice(Request $request)
    {
        $current = Carbon::now();
        $invoice = Invoice::where('phone', $request->phone)->where('invoice_code', $request->invoiceCode)->first();
        if($invoice == null){
            //kasih action alert di halaman cek invoice
            return 'invoice tidak valid';
        }
        $interval = date_diff($invoice->created_at, $current);
        if($interval->h > 0){
            //kasih action drop invoice bahwa sudah kadaluarsa
            return "invoice telah lebih dari 1 jam";
        }else{
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
        $invoice = Invoice::join('payment', 'payment.invoice_id', '=', 'invoice.id')
                        ->where('invoice.id', $id)->first();
        $interval = date_diff($invoice->created_at, $current);
        $duration = $interval->i * 60 + $interval->s;
        return view('invoice', compact('invoice', 'duration'));
    }
}
