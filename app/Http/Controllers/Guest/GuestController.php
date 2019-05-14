<?php

namespace App\Http\Controllers\Guest;

use App\Kamar;
use App\Invoice;
use App\Payment;
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
        $kamar = Kamar::get();
        return view('roomList', compact('checkIn', 'lamaMenginap', 'kamar'));
    }

    public function getKamar(Request $request)
    {
        $kamarByID = Kamar::where('id', $request->id)->get();
        $kamarTanggalMasuk = $request->checkIn;
        $kamarLamaMenginap = $request->lamaMenginap;
        return view('roomDetail', compact('kamarTanggalMasuk', 'kamarLamaMenginap', 'kamarByID'));
    }

    public function bookingForm(Request $request)
    {
        $kamarByID = Kamar::where('id', $request->kamarId)->get();
        $kamarTanggalMasuk = $request->guestMasuk;
        $kamarLamaMenginap = $request->guestDurasi;
        return view('bookingForm', compact('kamarByID', 'kamarTanggalMasuk', 'kamarLamaMenginap'));
    }

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
        $invoiceFinal->final_harga = 0;
        $invoiceFinal->status_menginap = 0;
        $invoiceFinal->kamar_id = $request->kamarID;
        $invoiceFinal->save();
        $invoice = Invoice::where('phone', $request->handphoneGuest)->where('invoice_code', $invoice_code_temp)->first();
        $duration = 0;

        $payment = new Payment;
        $payment->invoice_id = $invoice->id;
        $payment->tipe_payment = 2;
        $payment->flag_payment = 0;
        $payment->save();


        return dd($invoiceFinal);
        // return view('invoice', compact('invoice', 'duration'));
    }

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
            return view('invoice', compact('invoice', 'duration'));
        }
    }

    // status menginap 0 = check_in, 1 = sedang_menginap, 2 = check_out

    // flag_pembayaran 1 = lunas, 0 = menunggu_pembayaran
    
}
