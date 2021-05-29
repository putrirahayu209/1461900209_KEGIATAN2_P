<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    protected $primaryKey = 'anggota_id';
    // protected $keyType = 'string';

    protected $fillable = [
        'anggota_id',
        'anggota_nama',
        'anggota_alamat',
        'anggota_jk	',
        'anggota_telp'
    ];
}
