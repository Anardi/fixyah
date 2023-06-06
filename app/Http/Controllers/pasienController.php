<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasienModel;

class pasienController extends Controller
{
    //Tampil
    public function index(){
        $data = array(
            "pasien" => pasienModel::all(),
        );
        return view('pages.#pasien.pasien', $data);
    }

    //Tambah Data
    public function create(){
        return view('pages.#pasien.tambahPasien');
    }

    public function store(Request $request)
    {
        PasienModel::create($request->all());
        return redirect('/pasien');
    }
    //delete
    public function delete($id_kode_pasien){
        $pasien = pasienModel::where('kode_pasien', $id_kode_pasien);
        $pasien->delete();

        return redirect('/pasien');
    }
    //Edit Data
    public function edit($id_kode_pasien)
    {
        $data = [
            "data_dokter" =>pasienModel::find($id_kode_pasien),
            "id_dokter" => $id_kode_pasien,
            'pasien' => pasienModel::all()
        ];
        return view('pages.#pasien.tampilPasien',$data);
    }
    
    public function update(Request $request, string $id_kode_pasien)
    {
        $data = [
            'id_kode_pasien'=>$request->id_kode_pasien,
            'Nama_pasien'=>$request->Nama_pasien,
            'Alamat_Pasien'=>$request->Alamat_Pasien,
            'Umur_pasien'=>$request->Umur_pasien,
            'Jenis_kelamin'=>$request->Jenis_kelamin,
            'gol_darah'=>$request->gol_darah,
  
        ];
        pasienModel::find($id_kode_pasien)->update($data);

        return redirect('/pasien')->with('success', 'Data Berhasil Di Edit!');
    }
}
