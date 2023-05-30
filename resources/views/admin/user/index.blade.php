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
      <div class="card">
          <div class="container">
              <div class="row card-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="col-6">
                      <h5 class="card-header">Tabel Detail Pesanan</h5>
                  </div>
                  <div class="col-6">
                      <a href="{{ url('admin/user/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i></a>
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
                                <a href="{{ url('admin/user/show', encrypt($user->id)) }}"
                                    class="btn btn-success"><i class="fa fa-eye"></i></a>
                                <a href="{{ url('admin/user', encrypt($user->id)) }}/edit"
                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>
  
                                          <!-- Button trigger modal -->
                                   <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}">
                                   Hapus
                                   </button>
                                   
                                   <!-- Modal -->
                                   <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                   <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Apakah anda yakin akan menghapus data ?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a class="btn btn-danger" href="#">Hapus</a>
                                        </div>
                                   </div>
                                   </div>
                                   </div>
  
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
