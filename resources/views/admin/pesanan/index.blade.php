@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Data Pesanan')
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
                      <h5 class="card-header">Tabel Data Pesanan</h5>
                  </div>
                  <div class="col-6">
                      <a href="{{ url('admin/pesanan/create')}}" class="btn btn-dark float-right">Tambah Data &nbsp;<i class="fa fa-plus"></i></a>
                  </div>
              </div>
          </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Destinasi</th>
                    <th>Kode Pesanan</th>
                    <th>Tanggal</th>
                    <th>Harga</th>
                    <th width="100px">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                   
                    @foreach ($list_data as $pesanan)
                    <tr>
                         <td> {{ $loop->iteration }} </td>
                         <td> {{ $pesanan->destinasi[0]->nama_destinasi }} </td>
                         <td> {{ $pesanan->kode_pesanan }} </td>
                         <td> {{ $pesanan->tanggal_pesanan }} </td>
                         <td> {{ $pesanan->destinasi[0]->harga }} </td>
                        <td>
                            <div class="btn btn-group">
                                <a href="{{ url('admin/pesanan/show', $pesanan->id) }}"
                                    class="btn btn-success"><i class="fa fa-eye"></i></a>
                                <a href="{{ url('admin/pesanan', $pesanan->id) }}/edit"
                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                 
                                  @include('template.delete', [
                                    'url' => url('admin/pesanan/destroy', $pesanan->id),
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