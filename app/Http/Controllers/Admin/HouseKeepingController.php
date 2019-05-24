<?php

namespace App\Http\Controllers\Admin;

use App\PenjadwalanKaryawan;
use Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HouseKeepingController extends Controller
{
    public function penjadwalan(){
        $penjadwalanAll = PenjadwalanKaryawan::get();
        return view('dashboard.housekeeping.penjadwalan', compact('penjadwalanAll'));
    }

    public function tambahPenjadwalan(Request $request)
    {
        $tambahPenjadwalan = new PenjadwalanKaryawan;
        $tambahPenjadwalan->tanggal_jadwal = $request->jadwalKamar;
        $tambahPenjadwalan->jam_jadwal = $request->jadwalJam;
        $tambahPenjadwalan->shift = $request->jadwalShift;
        $tambahPenjadwalan->karyawan_id = 1;
        $tambahPenjadwalan->save();
        // return dd($tambahPenjadwalan);
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
    public function cleaning(){
        return view('dashboard.housekeeping.cleaning');
    }
}
