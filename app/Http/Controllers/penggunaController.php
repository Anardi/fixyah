<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penggunaModel;

class penggunaController extends Controller
{
    public function index(){
        $data = array(
            "pengguna" => penggunaModel::all(),
        );
        return view('pages.#pengguna.pengguna', $data);
    }
    //Tambah Data
    public function create(){
        return view('pages.#pengguna.tambahPengguna');
    }

    public function store(Request $request)
    {
        penggunaModel::create($request->all());
        return redirect('/pengguna');
    }
    //Delete Data
    public function delete($id_pengguna){
        $pengguna = penggunaModel::where('id_pengguna', $id_pengguna);
        $pengguna->delete();

        return redirect('/pengguna');
    }
    //Edit Data
    public function edit($id_dokter)
    {
        $data = [
            "data_dokter" =>dokter::find($id_dokter),
            "id_dokter" => $id_dokter,
            'pasien' => pasienModel::all()
        ];
        return view('pages.#dokter.tampilDokter',$data);
    }
    
    public function update(Request $request, string $id_dokter)
    {
        $data = [
            'id _dokter'=>$request->id_dokter,
            'kode_pasien'=>$request->kode_pasien,
            'Nama_Dokter'=>$request->Nama_Dokter,
            'Jadwal_Dokter'=>$request->Jadwal_Dokter,
            'Spesialis'=>$request->Spesialis,
        ];
        dokter::find($id_dokter)->update($data);

        return redirect()->route('dokter')->with('success', 'Data Berhasil Di Edit!');
    }
}
