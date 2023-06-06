<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penggunaModel extends Model
{
    use HasFactory;
    protected $table = "data_pengguna";
    protected $primaryKey = "kode_kamar";
    protected $guarded = [];
    protected $fillable = [
        'id_pengguna',
        'username',
        'password',
    ];
}
