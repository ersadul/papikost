<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kamar;

class ReservasiController extends Controller
{
    public function index(){
        return view('dashboard.reservasi.reservasi');
    }
    public function form(Request $request){
        return view('dashboard.reservasi.form', compact('request'));
    }
    public function pembayaran(Request $request){
        $kamar = Kamar::find($request->room);
        return view('dashboard.reservasi.pembayaran', compact('request', 'kamar'));
    }
    public function list(){
        return view('dashboard.reservasi.list');
    }
    public function detail(){
        return view('dashboard.reservasi.detail');
    }
}
