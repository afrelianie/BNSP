@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Testimoni')
@section('content')



<div class="row justify-content-center">
    <div class="col-md-11">

    <div class="card">
        <div class="card-header">
            <div class="card-title"> 
                 Data Testimoni
            </div> 
        </div>
        <div class="card-body">
            <form action="{{ url('admin/testimoni/store') }}" method="post" enctype="multipart/form-data">
                @csrf
               
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Komentar</label>
                            <textarea name="komentar" class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
                        </div>
                        @error('komentar')
                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Foto Testimoni</label>
                            <input type="file" name="foto_testi" class="form-control" >
                            @error('foto_testi')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                
                

                <div class="modal-footer">
                    <a href="{{ url('admin/testimoni') }}" class="btn btn-secondary">Kembali</a>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    </div>
</div>
@endsection