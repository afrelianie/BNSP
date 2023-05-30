@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Detail Pesanan')
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
                    <a href="" class="btn btn-dark float-right"><i class="fa fa-plus"></i></a>
                </div>
            </div>
        </div>
        
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pesanan</th>
                        <th>ID Destinasi</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   
                   @foreach ($list_data as $data)
                   <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $data->pesanan->kode_pesanan }} </td>
                        <td> {{ $data->destinasi->nama_destinasi }} </td>
                        <td> {{ $data->harga }} </td>
                        <td> {{ $data->gambar }} </td>
                        <td>
                           <div class="btn btn-group">
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"> Detail </i></a> 
                                <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"> Edit </i></a>
                                        
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$data->id}}">
                                  <i class="fa fa-edit"> Hapus </i>
                                </button>
                                  
                            <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


    </div>
</div>











@endsection
