<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    //
    public function index($pertanyaan_id){
        $pertanyaan = PertanyaanModel::getPertanyaanById($pertanyaan_id);
        $jawaban = JawabanModel::getJawabanByPertanyaanId($pertanyaan_id);
        return view ('jawaban.index')->with('pertanyaan', $pertanyaan)->with('list_jawaban', $jawaban);
    }

    public function store(Request $request, $pertanyaan_id){
        $data = $request->all();
        unset($data['_token']);
        $data['pertanyaan_id'] = $pertanyaan_id;
        $jawaban = JawabanModel::save($data);
        return redirect()->back();
    }

    
}
