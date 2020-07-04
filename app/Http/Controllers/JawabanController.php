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
        $daftarJawaban = JawabanModel::getJawabanByPertanyaanId($pertanyaan_id);
        return view ('jawaban.index')->with('pertanyaan', $pertanyaan)->with('list_jawaban', $daftarJawaban);
    }

    public function store(Request $request, $pertanyaan_id){
        $data = $request->all();
        unset($data['_token']);
        $data['pertanyaan_id'] = $pertanyaan_id;
        $jawaban = JawabanModel::save($data);
        return redirect()->back();
    }

    public function destroy($id){
        $jawaban = JawabanModel::deleteJawabanById($id);
        return redirect()->back();
    }

    public function edit($id){
        $editJawaban = JawabanModel::getJawabanById($id);
        $pertanyaan = PertanyaanModel::getPertanyaanById($editJawaban->pertanyaan_id);
        $daftarJawaban = JawabanModel::getJawabanByPertanyaanId($editJawaban->pertanyaan_id);
        return view ('jawaban.index')
            ->with('pertanyaan', $pertanyaan)
            ->with('list_jawaban', $daftarJawaban)
            ->with('editJawaban',$editJawaban);
    }

    public function update(Request $request, $id){
        $data = $request->all();
        JawabanModel::updateJawabanById($data ,$id);
        return redirect()->back();
    }

    
}
