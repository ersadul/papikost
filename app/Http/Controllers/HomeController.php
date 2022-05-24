<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfileHotel; 
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $profile = ProfileHotel::get();
        $kamarPromo = DB::table('kamar')->whereRaw('harga_promo < harga')->take(3)->get();
        // return view('index', compact('kamarPromo'));
        return redirect()->route('index', compact('kamarPromo'));
    }
}
