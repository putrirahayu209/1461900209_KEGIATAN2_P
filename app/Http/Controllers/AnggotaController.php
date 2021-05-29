<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facedes\DB;
use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Pinjam;
use Illuminate\Http\Request;

class AnggotaController extends Controller{
    public function anggota(){
        $term = "Arif";
        $anggota = Anggota::all(); //select
        $like = Anggota::where('anggota_nama','LIKE','%'.$term.'%')->get(); //select like
        $book = Buku::join('kategori','buku.kategori_id','=','kategori.kategori_id')->get(); //select join 
        $joinlike = Pinjam::join('buku','buku.buku_id','=','pinjam.buku_id')->join('anggota','anggota.anggota_id','=','pinjam.anggota_id')->where('buku.buku_judul','=','HTML & CSS')->get();
        //join dengan like
        return view('anggota',[
            'anggota' => $anggota,
            'like' =>$like,
            'book'=>$book,
            'joinlike' =>$joinlike
        ]);
    }
}
