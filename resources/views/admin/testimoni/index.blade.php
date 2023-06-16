@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Testimoni')
@section('content')





<div class="row justify-content-center">
    <div class="col-md-11">
      <div class="card">
          <div class="container">
              <div class="row card-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="col-12">
                      <h5 class="card-header">Tabel Testimoni</h5>
                  </div>
              </div>
          </div>
            
          <div class="card-body p-2">
            <div class="table-responsive">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th width="20px">No</th>
                        <th>Kode Pesanan</th>
                        <th>Foto Testimoni</th>
                        <th>Komentar</th>
                        <th width="100px">Action</th>
                    </tr>
                  </thead>
                  <tbody>                
                    @foreach ($data_testimoni as $testimoni)
                    <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $testimoni->pesanan->kode_pesanan }} </td>
                        <td> {{ $testimoni->foto_testi }} </td>
                        <td> {{ $testimoni->komentar }} </td> 
                        <td>
                            <div class="btn btn-group">
                                <a href="{{url('admin/testimoni/show/'.$testimoni->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"> </i></a> &nbsp;
                                <a href="{{ url('admin/testimoni', $testimoni->id) }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"> </i></a> &nbsp;
                                   
                                @include('template.delete', [
                                    'id'=> $testimoni->id, 
                                    'url' => url('admin/testimoni/destroy', $testimoni->id),
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
</div>

@endsection
