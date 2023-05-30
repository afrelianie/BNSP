@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','User')
@section('content')




@if(count($errors)>0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>
@endif






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
                                            @if (auth()->user()->profil)
                                                <img src="{{ asset(Auth::user()->profil)}}"
                                                    class="img-fluid profile-pic-container" style="width: 30%">
                                            @else
                                                <img src="{{ asset ('img/img.jpg') }}"
                                                    class="img-fluid profile-pic-container" style="width: 30%">
                                            @endif
                                          </div>
                                        <tr>
                                            <th>Nama</th>
                                            <td>:</td>
                                            <td>{{ Auth::user()->name  }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>:</td>
                                            <td>{{ Auth::user()->email  }}</td>
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
                                    <form action="{{ url('users/profil/update', Auth::user()->id) }}"
                                            class="form-horizontal" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Pemilik Usaha</label>
                                                    <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" value="{{ Auth::user()->name  }}" disabled>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Edit Foto</label>
                                                    <input type="file" name="profil" class="form-control" placeholder="" accept="image/jpeg,image/png">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">NIK</label>
                                                    <input type="number" name="nik" class="form-control" placeholder="NIK Pemilik Usaha" value="{{ Auth::user()->nib }}" disabled>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Email</label>
                                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ Auth::user()->email  }}">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label" >No Induk Berusaha (NIB)</label>
                                                    <input type="number" name="nib" class="form-control" placeholder="Nomor Induk Berusaha" value="{{ Auth::user()->nib }}" disabled>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Jenis</label>
                                                    <input type="text" name="jenis" class="form-control" placeholder="Jenis Perusahaan" value="{{ Auth::user()->jenis }}">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Nomor Hp</label>
                                                    <input type="number" name="no_hp" class="form-control" placeholder="Nomor Hp Pemilik Usaha" value="{{ Auth::user()->no_hp }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Password Baru</label>
                                                    <input type="password" name="password" class="form-control" placeholder="Password Lama">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Alamat Pemilik Usaha</label>
                                                <textarea name="alamat_pribadi" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Alamat Pemilik Usaha" >{{ Auth::user()->alamat_pribadi }}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button class="btn btn-primary float-right">Simpan</button>
                                                <a href="{{ url('users/dashboard') }}" class="btn btn-secondary float-right ">Kembali</a>
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