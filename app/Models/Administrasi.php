<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    use HasFactory;

    protected $table = 'administrasi';

    protected $fillable = [
        'kode',
        'nama_administrasi',
        'tarif'
    ];
}
