<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel{
    public static function get_all(){
        $jawaban = DB::table('jawaban')->get();
        return $jawaban;
    }

    public static function save($jawaban){
        $new_jawaban = DB::table('jawaban')->insert($jawaban);
        return $new_jawaban;
    }

    public static function getJawabanById($id){
        $jawaban = DB::table('jawaban')->where('id', $id)->first();
        return $jawaban;
    }

    public static function getJawabanByPertanyaanId($pertanyaan_id){
        $jawaban = DB::table('jawaban')->where('pertanyaan_id', $pertanyaan_id)->get();
        return $jawaban;
    }

    public static function deleteJawabanByPertanyaanId($id){
        $jawaban = DB::table('jawaban')->where('pertanyaan_id','=',$id)->delete();
        return $jawaban;
    }

    public static function deleteJawabanById($id){
        $jawaban =  DB::table('jawaban')->where('id','=',$id)->delete();
        return $jawaban;
    }

    public static function updateJawabanById($data, $id){
        DB::table('jawaban')->where('id', $id)->update(array('isi'=>$data['isi']));
    }
}
