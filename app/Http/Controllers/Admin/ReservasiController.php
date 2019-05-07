<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index(){
        return view('dashboard.reservasi.reservasi');
    }
    public function form(Request $request){
        return view('dashboard.reservasi.form', compact('request'));
    }
    public function list(){
        return view('dashboard.reservasi.list');
    }
}
