@extends('layouts.backend')

@section('content')
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">add data</h3>
            </div>
            <form action="/jenjang/insert" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>jenjang</label>
                                <input name="jenjang" class="form-control" placeholder="jenjang">
                                <div class="text-danger">
                                    @error('jenjang')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-group">
                                <label>icon</label>
                                    <input type="file" name="icon" class="form-control" accept="image/png">
                                 <div class="text-danger">
                                    @error('icon')
                                        {{ $message }}
                                    @enderror
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>Simpan</button>
             <a href="/kecamatan" class="btn btn-warning float-right"><i class="fa fa-arrow-left" aria-hidden="true"></i>cencel</a>
        </div>
        </form>
        </div>
        </div>
@endsection




