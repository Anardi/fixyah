<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasienModel extends Model
{
    use HasFactory;
    protected $table = "data_pasien";
    protected $primaryKey = "id_kode_pasien";
    protected $guarded = [];
    protected $fillable = [
        'id_kode_pasien',
        'Nama_pasien',
        'jenis_kamar',
        'Alamat_Pasien',
        'Umur_pasien',
        'Jenis_kelamin',
        'gol_darah',
    ];

    // relational
    public function dokter() {
        return $this->hasMany(dokter::class);
    }
}
