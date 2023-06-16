@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','User')
@section('content')



        
  <div class="row justify-content-center">
    <div class="col-md-11">
      <div class="card">

          <div class="container">
              <div class="row card-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="col-6">
                      <h5 class="card-header">Tabel Detail Pesanan</h5>
                  </div>
                  <div class="col-6">
                      <a href="{{ url('admin/user/create')}}" class="btn btn-dark float-right">Tambah Data &nbsp;<i class="fa fa-plus"></i></a>
                  </div>
              </div>
          </div>

          <div class="card-body p-2">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th width="20px">No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>Role</th>
                      <th width="50px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    @foreach ($list_user as $user)
                    <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $user->name }} </td>
                        <td> {{ $user->email }} </td>
                        <td> {{ $user->alamat }} </td>
                        <td> {{ $user->role }} </td>
                        <td>
                            <div class="btn btn-group">
                                <a href="{{ url('admin/user', $user->id) }}/edit"
                                    class="btn btn-warning"><i class="fa fa-edit"></i></a> &nbsp; 
                                 
                                    @include('template.delete', [
                                      'id'=> $user->id, 
                                    'url' => url('admin/user/destroy', $user->id),
                                ])
                            </div>
                        </td>
                    </tr>
                    @endforeach


                  </tbody>
                </table>
            </div>
          </div>

      </div>
    </div>
  </div>   
    

@endsection
