<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'title' => 'Dasboard',
            'kecamatan' => DB::table('kecamatan')->count(),
            'jenjang' => DB::table('jenjang')->count(),
            'sekolah' => DB::table('sekolah')->count(),
            'guru' => DB::table('guru')->count(),
        ];
        return view('v_home', $data);
    }
}