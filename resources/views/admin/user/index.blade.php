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

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th width="100px">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                   
                    @foreach ($list_user as $user)
                    <tr>
                         <td> {{ $loop->iteration }} </td>
                         <td> {{ $user->name }} </td>
                         <td> {{ $user->email }} </td>
                         <td> {{ $user->alamat }} </td>
                        <td>
                            <div class="btn btn-group">
                                <a href="{{ url('admin/user', $user->id) }}/edit"
                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                 
                                    @include('template.delete', [
                                    'url' => url('admin/user/destroy', $user->id),
                                ])
  
                  
                            </div>
                        </td>
                    </tr>
                    @endforeach


                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
      </div>
    </div>
  </div>   
    

@endsection
