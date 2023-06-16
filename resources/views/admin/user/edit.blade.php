@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Data Pesanan')
@section('content')


   

<div class="row justify-content-center">
    <div class="col-md-11">

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-11">
                            <div class="card">
                                <div class="card-header">
                                    <h3>PROFIL</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <div class="text-center">
                                        
                                            @if ($user->profil)
                                                <img src="{{ asset($user->profil)}} "
                                                    class="img-fluid profile-pic-container" style="width: 30%">
                                                    
                                            @else
                                                <img src="{{ asset('img/img.jpg') }}"
                                                    class="img-fluid profile-pic-container" style="width: 30%">
                                            @endif

                                          </div>
                                        <tr>
                                            <th>Nama</th>
                                            <td>:</td>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>:</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>

                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-11">
                        <div class="card card-secondary">
                            <div class="card-header">
                            <h3 class="card-title">EDIT PROFILE</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <form action="{{ url('admin/user/update', $user->id) }}"
                                            class="form-horizontal" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Nama</label>
                                                    <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" value="{{ $user->name  }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Email</label>
                                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email  }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Nomor Hp</label>
                                                    <input type="text" name="no_hp" class="form-control" placeholder="Nomor Hp" value="{{ $user->no_hp }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Password Baru</label>
                                                    <input type="password" name="password" class="form-control" placeholder="Password Baru">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea5">Alamat</label>
                                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea5" rows="2" >{{ $user->alamat }}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button class="btn btn-primary float-right">Simpan</button>
                                                <a href="{{ url('admin/user') }}" class="btn btn-secondary float-right ">Kembali</a>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>







@endsection
