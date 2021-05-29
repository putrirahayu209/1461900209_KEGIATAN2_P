<?php

namespace Database\Seeders;

use App\Models\anggota;
use Illuminate\Database\Seeder;

class anggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agt1 = new anggota(); 
        $agt1->anggota_id = 1;
        $agt1->anggota_nama = "Arif";
        $agt1->anggota_alamat = "Sidoarjo";
        $agt1->anggota_jk = "L";
        $agt1->anggota_telp = "11111";
        $agt1->save();
        
        $agt2 = new anggota(); 
        $agt2->anggota_id = 2;
        $agt2->anggota_nama = "Ade";
        $agt2->anggota_alamat = "Surabaya";
        $agt2->anggota_jk = "L";
        $agt2->anggota_telp = "22222";
        $agt2->save();

        $agt3 = new anggota(); 
        $agt3->anggota_id = 3;
        $agt3->anggota_nama = "Zam";
        $agt3->anggota_alamat = "Kalimantan";
        $agt3->anggota_jk = "L";
        $agt3->anggota_telp = "33333";
        $agt3->save();
    }
}
