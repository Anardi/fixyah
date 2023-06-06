<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwalmodel extends Model
{
    use HasFactory;
    protected $table = "data_jadwal";
    protected $primaryKey = "id_kode_jadwal";
    protected $guarded = [];
    protected $fillable = [
        'id_kode_jadwal',
        // 'id_dokter',
        'hari',
        'jam_mulai',
        'jam_selesai',
    ];
}
