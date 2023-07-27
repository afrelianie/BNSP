@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Testimoni')
@section('content')



<div class="row justify-content-center">
    <div class="col-md-11">

    <div class="card">
        <div class="card-header">
            <div class="card-title"> 
                Tambah Data Testimoni
            </div> 
        </div>
        <div class="card-body">
            <form action="{{ url('admin/testimoni/store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <input type="hidden" name="id_pesanan" value="{{$www}}">
            <!-- <input type="hidden" name="id_user" value="{{$www}}"> -->
           
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Komentar</label>
                            <textarea name="komentar" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        </div>
                        @error('komentar')
                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Foto Testimoni</label>
                            <input type="file" name="foto_testi" accept="image/jpeg,image/png" class="form-control" required>
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