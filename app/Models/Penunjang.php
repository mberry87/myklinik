<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penunjang extends Model
{
    use HasFactory;

    protected $table = 'penunjang';

    protected $fillable = [
        'kode',
        'nama_penunjang',
        'harga_modal',
        'harga_jual',
    ];
}
