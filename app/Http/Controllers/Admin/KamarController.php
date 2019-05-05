<?php

namespace App\Http\Controllers\Admin;

use App\Kamar;
use App\TipeKamar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Image;
use File;

class KamarController extends Controller
{
    public function index(){
        $kamar = Kamar::get();
        $tipeKamar = TipeKamar::get();
        // return dd($tipeKamar);
        return view('kamar/home', compact('kamar', 'tipeKamar'));
    }

    public function storeKamar(Request $request){
        $data = DB::table('kamar')->insert([
                'nama_kamar' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'tipe_kamar_id' => $request->tipeKamar
                ]);
    }

    public function editKamar($id){
        $kamar = DB::table('kamar')->where('kamar.id', $id)->get();
        return view('kamar/edit', ['kamar' => $kamar]);
    }

    public function updateKamar(Request $request){
        DB::table('kamar')
                ->where('id', $request->id)
                ->update([
                    'nama_kamar' => $request->nama,
                    'harga' => $request->harga,
                ]);
    }

    public function deleteKamar(Request $request){
        DB::table('kamar')
            ->where('id', $request->id)
            ->delete();
    }
}
