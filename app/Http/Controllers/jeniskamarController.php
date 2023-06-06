<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\jeniskamarModel;

class jeniskamarController extends Controller
{
    public function index(){
        $data = array(
            "jeniskamar" => jeniskamarModel::all(),
        );
        return view('pages.#jeniskamar.jeniskamar', $data);
    }

    //Tambah Data
    public function create(){
        return view('pages.#jeniskamar.tambahJenisKamar');
    }

    public function store(Request $request)
    {
        jeniskamarModel::create($request->all());
        return redirect('/jeniskamar');
    }
    //Delete Data 
    public function delete($id_jenis_kamar){
        $id_jenis_kamar = jeniskamarModel::where('id_jenis_kamar', $id_jenis_kamar);
        $id_jenis_kamar->delete();

        return redirect('/jeniskamar');
    }
    //Edit Data
    public function edit($id_jenis_kamar)
    {
        $id_jenis_kamar = jeniskamarModel::find($id_jenis_kamar);
        return view('pages.#jeniskamar.tampilJenisKamar', ['id_jenis_kamar' => $id_jenis_kamar]);
    }   
    
    public function update(Request $request, string $id_jenis_kamar)
    {
        $id_jenis_kamar = jeniskamarModel::find($id_jenis_kamar);
        $id_jenis_kamar->update($request->all());
        return redirect('jeniskamar')->with('success', 'Data Berhasil Di Edit!');
    }
}