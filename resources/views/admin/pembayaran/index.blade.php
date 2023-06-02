@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Pembayaran')
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
                    <h5 class="card-header">Tabel Detail Pembayaran</h5>
                </div>
                <div class="col-6">
                    <a href="" class="btn btn-dark float-right"><i class="fa fa-plus"></i></a>
                </div>
            </div>
        </div>
              <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Pesanan</th>
                    <th>Bukti Pembayaran</th>
                    <th>Status Pembayaran</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                   
                  @foreach ($data_pembayaran as $pembayaran)
                    <tr>
                      <td> {{ $loop->iteration }} </td>
                      <td> {{ $pembayaran->pesanan->kode_pesanan }} </td>
                      <td> {{ $pembayaran->bukti_bayar }} </td>
                      <td> {{ $pembayaran->status }} </td>
                         
                      <td>
                        <div class="btn btn-group">
                          <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"> Detail </i></a> &nbsp; &nbsp;
                          <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"> Edit </i></a> &nbsp; &nbsp;
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$pembayaran->id}}">
                                  <i class="fa fa-edit"> Hapus </i>
                                </button>
                                   
                                   <!-- Modal -->
                              <div class="modal fade" id="exampleModal{{$pembayaran->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body"> Apakah anda yakin akan menghapus data ? </div>
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

      
    </div>
  </div>


          


@endsection
