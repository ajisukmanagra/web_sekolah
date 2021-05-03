<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gurumodel;

class gurucontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->gurumodel = new gurumodel();
    }

    public function index()
    {
        $data = [
            'title' => 'guru',
            'guru' => $this->gurumodel->alldata(),
        ];
        return view('admin.guru.v_index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Add data guru',
        ];
        return view('admin.guru.v_add', $data);
    }

    public function insert()
    {
        Request()->validate(
            [
                'nama_guru' => 'required',
                'tgl_lahir' => 'required',
                'mapel' => 'required',
                'jabatan' => 'required',
                'no_hp' => 'required',
                'keterangan' => 'required',
            ],
            [
                'nama_guru.required' => 'wajib di isi !!!',
                'tgl_lahir.required' => 'wajib di isi !!!',
                'mapel.required' => 'wajib di isi !!!',
                'jabatan.required' => 'wajib di isi !!!',
                'no_hp.required' => 'wajib di isi !!!',
                'keterangan.required' => 'wajib di isi !!!',
            ]
        );

        //jika validasinya tidak ada maka lakukan simpan data ke data bese
        $data = [
            'nama_guru' => Request()->nama_guru,
            'tgl_lahir' => Request()->tgl_lahir,
            'mapel' => Request()->mapel,
            'jabatan' => Request()->jabatan,
            'no_hp' => Request()->no_hp,
            'keterangan' => Request()->keterangan,
        ];
        $this->gurumodel->insertdata($data);
        return redirect()->route('guru')->with('pesan','Data Berhasil di tambahkan');
    }

    public function edit($id_guru)
    {
        $data = [
            'title' => 'Edit data guru',
            'guru' => $this->gurumodel->detaildata($id_guru),
        ];
        return view('admin.guru.v_edit', $data);
    }

    public function update($id_guru)
       {
        Request()->validate(
            [
                'nama_guru' => 'required',
                'tgl_lahir' => 'required',
                'mapel' => 'required',
                'jabatan' => 'required',
                'no_hp' => 'required',
                'keterangan' => 'required',
            ],
            [
                'nama_guru.required' => 'wajib di isi !!!',
                'tgl_lahir.required' => 'wajib di isi !!!',
                'mapel.required' => 'wajib di isi !!!',
                'jabatan.required' => 'wajib di isi !!!',
                'no_hp.required' => 'wajib di isi !!!',
                'keterangan.required' => 'wajib di isi !!!',
            ]
        );

        //jika validasinya tidak ada maka lakukan simpan data ke data bese
        $data = [
            'nama_guru' => Request()->nama_guru,
            'tgl_lahir' => Request()->tgl_lahir,
            'mapel' => Request()->mapel,
            'jabatan' => Request()->jabatan,
            'no_hp' => Request()->no_hp,
            'keterangan' => Request()->keterangan,
        ];

        $this->gurumodel->updatedata($id_guru,$data);
        return redirect()->route('guru')->with('pesan','Data Berhasil di tambahkan');
    }


    public function delete($id_guru)
    {
        $this->gurumodel->deletedata($id_guru);
        return redirect()->route('guru')->with('pesan','Data Berhasil di Hapus.!!!');
    }
}