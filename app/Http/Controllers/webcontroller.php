<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\webmodel;

class webcontroller extends Controller
{
    public function __construct()
    {
        $this->webmodel = new webmodel();
    }
    public function index()
    {
        $data = [

            'title' => 'pemetaan',
            'kecamatan' => $this->webmodel->datakecamatan(),
        ];
        return view('v_web', $data);
    }


}