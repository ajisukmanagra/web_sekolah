@extends('layouts.backend')

@section('content')
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">add data</h3>
            </div>
            <form action="/guru/insert" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Guru</label>
                                <input name="nama_guru" class="form-control" placeholder="Nama Guru">
                                <div class="text-danger">
                                    @error('nama_guru')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tgl lahir</label>
                                <input name="tgl_lahir" class="form-control" placeholder="tgl lahir">
                                <div class="text-danger">
                                    @error('tgl_lahir')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Mata PelaJaran</label>
                                <input name="mapel" class="form-control" placeholder="mata pelajaran">
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
                                <input name="jabatan" class="form-control" placeholder="jabatan">
                                <div class="text-danger">
                                    @error('jabatan')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                       <div class="col-sm-12">
                            <div class="form-group">
                                <label>No HP</label>
                                <input name="no_hp" class="form-control" placeholder="No HENPHON">
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
                                <textarea name="keterangan" rows="7" class="form-control" placeholder="keterangan"></textarea>
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
             <a href="/guru" class="btn btn-warning float-right"><i class="fa fa-arrow-left" aria-hidden="true"></i>cencel</a>
        </div>
        </form>
        </div>
        </div>
@endsection




