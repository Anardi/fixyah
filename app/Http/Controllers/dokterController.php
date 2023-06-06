<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\dokter;
use App\Models\pasienModel;

class dokterController extends Controller
{
    public function index(){
        $dokter = dokter::all();
        // $dokter = dokter::where('kode_pasien', '1232131')->get();
        return view('pages.#dokter.dokter',compact('dokter'));
    }
    //Tambah Data
    public function create(){
        return view('pages.#dokter.tambahDokter', [
            'pasien' => pasienModel::all()
        ]);
    }
    public function store(Request $request)
    {
        Dokter::create($request->all());
        return redirect('/dokter');
    }
    //Delete Data
    public function delete($id_dokter){
        $dokter = dokter::where('id_dokter', $id_dokter);
        $dokter->delete();

        return redirect('/dokter');
    }

    //Edit Data
    public function edit($id_dokter)
    {
        $data = [
            "data_dokter" => dokter::find($id_dokter),
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

        return redirect()->route('/dokter')->with('success', 'Data Berhasil Di Edit!');
    }
}