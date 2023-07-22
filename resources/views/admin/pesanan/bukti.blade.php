@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Data Pesanan')
@section('content')




<div class="row justify-content-center">
    <div class="col-md-11">

        <!-- About Me Box 1 -->
        <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">BUKTI BAYAR</h3>
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
                            <strong>{{ $pesanan->destinasi->nama_destinasi }}</strong><hr>
                            <center>
                                <embed src="{{ asset($pesanan->bukti_bayar)}}" width="800" height="1100" type="application/pdf">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>

    <div>
</div>

    

@endsection