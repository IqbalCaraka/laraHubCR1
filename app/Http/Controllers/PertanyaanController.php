<?php

namespace App\Http\Controllers;

use App\Models\JawabanModel;
use Illuminate\Http\Request;

use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function index(){
        $data = PertanyaanModel::get_all();
        return view('pertanyaan.index')->with('list_pertanyaan', $data);
    }

    public function create(){
        return view('pertanyaan.create'); 
    }

    public function store(Request $request){  
        $data = $request->all();
        unset($data['_token']);
        $pertanyaan =PertanyaanModel::save($data);
        return redirect('pertanyaan');
        //return view('pertanyaan.index');
    }

    public function destroy($id){
        $pertanyaan = PertanyaanModel::deletePertanyaanById($id);
        $jawaban = JawabanModel::deleteJawabanByPertanyaanId($id);
        return redirect('pertanyaan');

    }

    public function edit($id){
        $pertanyaan = PertanyaanModel::getPertanyaanById($id);
        return view('pertanyaan.create')->with('pertanyaan', $pertanyaan);
    }

    public function update(Request $request, $id){
        $data = $request->all();
        $pertanyaan = PertanyaanModel::updatePertanyaanById($data ,$id);
        return redirect('pertanyaan');
    }
}
