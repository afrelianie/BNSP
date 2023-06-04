@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Destinasi')
@section('content')
  

<div class="row justify-content-center">
    <div class="col-md-11">

    <div class="card">
        <div class="card-header">
            <div class="card-title"> 
                Edit Data Wisata
            </div> 
        </div>
        <div class="card-body">
            <form action="{{ url('admin/destinasi/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Destinasi</label>
                            <input type="text" name="nama_destinasi" class="form-control" placeholder="Nama Destinasi">
                            @error('nama_destinasi')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Foto</label>
                            <input type="file" name="foto_destinasi" class="form-control" placeholder="Foto Destinasi">
                            @error('foto_destinasi')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Harga</label>
                            <input type="number" name="harga" class="form-control" placeholder="Harga Destinasi">
                            @error('harga')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat Destinasi</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat Pengguna"></textarea>
                        </div>
                        @error('alamat')
                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                  
                  <div class="modal-footer">
                      <a href="{{ url('admin/destinasi') }}" class="btn btn-secondary">Kembali</a> &nbsp; &nbsp;
                      <button class="btn btn-primary">Simpan</button>
                  </div>
                </div>
            </form>
        </div>
    </div>

    </div>
</div>
@endsection










