<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kecamatanmodel;
use Illuminate\Auth\Events\Validated;
use Symfony\Contracts\Service\Attribute\Required;

class kecamatancontroller extends Controller
{
    public function __construct()
    {
        $this->kecamatanmodel = new kecamatanmodel();
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'title' => 'kecamatan',
            'kecamatan' => $this->kecamatanmodel->alldata(),
        ];
        return view('admin.kecamatan.v_index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Add data kecamatan',
        ];
        return view('admin.kecamatan.v_add', $data);
    }

    public function insert()
    {
        Request()->validate(
            [
                'kecamatan' => 'required',
                'warna' => 'required',
                'geojson' => 'required',
            ],
            [
                'kecamatan.required' => 'wajib di isi !!!',
                'warna.required' => 'wajib di isi !!!',
                'geojson.required' => 'wajib di isi !!!',
            ]
        );

        //jika validasinya tidak ada maka lakukan simpan data ke data bese
        $data = [
            'kecamatan' => Request()->kecamatan,
            'warna' => Request()->warna,
            'geojson' => Request()->geojson,
        ];
        $this->kecamatanmodel->insertdata($data);
        return redirect()->route('kecamatan')->with('pesan','Data Berhasil di tambahkan');
    }

    public function edit($id_kecamatan)
    {
        $data = [
            'title' => 'Edit data kecamatan',
            'kecamatan' => $this->kecamatanmodel->detaildata($id_kecamatan),
        ];
        return view('admin.kecamatan.v_edit', $data);
    }

    public function update($id_kecamatan)
    {
        Request()->validate(
            [
                'kecamatan' => 'required',
                'warna' => 'required',
                'geojson' => 'required',
            ],
            [
                'kecamatan.required' => 'wajib di isi !!!',
                'warna.required' => 'wajib di isi !!!',
                'geojson.required' => 'wajib di isi !!!',
            ]
        );

        //jika validasinya tidak ada maka lakukan simpan data ke data bese
        $data = [
            'kecamatan' => Request()->kecamatan,
            'warna' => Request()->warna,
            'geojson' => Request()->geojson,
        ];
        $this->kecamatanmodel->updatedata($id_kecamatan ,$data);
        return redirect()->route('kecamatan')->with('pesan','Data Berhasil di Update.!!!');
    }

    public function delete($id_kecamatan)
    {
        $this->kecamatanmodel->deletedata($id_kecamatan);
        return redirect()->route('kecamatan')->with('pesan','Data Berhasil di Hapus.!!!');
    }
}