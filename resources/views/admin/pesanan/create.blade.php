@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','User')
@section('content')



<div class="row justify-content-center">
    <div class="col-md-11">

    <div class="card">
        <div class="card-header">
            <div class="card-title"> 
                Tambah Data Pesanan
            </div> 
        </div>
        <div class="card-body">
            <form action="{{ url('admin/pesanan/store') }}" method="post" enctype="multipart/form-data">
                @csrf
               
        

                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
                              <label>Nama Pengguna</label>
                              <select name="id_user" class="form-control">
                                   <option value="" selected disabled>-- Pilih Nama Pengguna --</option>
                              @foreach ($user as $data)
                                   <option value="{{ $data->id }}">{{ $data->name }}</option>
                              @endforeach
                                   </select>
                              @error('id_user')
                                   <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                              @enderror
                         </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Pesanan</label>
                            <input type="text" name="qty" class="form-control" placeholder="Jumlah Pesanan">
                            @error('qty')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Boking</label>
                            <input type="date" name="tanggal_pesanan" class="form-control" placeholder="Tanggal Pesanan">
                            @error('tanggal_pesanan')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                              <label>Tempat Destinasi</label>
                              <select name="id_destinasi" class="form-control">
                                   <option value="" selected disabled>-- Pilih Tempat Destinasi --</option>
                              @foreach ($destinasi as $data)
                                   <option value="{{ $data->id }}">{{ $data->nama_destinasi }}</option>
                              @endforeach
                                   </select>
                              @error('id_destinasi')
                                   <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                              @enderror
                         </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="{{ url('admin/pesanan') }}" class="btn btn-secondary">Kembali</a>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    </div>
</div>
@endsection