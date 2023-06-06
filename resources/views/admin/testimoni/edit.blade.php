@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Testimoni')
@section('content')




  

<div class="row justify-content-center">
    <div class="col-md-11">

    <div class="card">
        <div class="card-header">
            <div class="card-title"> 
                Edit Data
            </div> 
        </div>
        <div class="card-body">
            <form action="{{ url('admin/testimoni/update', $testimoni->id) }}" method="post" enctype="multipart/form-data">
                @csrf
               
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Kode Pesanan</label>
                            <input type="text" name="kode_pesanan" class="form-control" value="{{ $pesanan[0]->kode_pesanan }}">
                            @error('kode_pesanan')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Foto</label>
                            <input type="file" name="foto_testi" class="form-control" value="{{ $pesanan[0]->tanggal_pesanan }}" >
                            @error('foto_testi')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Komentar</label>
                            <textarea name="komentar" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{ $testimoni->komentar }}"></textarea>
                        </div>
                        @error('komentar')
                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                        @enderror
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