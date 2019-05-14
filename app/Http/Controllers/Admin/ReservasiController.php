<?php

namespace App\Http\Controllers\Admin;

use App\Invoice;
use App\Kamar;
use Carbon\Carbon;
use App\Payment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index(){
        $kamar = Kamar::all();
        return view('dashboard.reservasi.reservasi', compact('kamar'));
    }

    public function getKamar(Request $request){
        $invoice = Invoice::whereBetween('check_in', [$request->start, $request->end])->get();
        return json_encode($invoice);
    }

    public function form(Request $request){
        // return dd($request);
        return view('dashboard.reservasi.form', compact('request'));
    }
    public function pembayaran(Request $request){
        $kamar = Kamar::find($request->room);
        // return dd($request->debit);
        // if  ($request->debit == ""){
        //     return var_dump($request->debit);
        // } else {
        //     return dd($request->debit);
        // }
        // return dd($request->khusus);
        return view('dashboard.reservasi.pembayaran', compact('request', 'kamar'));
    }

    public function saveReservasiToDB(Request $request)
    {
        $saveReservasi = new Invoice;
        $code = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $invoice_code_temp = "";
        for ($i = 0; $i < 8; $i++){
            $invoice_code_temp .= $code[mt_rand(0, strlen($code)-1)];
        }
        $saveReservasi->invoice_code = $invoice_code_temp;
        $saveReservasi->nama = $request->nama;
        $saveReservasi->email = $request->email;
        $saveReservasi->phone = $request->telp;
        $saveReservasi->permintaan_khusus = $request->khusus;
        $saveReservasi->check_in = Carbon::parse($request->date)->format('Y-m-d');
        $saveReservasi->lama_menginap = $request->range;
        $saveReservasi->final_harga = $request->hargaAkhir;
        $saveReservasi->status_menginap = 1;
        $saveReservasi->kamar_id = $request->room;
        $saveReservasi->save();
        if  ($request->debit != ''){
            // return $request->debit;
            $payment = new Payment;
            $payment->invoice_id = $saveReservasi->id;
            $payment->tipe_payment = 0;
            $payment->flag_payment = 1;
            $payment->nomor_transaksi = $request->debit;
            $payment->save();
            // return dd($saveReservasi);
        } else if ($request->transfer != ''){
            $payment = new Payment;
            $payment->invoice_id = $saveReservasi->id;
            $payment->tipe_payment = 1;
            $payment->flag_payment = 1;
            $payment->nomor_transaksi = $request->transfer;
            $payment->bukti_pembayaran_file = "gambar.jpg";
            $payment->save();
            // return $request->transfer;
        } else if ($request->cash != ''){
            $payment = new Payment;
            $payment->invoice_id = $saveReservasi->id;
            $payment->tipe_payment = 2;
            $payment->flag_payment = 1;
            $payment->save();
            // return "box isi";
        } else {
            return "failed";
        }
        // return dd($payment);
        return redirect('dashboard/reservasi');
    }

    public function list(){
        $reservasi = Invoice::select('*', 'payment_invoice.updated_at as payment_update')
                        ->join('payment_invoice', 'invoice.id', '=', 'payment_invoice.invoice_id')
                        ->where('payment_invoice.tipe_payment', '1')
                        ->where('payment_invoice.flag_payment', '0')
                        ->orderBy('payment_invoice.updated_at', 'desc')
                        ->get();
        return view('dashboard.reservasi.list', compact('reservasi'));
    }
    public function detail(Request $request){
        $invoice = Invoice::join('payment_invoice', 'invoice.id', '=', 'payment_invoice.invoice_id')
                        ->where('invoice.id', $request->invoice_id)
                        ->first();
        // dd($invoice);
        //tambah atribut check out
        $extractDate = explode("-", $invoice->check_in);
        $checkOut  = date('Y-m-d', mktime(0, 0, 0, $extractDate[1]  , $extractDate[2] + $invoice->lama_menginap, $extractDate[0]));
        $invoice->check_out = $checkOut;
        //mode konfirmasi atau read only
        $readonly = $request->readonly ? true : false;

        // dd($read_only);
        return view('dashboard.reservasi.detail', compact('invoice', 'readonly'));
    }
    public function history(){
        $reservasi = Invoice::where("status_menginap", "2")->get();// 2 = checkout

        return view('dashboard.reservasi.history', compact('reservasi'));
    }

    public function getCheckIn(){
        $checkIn = Invoice::join('payment_invoice', 'invoice.id', '=', 'payment_invoice.invoice_id')
                        ->where('invoice.status_menginap', '0') //status akan check in (0)
                        ->where('invoice.check_in', date('Y-m-d')) //hari ini
                        ->get();
        return view('dashboard.hariIni.checkIn', compact('checkIn'));
    }

    public function getSedangMenginap()
    {
        $sedangMenginap = Invoice::join('payment_invoice', 'invoice.id', '=', 'payment_invoice.invoice_id')
                        ->where('invoice.status_menginap', '1') //status sedang menginap (1)
                        ->where('invoice.check_in', date('Y-m-d'))
                        ->get();
        return view('dashboard.hariIni.menginap', compact('sedangMenginap'));
    }

    public function getCheckOut()
    {
        $checkOut = Invoice::join('payment_invoice', 'invoice.id', '=', 'payment_invoice.invoice_id')
                        ->where('invoice.status_menginap', '2') //status akan chech out (2)
                        ->where('invoice.check_in', date('Y-m-d'))
                        ->get();
        return view('dashboard.hariIni.checkOut', compact('checkOut'));

    }
}
