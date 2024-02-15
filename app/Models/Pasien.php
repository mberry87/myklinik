<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';

    protected $fillable = [
        'no_rm',
        'ktp_ktp',
        'no_bpjs',
        'nama_pasien',
        'jenis_kelamin',
        'tgl_lahir',
        'alamat',
        'no_tlp',
        'pekerjaan',
        'status',
        'prov',
        'kab',
        'kec',
        'kel',
    ];
}
