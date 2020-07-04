<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel{
    public static function get_all(){
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    public static function save($pertanyaan){
        $new_pertanyaan = DB::table('pertanyaan')->insert($pertanyaan);
        return $new_pertanyaan;
    }

    public static function getPertanyaanById($id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return $pertanyaan;
    }

    public static function deletePertanyaanById($id){
        $pertanyaan = DB::table('pertanyaan')->where('id', '=', $id)->delete();
        return $pertanyaan;
    }

    public static function updatePertanyaanById($data, $id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->update(array('judul'=>$data['judul'], 
            'isi'=>$data['isi']
        ));
        return $pertanyaan;
    }
}
