<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class gurumodel extends Model
{
  public function alldata()
    {
        return DB::table('guru')
            ->get();
    }

     public function insertdata($data)
    {
        DB::table('guru')
            ->insert($data);
    }

    public function detaildata($id_guru)
    {
        return DB::table('guru')
            ->where('id_guru', $id_guru)->first();
    }

  public function updatedata($id_guru, $data)
    {
         DB::table('guru')
            ->where('id_guru', $id_guru)
            ->update($data);
    }

    public function deletedata($id_guru)
    {
         DB::table('guru')
            ->where('id_guru', $id_guru)
            ->delete();
    }
}