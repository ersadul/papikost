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
            'alamat' => $request->alamat_profile,
            'provinsi' => $request->provinsi_profile,
            'negara' => $request->negara_profile,
            'panduan_lokasi' => $request->lokasi_profile,
            'bank' => $request->bank_profile,
            'bank_cabang' => $request->cabang_profile,
            'nomor_rekening' => $request->nomor_profile,
            'nama_penerima' => $request->penerima_profile,
            'logo_hotel_file' => 'gambar.jpg'
        ]);
        return redirect()->back();
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
        $kamar = Kamar::join('tipe_kamar', 'kamar.tipe_kamar_id', '=', 'tipe_kamar.id')->get();
        return view('dashboard.manajemen.tarif', compact('kamar'));
    }

    public function editTarif(Request $request)
    {
        $kamar = Kamar::where('id', $request->id)->update([
            'harga' => $request->editHarga
        ]);
        return redirect()->back();
    }

    public function fasilitas(){
        $kamar = Kamar::get();
        $fasilitasKamar = Kamar::join('fasilitas_kamar', 'kamar.id', '=', 'fasilitas_kamar.kamar_id')->select('fasilitas_kamar.nama_fasilitas', 'fasilitas_kamar.kamar_id')->get();
        // return dd($fasilitasKamar);
        return view('dashboard.manajemen.fasilitas', compact('kamar', 'fasilitasKamar'));
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
