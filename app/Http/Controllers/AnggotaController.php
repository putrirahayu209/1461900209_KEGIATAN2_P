<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Pinjam;
use Illuminate\Http\Request;

class AnggotaController extends Controller{
    public function anggota(){
        $term = "Ade";
        $anggota = Anggota::all(); //select all
        $book = Buku::join('kategori','buku.kategori_id','=','kategori.kategori_id')->get(); //join saja
        $like = Anggota::where('anggota_nama','LIKE','%'.$term.'%')->get();
        $joinlike = Pinjam::join('buku','buku.buku_id','=','pinjam.buku_id')->join('anggota','anggota.anggota_id','=','pinjam.anggota_id')->where('buku.buku_judul','=','HTML & CSS')->get();
        //
        return view('anggota',[
            'anggota' => $anggota,
            'book'=>$book,
            'like' =>$like,
            'joinlike' =>$joinlike
        ]);
    }
}
