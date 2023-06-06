<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pegawaiModel;

class pegawaiController extends Controller
{
    public function index(){
        $pegawai = array(
            "pegawai" => pegawaiModel::all(),
        );
        return view('pages.#pegawai.datapegawai', $pegawai);
    }   

    //Tambah Data
    public function create(){
        return view('pages.#pegawai.tambahPegawai');
    }

    public function store(Request $request)
    {
        pegawaiModel::create($request->all());
        return redirect('/pegawai');
    }
    //Delete Data
    public function delete($id_pegawai){
        $pegawai = pegawaiModel::where('id_pegawai', $id_pegawai);
        $pegawai->delete();

        return redirect('/pegawai');
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
    // public function deletepegawai($id_pegawai){
    //     $pegawai = pegawaiModel::where('id_pegawai', $id_pegawai);
    //     $pegawai->delete();
    //     return redirect('/pegawai');
    // }

}
