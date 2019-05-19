<?php

namespace App\Http\Controllers\Admin;

use App\ProfileHotel;
use App\TipeKamar;
use App\Kamar;
use App\FasilitasKamar;
use App\Karyawan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManajemenController extends Controller
{
    public function profile(){
        if(!ProfileHotel::get()->isEmpty()){
            $profileHotel = ProfileHotel::first();
            return view('dashboard.manajemen.profile', compact('profileHotel'));
        }
    }

    public function editProfile(Request $request)
    {
        $editProfileHotel = ProfileHotel::where('id', $request->IDProfileHotel)
        ->update([
            'nama' => $request->nama_profile,
            'alamat' => $request->nama_profile,
            'provinsi' => $request->nama_profile,
            'negara' => $request->nama_profile,
            'panduan_lokasi' => $request->nama_profile,
            'bank' => $request->nama_profile,
            'bank_cabang' => $request->nama_profile,
            'nomor_rekening' => $request->nama_profile,
            'nama_penerima' => $request->nama_profile,
            'logo_hotel_file' => 'gambar.jpg'
        ]);
    }
    
    public function kamar(){
        $kamar = Kamar::join('tipe_kamar', 'kamar.tipe_kamar_id', '=', 'tipe_kamar.id')->get();
        $tipeKamar = TipeKamar::get();
        // return dd($kamar);
        return view('dashboard.manajemen.kamar', compact('tipeKamar', 'kamar'));
    }

    public function tambahKamar(Request $request)
    {
        $tambahKamar = new Kamar;
        $tambahKamar->nama_kamar = $request->tambahKamar;
        $tambahKamar->tipe_kamar_id = $request->tambahTipeKamar;
        $tambahKamar->deskripsi = "-";
        $tambahKamar->harga = 0;
        $tambahKamar->save();
        return redirect()->route('dashboard.manajemen.kamar');
    }

    public function tarif(){
        $kamar = Kamar::get();
        return view('dashboard.manajemen.tarif', compact('kamar'));
    }

    public function fasilitas(){
        $fasilitasKamar = FasilitasKamar::get();
        return view('dashboard.manajemen.fasilitas', compact('fasilitasKamar'));
    }
    
    public function karyawan(){
        $karyawan = Karyawan::get();
        return view('dashboard.manajemen.karyawan', compact('karyawan'));
    }
    
    public function karyawanDetail(){
        return view('dashboard.manajemen.karyawanDetail');
    }
    
    public function akun(){
        return view('dashboard.manajemen.akun');
    }
}
