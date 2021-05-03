@extends('layouts.backend')

@section('content')
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit data</h3>
            </div>
            <form action="/guru/update/{{ $guru->id_guru }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama guru</label>
                                <input name="nama guru" value="{{ $guru->nama_guru }}" class="form-control" placeholder="nama_guru">
                                <div class="text-danger">
                                    @error('nama_guru')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>tgl lahir</label>
                                <input name="tgl_lahir" value="{{ $guru->tgl_lahir }}" class="form-control" placeholder="tgl_lahir">
                                <div class="text-danger">
                                    @error('tgl_lahir')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>mata pelajaran</label>
                                <input name="mapel" value="{{ $guru->mapel }}" class="form-control" placeholder="mapel">
                                <div class="text-danger">
                                    @error('mapel')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                       <div class="col-sm-6">
                            <div class="form-group">
                                <label>jabatan</label>
                                <input name="jabatan" value="{{ $guru->jabatan }}" class="form-control" placeholder="jabatan">
                                <div class="text-danger">
                                    @error('jabatan')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                       <div class="col-sm-12">
                            <div class="form-group">
                                <label>NO henphon</label>
                                <input name="no_hp" value="{{ $guru->no_hp }}" class="form-control" placeholder="no_hp">
                                <div class="text-danger">
                                    @error('no_hp')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                       <div class="col-sm-12">
                            <div class="form-group">
                                <label>keterangan</label>
                                <textarea name="keterangan" rows="7" class="form-control" placeholder="deskripsi">{{ $guru->keterangan }}</textarea>
                                 <div class="text-danger">
                                    @error('keterangan')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>Simpan</button>
            <a href="/jenjang" class="btn btn-warning float-right"><i class="fa fa-arrow-left" aria-hidden="true"></i>cencel</a>
        </div>
        </form>
        </div>
        </div>
@endsection




