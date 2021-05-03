<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sekolahmodel;
use App\Models\jenjangmodel;
use App\Models\kecamatanmodel;

class sekolahcontroller extends Controller
{
   public function __construct()
    {
        $this->sekolahmodel = new sekolahmodel();
        $this->jenjangmodel = new jenjangmodel();
        $this->kecamatanmodel = new kecamatanmodel();
        $this->middleware('auth');
    }

   public function index()
    {
        $data = [
            'title' => 'Sekolah',
            'sekolah' => $this->sekolahmodel->alldata(),
        ];
        return view('admin.sekolah.v_index', $data);
    }

   public function add()
    {
        $data = [
            'title' => 'Add data sekolah',
            'jenjang' => $this->jenjangmodel->alldata(),
            'kecamatan' => $this->kecamatanmodel->alldata(),
        ];
        return view('admin.sekolah.v_add', $data);
    }

     public function insert()
    {
        Request()->validate(
            [
                'nama_sekolah' => 'required',
                'id_jenjang' => 'required',
                'status' => 'required',
                'id_kecamatan' => 'required',
                'alamat' => 'required',
                'laporan' => 'required|max:2045',
                'foto' => 'required|max:1024',
                'deskripsi' => 'required',
            ],
            [
                'nama_sekolah.required' => 'wajib di isi !!!',
                'id_jenjang.required' => 'wajib di isi !!!',
                'status.required' => 'wajib di isi !!!',
                'id_kecamatan.required' => 'wajib di isi !!!',
                'alamat.required' => 'wajib di isi !!!',
                'laporan.max' => 'PDF max 2045 MB',
                'foto.max' => 'foto max 1024 kb',
                'deskripsi.required' => 'wajib di isi !!!',
            ]
        );
        //jika validasinya tidak ada maka lakukan simpan data ke data bese
        $file = Request()->laporan;
        $filename = $file->getClientOriginalName();
        $file->move(public_path('laporan'), $filename);
        //foto
        $file = Request()->foto;
        $filename = $file->getClientOriginalName();
        $file->move(public_path('foto'), $filename);
        $data = [
            'nama_sekolah' => Request()->nama_sekolah,
            'id_jenjang' => Request()->id_jenjang,
            'status' => Request()->status,
            'id_kecamatan' => Request()->id_kecamatan,
            'alamat' => Request()->alamat,
            'laporan' => $filename,
            'deskripsi' => Request()->deskripsi,
            'foto' => $filename,
        ];
        $this->sekolahmodel->insertdata($data);
        return redirect()->route('sekolah')->with('pesan','Data Berhasil di tambahkan');
    }

      public function edit($id_sekolah)
    {
        $data = [
            'title' => 'Edit data sekolah',
            'jenjang' => $this->jenjangmodel->alldata(),
            'kecamatan' => $this->kecamatanmodel->alldata(),
            'sekolah' => $this->sekolahmodel->detaildata($id_sekolah),
        ];
        return view('admin.sekolah.v_edit', $data);
    }

    public function update($id_sekolah)
    {
           Request()->validate(
            [
                'nama_sekolah' => 'required',
                'id_jenjang' => 'required',
                'status' => 'required',
                'id_kecamatan' => 'required',
                'alamat' => 'required',
                'laporan' => 'required|max:2045',
                'foto' => 'required|max:1024',
                'deskripsi' => 'required',
            ],
            [
                'nama_sekolah.required' => 'wajib di isi !!!',
                'id_jenjang.required' => 'wajib di isi !!!',
                'status.required' => 'wajib di isi !!!',
                'id_kecamatan.required' => 'wajib di isi !!!',
                'alamat.required' => 'wajib di isi !!!',
                'laporan.max' => 'PDF max 2045 MB',
                'foto.max' => 'foto max 1024 kb',
                'deskripsi.required' => 'wajib di isi !!!',
            ]
        );

        if (Request()->foto <> "") {
            //hapus icon lama
            $sekolah = $this->sekolahmodel->detaildata($id_sekolah);
            if ($sekolah->foto <> "") {
                unlink(public_path('foto').'/'. $sekolah->foto);
            }
            //jika ingin ganti  icon
            $file = Request()->foto;
            $filename = $file->getClientOriginalName();
            $file->move(public_path('foto'), $filename);

             $data = [
            'nama_sekolah' => Request()->nama_sekolah,
            'id_jenjang' => Request()->id_jenjang,
            'status' => Request()->status,
            'id_kecamatan' => Request()->id_kecamatan,
            'alamat' => Request()->alamat,
            'laporan' => $filename,
            'deskripsi' => Request()->deskripsi,
            'foto' => $filename,
        ];

        $this->sekolahmodel->updatedata($id_sekolah, $data);
        }else {
            //Jika tidak ingin ganti icon
        $data = [
            'nama_sekolah' => Request()->nama_sekolah,
            'id_jenjang' => Request()->id_jenjang,
            'status' => Request()->status,
            'id_kecamatan' => Request()->id_kecamatan,
            'alamat' => Request()->alamat,
            'deskripsi' => Request()->deskripsi,
        ];
        $this->sekolahmodel->updatedata($id_sekolah, $data);

        }
        return redirect()->route('sekolah')->with('pesan','Data Berhasil di Update.!!!');

    }

    public function delete($id_sekolah)
    {
           $sekolah = $this->sekolahmodel->detaildata($id_sekolah);
            if ($sekolah->foto <> "") {
                unlink(public_path('foto').'/'. $sekolah->foto);
            }
        $this->sekolahmodel->deletedata($id_sekolah);
        return redirect()->route('sekolah')->with('pesan','Data Berhasil di Hapus.!!!');
    }

}