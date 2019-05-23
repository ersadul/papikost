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
        } else {
            return "Failed to load data";
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
    }
    
    public function kamar(){
        $kamar = Kamar::join('tipe_kamar', 'kamar.tipe_kamar_id', '=', 'tipe_kamar.id')
        ->select('kamar.id as kamar_id', 'kamar.nama_kamar', 'kamar.tipe_kamar_id', 'tipe_kamar.nama_tipe')
        ->get();
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

    public function editKamar(Request $request)
    {
        $editKamar = Kamar::where('id', $request->idKamarEdit)
        ->update([
            'nama_kamar' => $request->editKamar,
            'tipe_kamar_id' => $request->editTipe,
        ]);
        return redirect()->back();
    }

    public function deleteKamar(Request $request)
    {
        Kamar::where('id', $request->IDKamarDelete)->delete();
        // return dd($deleteKamar);
        return redirect()->back();
    }

    public function tarif(){
        $kamar = Kamar::get();
        // return dd($kamar);
        return view('dashboard.manajemen.tarif', compact('kamar'));
    }

    public function editTarif(Request $request)
    {
        $kamar = Kamar::where('id', $request->idTarifEdit)->update([
            'harga' => $request->editHargaAsli
        ]);
        // return dd($kamar);
        return redirect()->back();
    }

    public function fasilitas(){
        $kamar = Kamar::get();
        $fasilitasKamar = Kamar::join('fasilitas_kamar', 'kamar.id', '=', 'fasilitas_kamar.kamar_id')->select('fasilitas_kamar.nama_fasilitas', 'fasilitas_kamar.kamar_id')->get();
        // return dd($fasilitasKamar);
        return view('dashboard.manajemen.fasilitas', compact('kamar', 'fasilitasKamar'));
    }

    // Tambah fasilitas masih fail, data bisa yang sama dimasukkan lagi. contoh : Kamar tersebut sudah ada ac
    // tapi saya masih bisa nambah ac di kamar tersebut
    // dan saya tidak bisa menghapus fasilitasnya
    public function tambahFasilitas(Request $request)
    {
        for($i = 0; $i < count($request->fasilitasKamar); $i++){
            $fasilitasKamar->nama_fasilitas = $request->fasilitasKamar[$i];
            $fasilitasKamar->kamar_id = $request->idKamarTambahFasilitas;
            $fasilitasKamar->save();
        }
        return redirect()->back();
    }
    // ---------------------------------------------------------------------

    public function karyawan(){
        $karyawan = Karyawan::get();
        return view('dashboard.manajemen.karyawan', compact('karyawan'));
    }

    public function tambahKaryawan(Request $request)
    {
        $tambahKaryawan = new Karyawan;
        $tambahKaryawan->nama = $request->tambahNama;
        $tambahKaryawan->phone_number = $request->tambahPhone;
        $tambahKaryawan->job_role = $request->tambahJob;
        $tambahKaryawan->email = $request->tambahEmail;
        $tambahKaryawan->tempat_tanggal_lahir = $request->tambahTTL;
        $tambahKaryawan->alamat_tinggal = $request->tambahAlamat;
        $tambahKaryawan->jenis_kelamin = $request->tambahJK;
        $tambahKaryawan->status_perkawinan = $request->tambahSP;
        $tambahKaryawan->agama = $request->tambahAgama;
        $tambahKaryawan->sd = $request->tambahSD;
        $tambahKaryawan->smp = $request->tambahSMP;
        $tambahKaryawan->sma = $request->tambahSMA;
        $tambahKaryawan->perguruan_tinggi = $request->tambahKuliah;
        $tambahKaryawan->pengalaman_kerja = $request->tambahKerja;
        $tambahKaryawan->save();
        // return dd($tambahKaryawan);
        return redirect()->back();
    }
    
    public function karyawanDetail(Request $request){
        // return ($request->idKaryawan);
        $karyawanDetail = Karyawan::where('id', $request->idKaryawan)->first();
        return view('dashboard.manajemen.karyawanDetail', compact('karyawanDetail'));
    }
    
    public function akun(){
        return view('dashboard.manajemen.akun');
    }
}
