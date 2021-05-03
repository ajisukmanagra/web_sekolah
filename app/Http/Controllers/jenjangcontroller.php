<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenjangmodel;

class jenjangcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->jenjangmodel = new jenjangmodel();
    }

    public function index()
    {
        $data = [
            'title' => 'jenjang',
            'jenjang' => $this->jenjangmodel->alldata(),
        ];
        return view('admin.jenjang.v_index', $data);
    }

    public function add()
   {
        $data = [
            'title' => 'Add jenjang',
        ];
        return view('admin.jenjang.v_add', $data);
    }

    public function insert()
    {
        Request()->validate([
            'jenjang' => 'required',
            'icon' => 'required|max:1024',
        ], [
            'jenjang.required' => 'wajib di isi !!!',
            'icon.required' => 'wajib di isi !!!',
        ]);

        $file = Request()->icon;
        $filename = $file->getClientOriginalName();
        $file->move(public_path('icon'), $filename);

        $data = [
            'jenjang' => Request()->jenjang,
            'icon' => $filename,
        ];
        $this->jenjangmodel->insertdata($data);
        return redirect()->route('jenjang')->with('pesan','Data Berhasil di Simpan.!!!');
    }

    public function edit($id_jenjang)
   {
        $data = [
            'title' => 'Edit jenjang',
            'jenjang' => $this->jenjangmodel->detaildata($id_jenjang),
        ];
        return view('admin.jenjang.v_edit', $data);
    }

    public function update($id_jenjang)
    {
         Request()->validate([
            'jenjang' => 'required',
        ], [
            'jenjang.required' => 'wajib di isi !!!',
        ]);

        if (Request()->icon <> "") {
            //hapus icon lama
            $jenjang = $this->jenjangmodel->detaildata($id_jenjang);
            if ($jenjang->icon <> "") {
                unlink(public_path('icon').'/'. $jenjang->icon);
            }
            //jika ingin ganti  icon
            $file = Request()->icon;
            $filename = $file->getClientOriginalName();
            $file->move(public_path('icon'), $filename);
             $data = [
            'jenjang' => Request()->jenjang,
            'icon' => $filename,
            ];
            $this->jenjangmodel->updatedata($id_jenjang, $data);
        }else {
            //Jika tidak ingin ganti icon
            $data = [
            'jenjang' => Request()->jenjang,
            ];
            $this->jenjangmodel->updatedata($id_jenjang, $data);
        }
        return redirect()->route('jenjang')->with('pesan','Data Berhasil di Update.!!!');
    }

     public function delete($id_jenjang)
    {
        $jenjang = $this->jenjangmodel->detaildata($id_jenjang);
            if ($jenjang->icon <> "") {
            unlink(public_path('icon').'/'. $jenjang->icon);
        }
        $this->jenjangmodel->deletedata($id_jenjang);
        return redirect()->route('jenjang')->with('pesan','Data Berhasil di Hapus.!!!');
    }
}