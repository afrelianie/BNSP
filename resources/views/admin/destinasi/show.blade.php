@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Paket Prewedding')
@section('content')


    <div class="row justify-content-center">
        <div class="col-md-11">


          <!-- About Me Box 1 -->
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">FOTO TEMPAT PREWEDDING</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>{{ $destinasi->nama_destinasi }}</strong><hr>
                            <center><img class="image" width="55%" height="55%" src="{{ asset($destinasi->foto_destinasi)}}" alt="image"></center>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
          </div>

            <!-- About Me Box 2 -->
          <div class="card card-info">

                <div class="card-header">
                    <h3 class="card-title">DETAIL PAKET</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">


                        <div class="col-md-12">
                            <div class="form-group">
                              
                                <strong><i class="fas fa-building mr-1"></i> Nama Tempat</strong>
                                <p class="text-muted">{{ $destinasi->nama_destinasi }}</p>
                                <hr>

                                <strong><i class="fas fa-dollar-sign mr-1"></i> Harga</strong>
                                <p class="text-muted">Rp. {{ $destinasi->harga }}</p>
                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                                <p class="text-muted">{{ $destinasi->alamat_destinasi }}</p>
                                <hr>

                                <strong><i class="fas fa-history mr-1"></i> Jasa atau Paket</strong>
                                <p class="text-muted">{{ $destinasi->sejarah }}</p>
                                <hr>

                                <strong><i class="fas fa-star mr-1"></i> Keunggulan</strong>
                                <p class="text-muted">{{ $destinasi->keunggulan }}</p>
                                <hr>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-12">
                    <div class="modal-footer">
                         <a href="{{ url('admin/destinasi') }}" class="btn btn-success">Kembali</a>
                    </div>
               </div>
            
          </div>
        </div>
    </div>


@endsection