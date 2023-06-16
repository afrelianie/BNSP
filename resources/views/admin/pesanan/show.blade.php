@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Data Pesanan')
@section('content')


    <div class="row justify-content-center">
        <div class="col-md-11">
            
            <!-- About Me Box 2 -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">DETAIL PESANAN</h3>
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
                                <p class="text-muted">{{ Auth::user()->name }}</p>
                                <hr>

                                <strong><i class="fas fa-user-alt mr-1"></i> Email</strong>
                                <p class="text-muted">{{ Auth::user()->email }}</p>
                                <hr>

                                <strong><i class="fas fa-user-alt mr-1"></i> Contact</strong>
                                <p class="text-muted">{{ Auth::user()->no_hp }}</p>
                                <hr>

                                <strong><i class="fas fa-user-alt mr-1"></i> Status</strong>
                                <p class="text-muted">{{ $pesanan->status }}</p>
                                <hr>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <strong><i class="fas fa-user-alt mr-1"></i> Nama Destinasi</strong>
                                <p class="text-muted">{{ $pesanan->destinasi[0]->nama_destinasi }}</p>
                                <hr>

                                <strong><i class="fas fa-user-alt mr-1"></i> Harga</strong>
                                <p class="text-muted">{{ $pesanan->destinasi[0]->harga }}</p>
                                <hr>

                                <strong><i class="fas fa-user-alt mr-1"></i> Kode Pesanan</strong>
                                <p class="text-muted">{{ $pesanan->kode_pesanan }}</p>
                                <hr>

                                <strong><i class="fas fa-user-alt mr-1"></i> Tanggal Boking</strong>
                                <p class="text-muted">{{ $pesanan->tanggal_pesanan }}</p>
                                <hr>
                            </div>
                        </div>
                       
                    </div>
                </div>



                
                
                <div class="col-md-12">
                    <div class="modal-footer">
                         <a href="{{ url('admin/pesanan') }}" class="btn btn-info">Kembali</a>
                         <a href="{{ url('admin/pesanan/print', $pesanan->id) }}"><button class="btn btn-warning">Print</button></a>


                        
                         <!-- <div class="card-footer"> -->
                        @if ($pesanan->status == 'Proses')
                            <!-- <div class="row col-6">
                                <div class="col-2"> -->
                                    <form action="{{ route('batal') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="delete" value="{{ $pesanan->id }}">
                                        <input type="hidden" name="id" value="{{ $pesanan->id }}">
                                        <input type="hidden" name="kode_pesanan" value="{{ $pesanan->kode_pesanan }}">
                                        <input type="hidden" name="id_destinasi" value="{{ $pesanan->id_destinasi }}">
                                        <input type="hidden" name="tanggal_pesanan" value="{{ $pesanan->tanggal_pesanan }}">
                                        <input type="hidden" name="status" value="batal">
                                        <button class="btn btn-danger">Batal</button>
                                    </form>
                                <!-- </div> -->
                                <!-- <div class="col-3">
                                    <div class="col-6"> -->
                                        <!-- Modal -->
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop1">Bayar 
                                        </button>
                                    <!-- </div> -->

                                    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-success">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Upload Bukti Bayar</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('bayar') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="delete" value="{{ $pesanan->id }}">
                                                        <input type="hidden" name="id" value="{{ $pesanan->id }}">
                                                        <input type="hidden" name="kode_pesanan" value="{{ $pesanan->kode_pesanan }}">
                                                        <input type="hidden" name="id_destinasi" value="{{ $pesanan->id_destinasi }}">
                                                        <input type="hidden" name="tanggal_pesanan" value="{{ $pesanan->tanggal_pesanan }}">
                                                        <input type="file" name="bukti_bayar" accept="" required>
                                                        <input type="hidden" name="status" value="Lunas">
                                                        <button class="btn btn-success">Bayar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- </div>
                            </div> -->
                        @else
                            @if ($pesanan->status == 'Lunas')
                                <a href="{{ url('admin/testimoni/create') }}"><button
                                        class="btn btn-success">Review</button></a>
                                
                            @else
                                @if ($pesanan->status == 'batal')
                                <span class="badge bg-danger">{{ $pesanan->status }}</span>
                                
                                @else
                                @endif
                            @endif
                        @endif
                       
                    </div>
               </div>
            
          </div>
        </div>
    </div>







@endsection