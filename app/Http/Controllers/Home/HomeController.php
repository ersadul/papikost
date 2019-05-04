<?php

namespace App\Http\Controllers\Home;

use App\Kamar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $kamar = Kamar::get();
        return view('index', compact('kamar'));
    }

    public function reservasiKamar(Request $request){
    }
}
