@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Data Pesanan')
@section('content')





    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          

            
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Wisata Jawa Barat.
                    <small class="float-right">Tanggal: {{ $currentTime->format('d-m-Y') }}</small> <br>
                    <small class="float-right">Waktu: {{ $currentTime->format('H:i:s') }}</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  Admin 1
                  <address>
                    <strong>Afrelianie.</strong><br>
                    Jl. Kalimantan<br>
                    Indonesia No. 77<br>
                    Phone: (804) 123-5432<br>
                    Email: info@alamsemesta.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  Admin 2
                  <address>
                    <strong>John Roy.</strong><br>
                    Jl. Penjajahan<br>
                    Jawa Barat No. 91<br>
                    Phone: (555) 539-1037<br>
                    Email: john@email.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    Rekening Admin 
                <address>
                  <b>No. Rekening:</b> 07612 0000 000<br>
                  <b>To:</b> Wisata Jawa Barat<br>
                  <b>Tanggal:</b> {{ $currentTime->format('d-m-Y') }}<br>
                  <b>Metode Pembayaran:</b> Transfer Bank
                </address>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

             <div class="callout callout-info">
                <h5><i class="fas fa-info"></i> Catatan:</h5>
                <strong>Metode Pembayaran bisa dilakukan secara langsung dengan transfer pembayaran ke rekening admin yang sudah disediakan 
                Atau melakukan pembayaran dengan cara Generate PDF dan lakukan pembayaran di Alfamart atau Indomaret terdekat yang mendukung proses pembayaran dan langkah terakhit, silakan upload bukti bayar.</strong> 
             </div>


          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>




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
                                <p class="text-muted">{{ $pesanan->user->name }}</p>
                                <hr>

                                <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
                                <p class="text-muted">{{ $pesanan->user->email }}</p>
                                <hr>

                                <strong><i class="fas fa-phone mr-1"></i> Contact</strong>
                                <p class="text-muted">{{ $pesanan->user->no_hp }}</p>
                                <hr>

                                <strong><i class="fas fa-check-circle mr-1"></i> Status</strong>
                                <p class="text-muted">{{ $pesanan->status }}</p>
                                <hr>

                                <strong><i class="fas fa-cubes"></i> Jumlah Pesanan</strong>
                                <p class="text-muted">{{ $pesanan->qty }}</p>
                                <hr>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <strong><i class="fas fas fa-map-marker-alt mr-1 mr-1"></i> Nama Destinasi</strong>
                                <p class="text-muted">{{ $pesanan->destinasi->nama_destinasi }}</p>
                                <hr>

                                <strong><i class="fas fa-dollar-sign mr-1"></i> Harga Satuan</strong>
                                <p class="text-muted">{{ $pesanan->destinasi->harga }}</p>
                                <hr>

                                <strong><i class="fas fa-qrcode mr-1"></i> Kode Pesanan</strong>
                                <p class="text-muted">{{ $pesanan->kode_pesanan }}</p>
                                <hr>

                                <strong><i class="fas fa-calendar-alt mr-1"></i> Tanggal Boking</strong>
                                <p class="text-muted">{{ $pesanan->tanggal_pesanan }}</p>
                                <hr>

                                <strong><i class="fab fa-fw fa-wpforms"></i> Total Harga</strong>
                                <p class="text-muted">{{ $pesanan->total_harga }}</p>
                                <hr>
                            </div>
                        </div>

                    </div>
                </div>


                
                <div class="col-md-12">
                    <div class="modal-footer">
                         <a href="{{ url('admin/pesanan') }}" class="btn btn-primary float-right">Kembali</a>
                         <a href="{{ url('admin/pesanan/print', $pesanan->id) }}">
                         <button type="button" class="btn btn-warning float-right" style="margin-right: 5px;">
                            <i class="fas fa-download"></i> Generate PDF
                         </button></a>

                        
                         <!-- <div class="card-footer"> -->
                        @if ($pesanan->status == 'Proses')
                            <!-- <div class="row col-6">
                                <div class="col-2"> -->
                                    <form action="{{ route('batal') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="delete" value="{{ $pesanan->id }}">
                                        <input type="hidden" name="id" value="{{ $pesanan->id }}">
                                        <input type="hidden" name="id_destinasi" value="{{ $pesanan->id_destinasi }}">
                                        <input type="hidden" name="id_user" value="{{ $pesanan->id_user }}">
                                        <input type="hidden" name="kode_pesanan" value="{{ $pesanan->kode_pesanan }}">
                                        <input type="hidden" name="tanggal_pesanan" value="{{ $pesanan->tanggal_pesanan }}">
                                        <input type="hidden" name="qty" value="{{ $pesanan->qty }}">
                                        <input type="hidden" name="total_harga" value="{{ $pesanan->total_harga }}">
                                        <input type="hidden" name="status" value="batal">
                                        <button class="btn btn-danger">Batal</button>
                                    </form>
                                <!-- </div> -->
                                <!-- <div class="col-3">
                                    <div class="col-6"> -->
                                        <!-- Modal -->
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop1"><i class="far fa-credit-card"></i> Bayar 
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
                                                    <form action="{{ route('bayar') }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="delete" value="{{ $pesanan->id }}">
                                                        <input type="hidden" name="id" value="{{ $pesanan->id }}">
                                                        <input type="hidden" name="id_destinasi" value="{{ $pesanan->id_destinasi }}">
                                                        <input type="hidden" name="id_user" value="{{ $pesanan->id_user }}">
                                                        <input type="hidden" name="kode_pesanan" value="{{ $pesanan->kode_pesanan }}">
                                                        <input type="hidden" name="tanggal_pesanan" value="{{ $pesanan->tanggal_pesanan }}">
                                                        <input type="hidden" name="qty" value="{{ $pesanan->qty }}">
                                                        <input type="hidden" name="total_harga" value="{{ $pesanan->total_harga }}">
                                                        <input type="hidden" name="status" value="Lunas">
                                                        <input type="file" name="bukti_bayar" accept="application/pdf" required>
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
                                <!-- <a href="{{ url('admin/testimoni/create', $pesanan->id) }}"><button
                                        class="btn btn-success">Review</button></a> -->
                                <a href="{{ url('admin/pesanan/bukti_bayar', $pesanan->id) }}"><button
                                        class="btn btn-success">Lihat Bukti Bayar</button></a>

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