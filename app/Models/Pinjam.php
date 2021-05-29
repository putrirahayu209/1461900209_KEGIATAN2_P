<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

    protected $table = 'pinjam';
    protected $primaryKey = 'pinjam_id';
    // protected $keyType = 'string';

    protected $fillable = [
        'pinjam_id',
        'buku_id',
        'anggota_id',
        'tgl_pinjam',
        'tgl_jatuh_tempo'
    ];
}
