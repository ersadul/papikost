<?php

namespace App\Http\Controllers\Guest;

use App\Kamar;
use App\Invoice;
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
        $invoiceFinal->status_lunas = 0;
        $invoiceFinal->kamar_id = $request->kamarID;
        $invoiceFinal->save();

        $invoice = DB::table('invoice')
        ->join('kamar', 'invoice.kamar_id', '=', 'kamar.id')
        ->where('invoice.phone', '=', $request->handphoneGuest)
        ->where('invoice.invoice_code', '=', $invoice_code_temp)
        ->get();        
        return view('invoice', compact('invoice'));
    }

    public function cekInvoice(Request $request)
    {
        $getInvoiceCode = $request->invoiceCode;
        $getPhone = $request->phone;
        $invoice = DB::table('invoice')
        ->join('kamar', 'invoice.kamar_id', '=', 'kamar.id')
        ->where('invoice.phone', '=', $getPhone)
        ->where('invoice.invoice_code', '=', $getInvoiceCode)
        ->get();
        // return dd($invoice);
        return view('invoice', compact('invoice'));
    }
}
