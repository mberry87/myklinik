<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $table = 'obat';

    protected $fillable = [
        'kode',
        'nama_obat',
        'satuan',
        'tipe',
        'qty',
        'date_exp',
        'harga_modal',
        'harga_jual',
    ];
}
