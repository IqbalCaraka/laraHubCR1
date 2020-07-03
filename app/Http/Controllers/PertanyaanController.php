<?php

namespace App\Http\Controllers;

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
}
