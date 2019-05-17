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
    public function fasilitas(){
        return view('dashboard.manajemen.fasilitas');
    }
    public function karyawan(){
        return view('dashboard.manajemen.karyawan');
    }
    public function karyawanDetail(){
        return view('dashboard.manajemen.karyawanDetail');
    }
    public function akun(){
        return view('dashboard.manajemen.akun');
    }
}
