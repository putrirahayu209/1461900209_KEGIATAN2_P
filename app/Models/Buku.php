<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'buku_id';
    // protected $keyType = 'string';

    protected $fillable = [
        'buku_id',
        'buku_judul',
        'kategori_id',
        'buku_deskripsi',
        'buku_jumlah',
        'buku_cover'
    ];
}
