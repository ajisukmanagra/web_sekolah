@extends('layouts.backend')
@section('content')

    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit data</h3>
            </div>
            <form action="/sekolah/update/{{ $sekolah->id_sekolah }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Sekolah</label>
                                <input name="nama_sekolah" value="{{ $sekolah->nama_sekolah }}" class="form-control" placeholder="Nama sekolah">
                                <div class="text-danger">
                                    @error('nama_sekolah')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                       <div class="col-sm-6">
                            <div class="form-group">
                                <label>jenjang</label>
                               <select name="id_jenjang" class="form-control">
                                   <option value="{{ $sekolah->id_jenjang }}">{{ $sekolah->jenjang }}</option>
                                        @foreach ($jenjang as $data)
                                            <option value="{{ $data->id_jenjang }}">{{ $data->jenjang }}</option>
                                        @endforeach
                               </select>
                                <div class="text-danger">
                                    @error('id_jenjang')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                      <div class="col-sm-6">
                            <div class="form-group">
                                <label>Status</label>
                               <select name="status" class="form-control">
                                   <option value="{{ $sekolah->status }}">{{ $sekolah->status }}</option>
                                      <option value="negeri">Negeri</option>
                                      <option value="swasta">Swasta</option>
                               </select>
                                <div class="text-danger">
                                    @error('status')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Kecamatan</label>
                               <select name="id_kecamatan" class="form-control">
                                   <option value="{{ $sekolah->id_kecamatan }}">{{ $sekolah->kecamatan }}</option>
                                    @foreach ($kecamatan as $data)
                                            <option value="{{ $data->id_kecamatan }}">{{ $data->kecamatan }}</option>
                                    @endforeach
                               </select>
                                <div class="text-danger">
                                    @error('kecamatan')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                     <div class="col-sm-12">
                            <div class="form-group">
                                <label>Alamat Sekolah</label>
                                <input name="alamat" value="{{ $sekolah->alamat }}" class="form-control" placeholder="Alamat sekolah">
                                <div class="text-danger">
                                    @error('alamat')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                  <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-group">
                                <label>Laporan</label>
                                    <input type="file" name="laporan" class="form-control" accept="application/pdf">
                                 <div class="text-danger">
                                    @error('laporan')
                                        {{ $message }}
                                    @enderror
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-group">
                                <label>foto Sekolah</label>
                                    <input type="file" name="foto" class="form-control" accept="image/png">
                                 <div class="text-danger">
                                    @error('foto')
                                        {{ $message }}
                                    @enderror
                                </div>
                                </div>
                            </div>
                        </div>
                       <div class="col-sm-12">
                            <div class="form-group">
                                <label>deskripsi</label>
                                <textarea name="deskripsi" rows="7" class="form-control" placeholder="deskripsi">{{ $sekolah->deskripsi }}</textarea>
                                 <div class="text-danger">
                                    @error('deskripsi')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>Simpan</button>
            <a href="/sekolah" type="submit" class="btn btn-warning float-right"><i class="fa fa-arrow-left" aria-hidden="true"></i>cencel</a>
        </div>
        </form>
        </div>
        </div>

@endsection
