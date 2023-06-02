@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','User')
@section('content')




  

<div class="row justify-content-center">
    <div class="col-md-11">

    <div class="card">
        <div class="card-header">
            <div class="card-title"> 
                Edit Data Pengguna
            </div> 
        </div>
        <div class="card-body">
            <form action="{{ url('admin/user/store') }}" method="post" enctype="multipart/form-data">
                @csrf
               
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama Pengguna">
                            @error('name')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email Pengguna">
                            @error('email')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nomor Hp</label>
                            <input type="text" name="no_hp" class="form-control" placeholder="Nomor Hp Anda">
                            @error('no_hp')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Buat Password">
                            @error('password')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat Pengguna</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat Pengguna"></textarea>
                        </div>
                        @error('alamat')
                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                        @enderror
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Level Pengguna</label>
                            <select name="role" class="form-control">
                                <option value="" selected disabled>-- Pilih Level Pengguna --</option>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                            @error('role')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="{{ url('admin/user') }}" class="btn btn-secondary">Kembali</a>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    </div>
</div>





@endsection








