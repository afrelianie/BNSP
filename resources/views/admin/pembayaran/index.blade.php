@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Pembayaran')
@section('content')





  <div class="row justify-content-center">
    <div class="col-md-11">

      <div class="card">
        <div class="container">
            <div class="row card-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="col-6">
                    <h5 class="card-header">Tabel Detail Pembayaran</h5>
                </div>
                
            </div>
        </div>

          <div class="card-body p-2">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="20px">No</th>
                    <th>Kode Pesanan</th>
                    <th>Bukti Pembayaran</th>
                    <th>Status Pembayaran</th>
                    <th width="90px">Action</th>
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
                          <a href="{{url('admin/pembayaran/show/'.$pembayaran->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a> &nbsp;
                          
                              @include('template.delete', [
                                    'id'=> $pembayaran->id, 
                                    'url' => url('admin/testimoni/destroy', $pembayaran->id),
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
