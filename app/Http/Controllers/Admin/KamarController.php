<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{
    public function index(){
        $kamar = DB::table('kamar')
                    ->join('tipe_kamar', 'kamar.tipe_kamar_id', '=', 'tipe_kamar.id')
                    ->get();
        $tipe_kamar = DB::table('tipe_kamar')->get();
        return view('kamar/home', ['kamar' => $kamar, 'tipe' => $tipe_kamar]);
    }

    public function storeKamar(Request $request){
        DB::table('kamar')->insert([
                'nama_kamar' => $request->nama,
                'harga' => $request->harga,
                'tipe_kamar_id' => $request->tipe_kamar_id
                ]);
    }

    public function updateKamar(Request $request){
        DB::table('kamar')
                ->where('id', $request->id)
                ->update([
                    'nama_kamar' => $request->nama,
                    'harga' => $request->harga,
                    'tipe_kamar_id' => $request->tipe_kamar_id
                ]);
    }

    public function deleteKamar(Request $request){
        
    }
}
