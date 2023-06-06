<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\dokterController;
use App\Http\Controllers\pasienController;
use App\Http\Controllers\obatController;    
use App\Http\Controllers\pemeriksaanController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\penggunaController;
use App\Http\Controllers\tenagamedisController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\kamarController;
use App\Http\Controllers\jeniskamarController;
use App\Http\Controllers\poliklinikController;
use App\Http\Controllers\cobController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('About', [
        "name" => "Bagas Anardi",
        "email" => "bagasaanardi@gmail.com",
        "image" => "bagas.jpg",
    ]);
});

Route::get('/blog', function () {
    return view('Blog');
});

// Route::get('/pegawai', [pegawaiController::class, 'index'])->name('Pegawai'); 
// Route::get('/dokter', [dokterController::class, 'index'])->name('Dokter'); 
// Route::get('/pasien', [pasienController::class, 'index'])->name('Pasien');
// Route::get('/obat', [obatController::class, 'index'])->name('Obat');
// Route::get('/pemeriksaan', [pemeriksaanController::class, 'index'])->name('pemeriksaan');
// Route::get('/jadwal', [jadwalController::class, 'index'])->name('jadwal');
// Route::get('/pengguna', [penggunaController::class, 'index'])->name('pengguna');
// Route::get('/tenagamedis', [tenagamedisController::class, 'index'])->name('tenagamedis');
Route::get('/pembayaran', [pembayaranController::class, 'index'])->name('pembayaran');
// Route::get('/kamar', [kamarController::class, 'index'])->name('kamar');
// Route::get('/jeniskamar', [jeniskamarController::class, 'index'])->name('jeniskamar');
Route::get('/poliklinik', [poliklinikController::class, 'index'])->name('poliklinik');

// Route::get('/deletepegawai/{id_pegawai}', [pegawaiController::class, 'deletepegawai'])->name('deletepegawai');

// Route::resource('cob', cobController::class);


Route::controller(dokterController::class)->group(function () {
    Route::get('/dokter','index')->name('Dokter'); 
    Route::get('/dokter/formDokter', 'create')->name('formDokter');
    Route::post('/dokter/create','store')->name('postDokter');
    Route::get('/dokter/edit/{id_dokter}', 'edit')->name('editDokter');
    Route::post('/dokter/update/{id_dokter}', 'update')->name('updateDokter');
    Route::delete('/dokter/{id_dokter}','delete')->name('deleteDokter');
});

Route::controller(pasienController::class)->group(function () {
    Route::get('/pasien', 'index')->name('Pasien');
    Route::get('/pasien/form', 'create')->name('formPasien');
    Route::post('/pasien/create', 'store')->name('postPasien');
    Route::get('/pasien/edit/{id_kode_pasien}', 'edit')->name('editPasien');
    Route::post('/pasien/update/{id_kode_pasien}', 'update')->name('updatePasien');
    Route::delete('/pasien/{id_kode_pasien}','delete')->name('deletePasien');
});

Route::controller(jadwalController::class)->group(function () {
    Route::get('/jadwal', 'index')->name('Jadwal');
    Route::get('/jadwal/form', 'create')->name('formJadwal');
    Route::post('/jadwal/create', 'store')->name('postJadwal');
    Route::get('/jadwal/edit/{id_kode_jadwal}', 'edit')->name('editJadwal');
    Route::post('/jadwal/update/{id_kode_jadwal}', 'update')->name('updateJadwal');
    Route::delete('/jadwal/{id_kode_jadwal}','delete')->name('deleteJadwal');
});

//belom
Route::controller(jeniskamarController::class)->group(function () {
    Route::get('/jeniskamar', 'index')->name('JenisKamar');
    Route::get('/jeniskamar/form', 'create')->name('formJenisKamar');
    Route::post('/jeniskamar/create', 'store')->name('postJenisKamar');
    Route::get('/jeniskamar/edit/{id_jenis_kamar}', 'edit')->name('editJenisKamar');
    Route::post('/jeniskamar/update/{id_jenis_kamar}', 'update')->name('updateJenisKamar');
    Route::delete('/jeniskamar/{id_jenis_kamar}','delete')->name('deleteJenisKamar');
});

//belom
Route::controller(kamarController::class)->group(function () {
    Route::get('/kamar', 'index')->name('Kamar');
    Route::get('/kamar/form', 'create')->name('formKamar');
    Route::post('/kamar/create', 'store')->name('postKamar');
    Route::get('/kamar/edit/{id_kode_kamar}', 'edit')->name('editKamar');
    Route::post('/kamar/update/{id_kode_kamar}', 'update')->name('updateKamar');
    Route::delete('/kamar/{id_kode_kamar}','delete')->name('deleteKamar');
});


Route::controller(obatController::class)->group(function () {
    Route::get('/obat', 'index')->name('Obat');
    Route::get('/obat/form', 'create')->name('formObat');
    Route::post('/obat/create', 'store')->name('postObat');
    Route::get('/obat/edit/{id_kode_obat}', 'edit')->name('editObat');
    Route::post('/obat/update/{id_kode_obat}', 'update')->name('updateObat');
    Route::delete('/obat/{id_kode_obat}','delete')->name('deleteObat');
});

Route::controller(pegawaiController::class)->group(function () {
    Route::get('/pegawai', 'index')->name('Pegawai');
    Route::get('/pegawai/form', 'create')->name('formPegawai');
    Route::post('/pegawai/create', 'store')->name('postPegawai');
    Route::get('/pegawai/edit/{id_pegawai}', 'edit')->name('editPegawai');
    Route::post('/pegawai/update/{id_pegawai}', 'update')->name('updatePegawai');
    Route::delete('/pegawai/{id_pegawai}','delete')->name('deletePegawai');
});

Route::controller(pembayaranController::class)->group(function () {
    Route::get('/pembayaran', 'index')->name('Pembayaran');
    Route::get('/pembayaran/form', 'create')->name('formPembayaran');
    Route::post('/pembayaran/create', 'store')->name('postPembayaran');
    // Route::delete('/pembayaran/{id_dokter}','delete')->name('deletePembayaran');
});

Route::controller(pemeriksaanController::class)->group(function () {
    Route::get('/pemeriksaan', 'index')->name('Pemeriksaan');
    Route::get('/pemeriksaan/form', 'create')->name('formPemeriksaan');
    Route::post('/pemeriksaan/create', 'store')->name('postPemeriksaan');
    Route::get('/pemeriksaan/edit/{id_kode_pemeriksaan}', 'edit')->name('editPemeriksaan');
    Route::post('/pemeriksaan/update/{id_kode_pemeriksaan}', 'update')->name('updatePemeriksaan');
    Route::delete('/pemeriksaan/{id_kode_pemeriksaan}','delete')->name('deletePemeriksaan');
});

Route::controller(penggunaController::class)->group(function () {
    Route::get('/pengguna', 'index')->name('Pengguna');
    Route::get('/pengguna/form', 'create')->name('formPengguna');
    Route::post('/pengguna/create', 'store')->name('postPengguna');
    Route::get('/pengguna/edit/{id_pengguna}', 'edit')->name('editPengguna');
    Route::post('/pengguna/update/{id_pengguna}', 'update')->name('updatePengguna');
    Route::delete('/pengguna/{id_pengguna}','delete')->name('deletePengguna');
});

// Route::controller(poliklinikController::class)->group(function () {
//     Route::get('/poliklinik', 'index')->name('Poliklinik');
//     Route::get('/poliklinik/form', 'create')->name('formPoliklinik');
//     Route::post('/poliklinik/create', 'store')->name('postPoliklinik');
//     // Route::delete('/dokter/{id_dokter}','delete')->name('deleteDokter');
// });

Route::controller(tenagamedisController::class)->group(function () {
    Route::get('/tenagamedis', 'index')->name('TenagaMedis');
    Route::get('/tenagamedis/form', 'create')->name('formTenagaMedis');
    Route::post('/tenagamedis/create', 'store')->name('postTenagaMedis');
    Route::get('/tenagamedis/edit/{id_tenagamedis}', 'edit')->name('editTenagaMedis');
    Route::post('/tenagamedis/update/{id_tenagamedis}', 'update')->name('updateTenagaMedis');
    Route::delete('/tenagamedis/{id_tenagamedis}','delete')->name('deleteTenagaMedis');
});