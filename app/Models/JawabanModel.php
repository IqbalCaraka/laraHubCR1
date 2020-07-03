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

    public static function getJawabanByPertanyaanId($pertanyaan_id){
        $jawaban = DB::table('jawaban')->where('pertanyaan_id', $pertanyaan_id)->get();
        return $jawaban;
    }
}
