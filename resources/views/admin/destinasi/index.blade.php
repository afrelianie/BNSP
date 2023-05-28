@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Destinasi')
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

          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Table Destinasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Destinasi</th>
                    <th>Foto</th>
                    <th>Sejarah</th>
                    <th>Keunggulan</th>
                    <th>Alamat</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                   
                    @foreach ($data_destinasi as $destinasi)
                    <tr>
                         <td> {{ $loop->iteration }} </td>
                         <td> {{ $destinasi->nama_destinasi }} </td>
                         <td> {{ $destinasi->foto_destinasi }} </td>
                         <td> {{ $destinasi->sejarah }} </td>
                         <td> {{ $destinasi->keunggulan }} </td>
                         <td> {{ $destinasi->alamat_destinasi }} </td>
                        <td>
                            <div class="btn btn-group">
                                   <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"> Detail </i></a> 
                                   <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"> Edit </i></a>
                                          <!-- Button trigger modal -->
                                   <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$destinasi->id}}">
                                   <i class="fa fa-edit"> Hapus </i>
                                   </button>
                                   
                                   <!-- Modal -->
                                   <div class="modal fade" id="exampleModal{{$destinasi->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                   <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus</h1>
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
          </div>
     

@endsection
