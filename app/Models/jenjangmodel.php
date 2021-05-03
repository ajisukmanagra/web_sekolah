<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class jenjangmodel extends Model
{
   public function alldata()
    {
        return DB::table('jenjang')
            ->get();
    }

    public function insertdata($data)
    {
        DB::table('jenjang')
            ->insert($data);
    }

    public function detaildata($id_jenjang)
    {
        return DB::table('jenjang')
            ->where('id_jenjang', $id_jenjang)->first();
    }

    public function updatedata($id_jenjang, $data)
    {
         DB::table('jenjang')
            ->where('id_jenjang', $id_jenjang)
            ->update($data);
    }

   public function deletedata($id_jenjang)
    {
         DB::table('jenjang')
            ->where('id_jenjang', $id_jenjang)
            ->delete();
    }
}