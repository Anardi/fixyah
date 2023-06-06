<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawaiModel extends Model
{
    use HasFactory;
    protected $table = "data_pegawai";
    protected $primaryKey = "kode_kamar";
    protected $guarded = [];
    protected $fillable = [
        'id_pegawai',
        'nama_pegawai',
        'Alamat_pegawai',
        'telp_pegawai',
        'ttl_pegawai',
    ];
    // protected $primarykey = 'id_pegawai';
    // protected $keyType = 'id_pegawai';
    // public $timestamps=false;
    // public $incrementing = false;
}