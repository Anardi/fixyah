<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\kamarModel;

class kamarController extends Controller
{
    public function index(){
        $data = array(
            "kamar" => kamarModel::all(),
        );
        return view('pages.#kamar.kamar',$data);
    }

    //Tambah Data
    public function create(){
        return view('pages.#kamar.tambahKamar');
    }

    public function store(Request $request)
    {
        kamarModel::create($request->all());
        return redirect('/kamar');
    }
    //Edit Data
    public function edit($kode_kamar)
    {
        $data = [
            "data_kamar" =>kamarModel::find($kode_kamar),
            "kode_kamar" => $kode_kamar,
            'kamar' => kamarModel::all()
        ];
        return view('pages.#kamar.tampilKamar',$data);
    }
    
    public function update(Request $request, string $kode_kamar)
    {
        $data = [
            'kode_kamar'=>$request->kode_kamar,
            'jenis_kamar'=>$request->jenis_kamar,
            'Tarif_layanan'=>$request->Tarif_layanan,
            'Fasilitas'=>$request->Fasilitas,
        ];
        kamarModel::find($kode_kamar)->update($data);

        return redirect()->route('/kamar')->with('success', 'Data Berhasil Di Edit!');
    }
}