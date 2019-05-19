<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HouseKeepingController extends Controller
{
    public function penjadwalan(){
        return view('dashboard.housekeeping.penjadwalan');
    }
    public function logbook(){
        return view('dashboard.housekeeping.logbook');
    }
    public function cleaning(){
        return view('dashboard.housekeeping.cleaning');
    }
}
