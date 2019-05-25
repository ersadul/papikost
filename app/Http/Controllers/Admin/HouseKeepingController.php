<?php

namespace App\Http\Controllers\Admin;

use App\Kamar;
use App\Karyawan;
use App\PenjadwalanKaryawan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HouseKeepingController extends Controller
{
    public function penjadwalan(){
        $penjadwalanAll = PenjadwalanKaryawan::get();
        $karyawanAll = Karyawan::get();
        $seluruhKamar = Kamar::get();
        return view('dashboard.housekeeping.penjadwalan', compact('penjadwalanAll', 'karyawanAll', 'seluruhKamar'));
    }

    public function tambahPenjadwalan(Request $request)
    {
        for($i=0; $i < count($request->jadwalKaryawan); $i++){
            $tambahPenjadwalan = new PenjadwalanKaryawan;
            $tambahPenjadwalan->kamar_id = $request->pilihKamar[0];
            $tambahPenjadwalan->karyawan_id = $request->jadwalKaryawan[$i];
            $tambahPenjadwalan->jam_jadwal = $request->jadwalJam;
            $tambahPenjadwalan->tanggal_jadwal = date("Y-m-d", strtotime($request->jadwalTanggal));
            $tambahPenjadwalan->shift = $request->jadwalShift;
            $tambahPenjadwalan->save();
        }
        // return dd( $request->pilihKamar[0]);
        return redirect()->back();
    }

    public function deletePenjadwalan(Request $request)
    {
        PenjadwalanKaryawan::where('id', $request->idDeletePenjadwalan)->delete();
        return redirect()->back();
        // return dd($request->idDeletePenjadwalan);
    }

    public function logbook(){
        return view('dashboard.housekeeping.logbook');
    }

    public function tambahLogbook(Request $request)
    {

    }
    
    public function cleaning(){
        return view('dashboard.housekeeping.cleaning');
    }

    public function tambahCleaning(Request $request)
    {
        
    }
}
