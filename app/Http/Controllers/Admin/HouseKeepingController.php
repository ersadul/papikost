<?php

namespace App\Http\Controllers\Admin;

use App\Invoice;
use App\LogBook;
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
    }

    public function logbook(){
        $logbookAll = LogBook::get();
        $seluruhKamar = Kamar::get();
        return view('dashboard.housekeeping.logbook', compact('logbookAll', 'seluruhKamar'));
    }

    public function tambahLogbook(Request $request)
    {
        $tambahLogBook = new LogBook;
        $tambahLogBook->status_logbook = $request->tambahStatus;  
        $tambahLogBook->kamar_id = $request->pilihKamar[0];
        $tambahLogBook->keterangan_barang = $request->tambahKeterangan; 
        $tambahLogBook->tanggal_kehilangan = date("Y-m-d", strtotime($request->tambahTanggal));
        $tambahLogBook->jumlah_barang = $request->tambahBarang;
        $tambahLogBook->customer = $request->tambahCustomer;
        $tambahLogBook->save();
        return redirect()->back();
    }
    
    public function cleaning(){
        $jadwalCleaning = Invoice::join('payment_invoice', 'invoice.id', '=', 'payment_invoice.invoice_id')
        ->join('kamar', 'kamar.id', '=', 'invoice.kamar_id')
        ->where('status_menginap', 2)
        ->where('flag_payment', 1)
        ->get();
        // return dd($jadwalCleaning);
        return view('dashboard.housekeeping.cleaning', compact('jadwalCleaning'));
    }
}
