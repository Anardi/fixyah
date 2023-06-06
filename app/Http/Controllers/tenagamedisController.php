<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tenagamedisModel;

class tenagamedisController extends Controller
{
    public function index(){
        $data = array(
            "tenagamedis" => tenagamedisModel::all(),
        );
        return view('pages.#tenagamedis.tenagamedis', $data);
    }
    //Tambah Data
    public function create(){
        return view('pages.#tenagamedis.tambahTenagaMedis');
    }

    public function store(Request $request)
    {
        tenagamedisModel::create($request->all());
        return redirect('/tenagamedis');
    }
    //Delete Data
    public function delete($id_tenagamedis){
        $id_tenagamedis = tenagamedisModel::where('id_tenagamedis', $id_tenagamedis);
        $id_tenagamedis->delete();

        return redirect('/tenagamedis');
    }
    //Edit Data
    public function edit($id_tenagamedis)
    {
        $data = [
            "data_dokter" =>tenagamedisModel::find($id_tenagamedis),
            "id_tenagamedis" => $id_tenagamedis,
            'tenagamedis' => tenagamedisModel::all()
        ];
        return view('pages.#dokter.tampilDokter',$data);
    }
    
    public function update(Request $request, string $id_tenagamedis)
    {
        $data = [
            'id_tenagamedis'=>$request->id_tenagamedis,
            'Nama_Tenagamedis'=>$request->Nama_Tenagamedis,
        ];
        tenagamedisModel::find($id_tenagamedis)->update($data);

        return redirect('/tenagamedis')->with('success', 'Data Berhasil Di Edit!');
    }
}
