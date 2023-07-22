@extends('template.pelanggan.header')
@section('content')


<div class="row justify-content-center">

    <div class="col-md-11">
                

        <!-- booking section start -->

        <section class="booking" id="booking">

            <h1 class="heading">
                <span>d</span>
                <span>e</span>
                <span>t</span>
                <span>a</span>
                <span>i</span>
                <span>l</span>
                <span class="space"></span>
                <span>p</span>
                <span>e</span>
                <span>s</span>
                <span>a</span>
                <span>n</span>
                <span>a</span>
                <span>n</span>
            </h1>

                                        

            <div class="row">

                <div class="image">
                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-success">
                                                        <!-- <h5 class="modal-title" id="staticBackdropLabel">Upload Bukti Bayar</h5> -->
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('lunas') }}" method="post" enctype="multipart/form-data">
                                                        <div class="inputBox">
                                                            <h3>Upload bukti bayar</h3>
    
                                                        </div>
                                                            @csrf
                                                            <input type="hidden" name="delete" value="{{ $pesanan->id }}">
                                                            <input type="hidden" name="id" value="{{ $pesanan->id }}">
                                                            <input type="hidden" name="kode_pesanan" value="{{ $pesanan->kode_pesanan }}">
                                                            <input type="hidden" name="id_destinasi" value="{{ $pesanan->id_destinasi }}">
                                                            <input type="hidden" name="tanggal_pesanan" value="{{ $pesanan->tanggal_pesanan }}">
                                                            <input type="hidden" name="qty" value="{{ $pesanan->qty }}">
                                                            <input type="hidden" name="total_harga" value="{{ $pesanan->total_harga }}">
                                                            <input type="file" name="bukti_bayar" accept="application/pdf" required>
                                                            <input type="hidden" name="status" value="Lunas">
                                                            <button class="btn btn-success">Bayar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                </div>

                <!-- form booking -->
                <form action="">

                    <div class="inputBox">
                        <h3>Nama Pengguna</h3>
                        <h4 class="text-muted fas fa-user-alt mr-1">&nbsp; &nbsp;{{ $pesanan->user->name }}</h4>
                    </div>
                    <div class="inputBox">
                        <h3>Email</h3>
                        <h4 class="text-muted fas fa-envelope mr-1">&nbsp; &nbsp;{{ $pesanan->user->email }}</h4>
                    </div>
                    <div class="inputBox">
                        <h3>No Telephone</h3>
                        <h4 class="text-muted fas fa-phone mr-1">&nbsp; &nbsp;{{ $pesanan->user->no_hp }}</h4>
                    </div>
                    <div class="inputBox">
                        <h3>Status</h3>
                        <h4 class="text-muted fas fa-check-circle mr-1">&nbsp; &nbsp;{{ $pesanan->status }}</h4>
                    </div>
                    <div class="inputBox">
                        <h3>Nama Destinasi</h3>
                        <h4 class="text-muted fas fas fa-map-marker-alt mr-1 mr-1">&nbsp; &nbsp;{{ $pesanan->destinasi->nama_destinasi }}</h4>
                    </div>
                    <div class="inputBox">
                        <h3>Harga Satuan</h3>
                        <h4 class="text-muted fas fa-dollar-sign mr-1">&nbsp; &nbsp;{{ $pesanan->destinasi->harga }}</h4>
                    </div>
                    <div class="inputBox">
                        <h3>Jumlah Pesanan</h3>
                        <h4 class="text-muted fas fa-cube mr-1">&nbsp; &nbsp;{{ $pesanan->qty }}</h4>
                    </div>
                    <div class="inputBox">
                        <h3>Harga Total</h3>
                        <h4 class="text-muted fas fa-dollar-sign mr-1">&nbsp; &nbsp;{{ $pesanan->total_harga }}</h4>
                    </div>
                    <div class="inputBox">
                        <h3>Kode Pesanan</h3>
                        <h4 class="text-muted fas fa-qrcode mr-1">&nbsp; &nbsp;{{ $pesanan->kode_pesanan }}</h4>
                    </div>
                    <div class="inputBox">
                        <h3>Tanggal Booking</h3>
                        <h4 class="text-muted  fas fa-calendar-alt mr-1">&nbsp; &nbsp;{{ $pesanan->tanggal_pesanan }}</h4>
                    </div>
                    <!-- <div class="inputBox">
                        <h3>Rekening Tujuan</h3>
                        <h4 class="text-muted  fas fa-credit-card mr-1">&nbsp; &nbsp; BCA  &nbsp; &nbsp;  7677566  &nbsp; &nbsp;   PT.Berkah Jaya</h4>
                    </div> -->
                    
                    <div class="col-md-12">
                        <div class="modal-footer">
                    
                            <a href="{{ url('pelanggan/pesanan') }}" class="btn btn-info">Kembali</a> 

                            <a href="{{ url('pelanggan/pesanan/print', $pesanan->id) }}" class="btn btn-warning">Print</a> 

                            @if ($pesanan->status == 'Proses')
    
                                        <form action="{{ route('cancel') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="delete" value="{{ $pesanan->id }}">
                                            <input type="hidden" name="id" value="{{ $pesanan->id }}">
                                            <input type="hidden" name="kode_pesanan" value="{{ $pesanan->kode_pesanan }}">
                                            <input type="hidden" name="id_destinasi" value="{{ $pesanan->id_destinasi }}">
                                            <input type="hidden" name="tanggal_pesanan" value="{{ $pesanan->tanggal_pesanan }}">
                                            <input type="hidden" name="qty" value="{{ $pesanan->qty }}">
                                            <input type="hidden" name="total_harga" value="{{ $pesanan->total_harga }}">
                                            <input type="hidden" name="status" value="batal">
                                            <!-- <button class="btn btn-danger">Batal</button> -->
                                        <!-- <button><a class="btn btn-success">Batal</a></button> -->
                                        </form>
                            @else
                                @if ($pesanan->status == 'Lunas')
                                    <a href="{{ url('pelanggan/review/create', $pesanan->id) }}" class="btn btn-success">Review</a>
                                    
                                @else
                                    @if ($pesanan->status == 'status')
                                    <span class="badge bg-danger">{{ $pesanan->status }}</span>
                                    
                                    @else
                                    @endif
                                @endif
                            @endif
                        </div>
                    </div>
                    
                </form>
                <!-- form booking end -->
            </div>
        </section>   
    </div>
    
</div>
@endsection