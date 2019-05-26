<?php

namespace App\Http\Controllers\Admin;

use App\Fasilitas;
use App\FasilitasKamar;
use App\Http\Controllers\Controller;
use App\Kamar;
use App\Karyawan;
use App\ProfileHotel;
use App\TipeKamar;
use App\User;
use Hash;
use Illuminate\Http\Request;

class ManajemenController extends Controller
{
    public function profile()
    {
        if (!ProfileHotel::get()->isEmpty()) {
            $profileHotel = ProfileHotel::first();
            return view('dashboard.manajemen.profile', compact('profileHotel'));
        } else {
            return "Failed to load data";
        }
    }

    public function editProfile(Request $request)
    {
        $dataUpdate = [
            'nama'           => $request->nama_profile,
            'alamat'         => $request->alamat_profile,
            'provinsi'       => $request->provinsi_profile,
            'negara'         => $request->negara_profile,
            'panduan_lokasi' => $request->lokasi_profile,
            'bank'           => $request->bank_profile,
            'bank_cabang'    => $request->cabang_profile,
            'nomor_rekening' => $request->nomor_profile,
            'nama_penerima'  => $request->penerima_profile,
        ];

        //simpan request gambar kalau diunggah pengguna
        if (!is_null($request->file('gambar_profile'))) {
            $uploadFile                    = $request->file('gambar_profile');
            $path                          = $uploadFile->store('public/files');
            $dataUpdate['logo_hotel_file'] = str_replace('public/', '', $path);
        }

        $editProfileHotel = ProfileHotel::where('id', $request->IDProfileHotel)->update($dataUpdate);
        return redirect()->back();
    }

    public function kamar()
    {
        $kamar = Kamar::join('tipe_kamar', 'kamar.tipe_kamar_id', '=', 'tipe_kamar.id')
            ->select('kamar.id as kamar_id', 'kamar.nama_kamar', 'kamar.tipe_kamar_id', 'tipe_kamar.nama_tipe')
            ->get();
        $tipeKamar = TipeKamar::get();
        // return dd($kamar);
        return view('dashboard.manajemen.kamar', compact('tipeKamar', 'kamar'));
    }

    public function kamarDetail($id)
    {
        $kamar = Kamar::find($id)->join('tipe_kamar', 'kamar.tipe_kamar_id', '=', 'tipe_kamar.id')
            ->select('kamar.id as kamar_id', 'kamar.nama_kamar', 'kamar.tipe_kamar_id', 'tipe_kamar.nama_tipe')
            ->first();
        $tipeKamar = TipeKamar::get();
        return view('dashboard.manajemen.kamarDetail', compact('kamar', 'tipeKamar'));
    }

    public function tambahKamar(Request $request)
    {
        $tambahKamar                = new Kamar;
        $tambahKamar->nama_kamar    = $request->tambahKamar;
        $tambahKamar->tipe_kamar_id = $request->tambahTipeKamar;
        $tambahKamar->deskripsi     = "-";
        $tambahKamar->harga         = 0;
        $tambahKamar->save();
        return redirect()->route('dashboard.manajemen.kamar');
    }

    public function editKamar(Request $request)
    {
        $editKamar = Kamar::where('id', $request->idKamarEdit)
            ->update([
                'nama_kamar'    => $request->editKamar,
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

    public function tarif()
    {
        $kamar = Kamar::all();
        // return dd($kamar);
        return view('dashboard.manajemen.tarif', compact('kamar'));
    }

    public function editTarif(Request $request)
    {
        $kamar = Kamar::where('id', $request->idTarifEdit)->update([
            'harga'       => $request->editHargaAsli,
            'harga_promo' => $request->editHargaPromo,
        ]);
        // return dd($kamar);
        return redirect()->back();
    }

    public function fasilitas()
    {
        $kamar          = Kamar::all();
        $fasilitas      = Fasilitas::all();
        $fasilitasKamar = FasilitasKamar::all();
        return view('dashboard.manajemen.fasilitas', compact('kamar', 'fasilitas', 'fasilitasKamar'));
    }

    public function tambahFasilitas(Request $request)
    {
        if (FasilitasKamar::where('kamar_id', $request->idKamarTambahFasilitas)->count() == 0) {
            $tambahFasilitas = new FasilitasKamar;
            for ($i = 0; $i < count($request->fasilitasKamar); $i++) {
                if (FasilitasKamar::where('kamar_id', $request->idKamarTambahFasilitas)->where('tipe_fasilitas_id', $request->fasilitasKamar[$i])->count() == 0) {
                    $fasilitasKamar                    = new FasilitasKamar;
                    $fasilitasKamar->tipe_fasilitas_id = $request->fasilitasKamar[$i];
                    $fasilitasKamar->kamar_id          = $request->idKamarTambahFasilitas;
                    $fasilitasKamar->save();
                }
            }
            return redirect()->back();
        } else {
            FasilitasKamar::where('kamar_id', $request->idKamarTambahFasilitas)->delete();
            $tambahFasilitas = new FasilitasKamar;
            for ($i = 0; $i < count($request->fasilitasKamar); $i++) {
                if (FasilitasKamar::where('kamar_id', $request->idKamarTambahFasilitas)->where('tipe_fasilitas_id', $request->fasilitasKamar[$i])->count() == 0) {
                    $fasilitasKamar                    = new FasilitasKamar;
                    $fasilitasKamar->tipe_fasilitas_id = $request->fasilitasKamar[$i];
                    $fasilitasKamar->kamar_id          = $request->idKamarTambahFasilitas;
                    $fasilitasKamar->save();
                }
            }
            return redirect()->back();
        }
    }

    public function karyawan()
    {
        $karyawan = Karyawan::get();
        return view('dashboard.manajemen.karyawan', compact('karyawan'));
    }

    public function tambahKaryawan(Request $request)
    {
        $tambahKaryawan                    = new Karyawan;
        $tambahKaryawan->nama              = $request->tambahNama;
        $tambahKaryawan->phone_number      = $request->tambahPhone;
        $tambahKaryawan->job_role          = $request->tambahJob;
        $tambahKaryawan->email             = $request->tambahEmail;
        $tambahKaryawan->tempat_lahir      = $request->tambahTempatLahir;
        $tambahKaryawan->tanggal_lahir     = $request->tambahTanggalLahir;
        $tambahKaryawan->alamat_tinggal    = $request->tambahAlamat;
        $tambahKaryawan->jenis_kelamin     = $request->tambahJK;
        $tambahKaryawan->status_perkawinan = $request->tambahSP;
        $tambahKaryawan->agama             = $request->tambahAgama;
        $tambahKaryawan->sd                = $request->tambahSD;
        $tambahKaryawan->smp               = $request->tambahSMP;
        $tambahKaryawan->sma               = $request->tambahSMA;
        $tambahKaryawan->perguruan_tinggi  = $request->tambahKuliah;
        $tambahKaryawan->pengalaman_kerja  = $request->tambahKerja;
        $tambahKaryawan->save();
        // return dd($tambahKaryawan);
        return redirect()->back();
    }

    public function karyawanDetail(Request $request)
    {
        $karyawanDetail = Karyawan::where('id', $request->idKaryawan)->first();
        // return dd($request);
        return view('dashboard.manajemen.karyawanDetail', compact('karyawanDetail'));
    }

    public function deleteKaryawanDetail(Request $request)
    {
        Karyawan::where('id', $request->idKamarDelete)->delete();
        return redirect()->route('dashboard.manajemen.karyawan');
    }

    public function akun()
    {
        $allUser = User::get();
        return view('dashboard.manajemen.akun', compact('allUser'));
    }

    public function tambahAkun(Request $request)
    {

        $user            = new User;
        $user->user_role = 'admin';
        $user->name      = $request->name;
        $user->email     = $request->email;
        $user->password  = Hash::make($request->password);
        $user->save();

        return redirect()->back();
    }

    public function editAkun(Request $request)
    {
        if ($request->editPass == null) {
            $editAkun = User::where('id', $request->idEditAkun)->update([
                'name'  => $request->editNama,
                'email' => $request->editEmail,
            ]);
            return redirect()->back();
        } else {
            if ($request->editPass == $request->editKonfirmasiPass) {
                $editAkun = User::where('id', $request->idEditAkun)->update([
                    'name'     => $request->editNama,
                    'email'    => $request->editEmail,
                    'password' => Hash::make($request->editPass),
                ]);
                return redirect()->back();
            } else {
                return redirect()->back();
            }
        }
    }

    public function deleteAkun(Request $request)
    {
        User::where('id', $request->idDeleteAkun)->delete();
        return redirect()->back();
        // return dd($request->idDeleteAkun);
    }
}
