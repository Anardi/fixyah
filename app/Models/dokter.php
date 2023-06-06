<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $table = "data_dokter";
    protected $primaryKey = "id_dokter";
    protected $guarded = [];
    protected $fillable = [
        'id_dokter',
        'kode_pasien',
        'Nama_Dokter',
        'Jadwal_Dokter',
        'Spesialis',
    ];
    // relational
    public function pasien() {
        return $this->belongsTo(pasienModel::class);
    }

}
