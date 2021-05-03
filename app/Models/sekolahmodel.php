<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class sekolahmodel extends Model
{
    public function alldata()
    {
        return DB::table('sekolah')
            ->join('jenjang', 'jenjang.id_jenjang', '=', 'sekolah.id_jenjang')
            ->join('kecamatan', 'kecamatan.id_kecamatan', '=', 'sekolah.id_kecamatan')
            ->get();
    }

   public function insertdata($data)
    {
        DB::table('sekolah')
            ->insert($data);
    }

     public function detaildata($id_sekolah)
    {
        return DB::table('sekolah')
            ->join('jenjang', 'jenjang.id_jenjang', '=', 'sekolah.id_jenjang')
            ->join('kecamatan', 'kecamatan.id_kecamatan', '=', 'sekolah.id_kecamatan')
            ->where('id_sekolah', $id_sekolah)->first();
    }

    public function updatedata($id_sekolah, $data)
    {
         DB::table('sekolah')
            ->where('id_sekolah', $id_sekolah)
            ->update($data);
    }

    public function deletedata($id_sekolah)
    {
         DB::table('sekolah')
            ->where('id_sekolah', $id_sekolah)
            ->delete();
    }
}