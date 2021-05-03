<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class kecamatanmodel extends Model
{
    public function alldata()
    {
        return DB::table('kecamatan')
            ->get();
    }

    public function insertdata($data)
    {
        DB::table('kecamatan')
            ->insert($data);
    }

    public function detaildata($id_kecamatan)
    {
        return DB::table('kecamatan')
            ->where('id_kecamatan', $id_kecamatan)->first();
    }

    public function updatedata($id_kecamatan, $data)
    {
         DB::table('kecamatan')
            ->where('id_kecamatan', $id_kecamatan)
            ->update($data);
    }

    public function deletedata($id_kecamatan)
    {
         DB::table('kecamatan')
            ->where('id_kecamatan', $id_kecamatan)
            ->delete();
    }
}