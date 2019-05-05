<?php

namespace App\Http\Controllers\Guest;

use App\Kamar;
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
        // return dd($lamaMenginap);
        return view('roomList', compact('checkIn', 'lamaMenginap', 'kamar'));
    }

    public function getKamar(Request $request)
    {
        $kamarByID = Kamar::where('id', $request->id)->get();
        $kamarTanggalMasuk = $request->checkIn;
        $kamarLamaMenginap = $request->lamaMenginap;
        return view('roomDetail', compact('kamarTanggalMasuk', 'kamarLamaMenginap', 'kamarByID'));
    }

    public function getInvoice(Request $request)
    {
        $tanggalMasuk = $request->guestMasuk;
        $durasiMenginap = $request->guestDurasi;
        $hargaMenginap = $request->guestHarga;
        $kamarID = $request->kamarID;
        return dd($tanggalMasuk);
        // return view('bookingForm', compact('tanggalMasuk', 'durasiMenginap', 'hargaMenginap', '$kamarID'));
    }
}
