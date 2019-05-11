<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManajemenController extends Controller
{
    public function profile(){
        return view('dashboard.manajemen.profile');
    }
    public function kamar(){
        return view('dashboard.manajemen.kamar');
    }
    public function tarif(){
        return view('dashboard.manajemen.tarif');
    }
    public function akun(){
        return view('dashboard.manajemen.akun');
    }
}
