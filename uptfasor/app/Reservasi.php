<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $table = 'reservasi';

    protected $fillable = [
        'id_petugas',
        'id_lapangan',
        'id_penyewa',
        'tanggal_sewa',
        'waktu_mulai_sewa',
        'waktu_selesai_sewa'
    ];
}
