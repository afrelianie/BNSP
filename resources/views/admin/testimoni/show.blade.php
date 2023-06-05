@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Data Testimoni')
@section('content')


    <div class="row justify-content-center">
        <div class="col-md-11">
            
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <strong><i class="fas fa-user-alt mr-1"></i> Kode Pesanan</strong>
                                <p class="text-muted">{{ $testimoni->pesanan->kode_pesanan }}</p>
                                <hr>

                                <strong><i class="fas fa-user-alt mr-1"></i> Foto Testimoni</strong>
                                <p class="text-muted">{{ $testimoni->foto_testi }}</p>
                                <hr>

                                <strong><i class="fas fa-user-alt mr-1"></i> Komentar</strong>
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