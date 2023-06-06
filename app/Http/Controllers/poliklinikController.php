<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\poliklinikModel;

class poliklinikController extends Controller
{
    public function index(){
        $data = array(
            "poliklinik" => poliklinikModel::all(),
        );
        return view('pages.#poliklinik.poliklinik', $data);
    }
}
