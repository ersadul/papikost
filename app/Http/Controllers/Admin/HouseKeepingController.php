<?php

namespace App\Http\Controllers\Admin;

use App\Cleaning;
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
        $penjadwalanAll = PenjadwalanKaryawan::join('kamar', 'penjadwalan_karyawan.kamar_id', '=', 'kamar.id')->get();
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
            $tambahPenjadwalan->tanggal_jadwal = date("Y-m-d", strtotime($request->jadwalTanggal));
            $tambahPenjadwalan->shift = $request->jadwalShift[0];
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
        ->join('cleaning', 'invoice.id', '=', 'cleaning.invoice_id')
        ->get();

        // return dd($jadwalCleaning);
        return view('dashboard.housekeeping.cleaning', compact('jadwalCleaning'));
    }

    public function snackCleaning(Request $request)
    {
        // if(Cleaning::where('invoice_id', $request->idInvoiceCleaning)->select(''))
        // Cleaning::where('invoice_id', $request->idInvoiceCleaning)->update([
        //     'snack' => 1
        // ]);
        if($request->snack1 == 0){
            Cleaning::where('invoice_id', $request->idInvoiceCleaning)->update([
                'snack' => 0
            ]);
            // return 'dari nyala ke mati';
            return redirect()->back();
        } else if($request->snack1 == 1) {
            Cleaning::where('invoice_id', $request->idInvoiceCleaning)->update([
                'snack' => 1
            ]);
            return redirect()->back();
            // return 'dari mati ke nyala';
        }
    }

    public function bedCleaning(Request $request)
    {
        // return 1;
        if($request->bed1 == 0){
            Cleaning::where('invoice_id', $request->idInvoiceCleaning)->update([
                'bed' => 0
            ]);
            // return 'dari nyala ke mati';
            return redirect()->back();
        } else if($request->bed1 == 1) {
            Cleaning::where('invoice_id', $request->idInvoiceCleaning)->update([
                'bed' => 1
            ]);
            return redirect()->back();
            // return 'dari mati ke nyala';
        }
    }

    public function bersihCleaning(Request $request)
    {
        if($request->bersih1 == 0){
            Cleaning::where('invoice_id', $request->idInvoiceCleaning)->update([
                'bersih_ringan' => 0
            ]);
            // return 'dari nyala ke mati';
            return redirect()->back();
        } else if($request->bersih1 == 1) {
            Cleaning::where('invoice_id', $request->idInvoiceCleaning)->update([
                'bersih_ringan' => 1
            ]);
            return redirect()->back();
            // return 'dari mati ke nyala';
        }
    }

    public function vacantDone(Request $request)
    {
        Cleaning::where('invoice_id', $request->idInvoiceCleaning)->delete();
        return redirect()->back();
        // return dd($request);
    }
}
