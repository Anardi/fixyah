<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemeriksaanModel extends Model
{
    use HasFactory;
    protected $table = "data_pemeriksaaan";
    protected $primaryKey = "id_kode_pemeriksaan";
    protected $guarded = [];
    protected $fillable = [
        'id_kode_pemeriksaan',
        'tgl_periksa',
        'Keluhan',
        'Keterangan',
        'Biaya_pemeriksaan',
    ];
}
