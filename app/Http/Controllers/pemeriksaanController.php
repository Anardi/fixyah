<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\pemeriksaanModel;

class pemeriksaanController extends Controller
{
    public function index(){
        $data = array(
            "pemeriksaan" => pemeriksaanModel::all(),
        );
        return view('pages.#pemeriksaan.pemeriksaan', $data);
    }
    //Tambah Data
    public function create(){
        return view('pages.#pemeriksaan.tambahPemeriksaan');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        pemeriksaanModel::create($request->all());
        return redirect('/pemeriksaan');
    }
    //Edit Data
    public function edit($id_kode_pemeriksaan)
    {
        $data = [
            "data_pemeriksaaan" =>pemeriksaanModel::find($id_kode_pemeriksaan),
            "id_kode_pemeriksaan" => $id_kode_pemeriksaan,
            'pemeriksaan' => pemeriksaanModel::all()
        ];
        return view('pages.#pemeriksaan.tampilPemeriksaan',$data);
    }
    
    public function update(Request $request, string $id_kode_pemeriksaan)
    {
        $data = [
            'id _dokter'=>$request->id_kode_pemeriksaan,
            'tgl_periksa'=>$request->tgl_periksa,
            'Keluhan'=>$request->Keluhan,
            'Keterangan'=>$request->Keterangan,
            'Biaya_pemeriksaan'=>$request->Biaya_pemeriksaan,
        ];
        pemeriksaanModel::find($id_kode_pemeriksaan)->update($data);

        return redirect()->route('dokter')->with('success', 'Data Berhasil Di Edit!');
    }
}