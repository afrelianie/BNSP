@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Data Testimoni')
@section('content')


    <div class="row justify-content-center">
        <div class="col-md-11">
        
        
            <!-- About Me Box 1 -->
            <div class="card card-secondary">
                <div class="card-header">
                <h3 class="card-title">FOTO REVIEW</h3>
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
                                <strong>Tempat Destinasi</strong><hr>
                                <center><img class="image" width="55%" height="55%" src="{{ asset($testimoni->foto_testi)}}" alt="image"></center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>


            <!-- About Me Box 2 -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">DETAIL TESTIMONI</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong><i class="fas fa-user-alt mr-1"></i> Nama Pengguna</strong>
                                <p class="text-muted">{{ $testimoni->user->name }}</p>
                                <hr>

                                <strong><i class="fas fa-check-circle mr-1"></i> Status</strong>
                                <p class="text-muted">{{ $testimoni->pesanan->status }}</p>
                                <hr>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong><i class="fas fas fa-map-marker-alt mr-1"></i> Nama Destinasi</strong>
                                <p class="text-muted">{{ $testimoni->destinasi->nama_destinasi }}</p>
                                <hr>

                                <strong><i class="fas fa-home mr-1"></i> Komentar</strong>
                                <p class="text-muted">{{ $testimoni->komentar }}</p>
                                <hr>
                            </div>
                        </div>

                      
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="modal-footer">
                         <a href="{{ url('admin/testimoni') }}" class="btn btn-success">Kembali</a>
                    </div>
               </div>
            
            </div>
        </div>
    </div>







@endsection