<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\jadwalmodel;

class jadwalController extends Controller
{
    public function index(){
        $jadwal = jadwalmodel::all();
        return view('pages.#jadwal.jadwal',compact('jadwal'));
    }

    //Tambah Data
    public function create(){
        return view('pages.#jadwal.tambahJadwal');
    }

    public function store(Request $request)
    {
        jadwalmodel::create($request->all());
        return redirect('/jadwal');
    }
    //Delete Data
    public function delete($id_kode_jadwal){
        $jadwal = jadwalmodel::where('kode_jadwal', $id_kode_jadwal);
        $jadwal->delete();

        return redirect('/jadwal');
    }
    //Edit Data
    public function edit($id_kode_jadwal)
    {
        $data = [
            "data_jadwal" =>jadwalmodel::find($id_kode_jadwal),
            "id_kode_jadwal" => $id_kode_jadwal,
            'jadwal' => jadwalmodel::all()
        ];
        return view('pages.#jadwal.tampilJadwal',$data);
    }
    
    public function update(Request $request, string $id_kode_jadwal)
    {
        $data = [
            'id_kode_jadwal'=>$request->id_kode_jadwal,
            'hari'=>$request->hari,
            'jam_mulai'=>$request->jam_mulai,
            'jam_selesai'=>$request->jam_selesai,
        ];
        jadwalmodel::find($id_kode_jadwal)->update($data);
        return redirect('/jadwal')->with('success', 'Data Berhasil Di Edit!');
        //return redirect()->route('jadwal')->with('success', 'Data Berhasil Di Edit!');
    }
}
