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

        return view('roomDetail', compact('kamarByID'));
    }
}
