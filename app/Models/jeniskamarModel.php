<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jeniskamarModel extends Model
{
    use HasFactory;
    protected $table = "data_jenis_kamar";
    protected $primaryKey = "id_jenis_kamar";
    protected $guarded = [];
    protected $fillable = [
        'id_jenis_kamar',
        'nama_kamar',
        'status',
    ];
}
