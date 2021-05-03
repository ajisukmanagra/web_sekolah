<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class webmodel extends Model
{
   public function datakecamatan()
    {
        return DB::table('kecamatan')
            ->get();
    }
}