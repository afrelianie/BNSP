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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Data Excel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('admin/destinasi/importexcel')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            {{csrf_field()}}
            <input type="file" name="file" >

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>





<!-- end modal -->



<div class="row justify-content-center">
    <div class="col-md-11">

        <div class="card">
          <div class="container">
              <div class="row card-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="col-6">
                      <h5 class="card-header">Tabel Destinasi Wisata</h5>
                  </div>
                  <div class="col-6">
                      <a href="{{url('admin/destinasi/create')}}" class="btn btn-dark float-right">Tambah Data &nbsp;<i class="fa fa-plus"></i></a>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Import To Excel</button>
                  </div>
              </div>
          </div>

          <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Destinasi</th>
                    <th>Alamat</th>
                    <th>Harga</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                   
                    @foreach ($data_destinasi as $destinasi)
                    <tr>
                         <td> {{ $loop->iteration }} </td>
                         <td> {{ $destinasi->nama_destinasi }} </td>
                         <td> {{ $destinasi->alamat_destinasi }} </td>
                         <td> {{ $destinasi->harga}}</td>
                        <td>
                            <div class="btn btn-group">

                                   <a href="{{ url('admin/destinasi/show', $destinasi->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"> Detail </i></a> &nbsp; &nbsp;
                                   <a href="{{ url('admin/destinasi', $destinasi->id) }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"> Edit </i></a>&nbsp; &nbsp;
                                          <!-- Button trigger modal -->
                                    @include('template.delete', [
                                    'url' => url('admin/destinasi/destroy', $destinasi->id),
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

@endsection