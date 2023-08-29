@extends('template.user.header')
@section('content')



<style>

    /* CSS untuk gambar produk .product-image */
    .product-image {
    max-width: 95%;
    height: auto;
    }

    /* CSS untuk thumbnail gambar produk .product-image-thumb */
    .product-image-thumb {
    width: 35%;
    height: 35%;
    margin-right: 10px;
    overflow: hidden;
    border: 1px solid #ddd;
    cursor: pointer;
    }

    /* CSS untuk thumbnail gambar produk aktif .product-image-thumb.active */
    .product-image-thumb.active {
    border-color: #007bff;
    }


    /* CSS untuk thumbnail gambar produk .product-image-thumbs */
    .product-image-thumbs {
    display: flex;
    flex-direction: row;
    align-items: center; /* Memusatkan vertikal */
    overflow-x: auto; /* Memungkinkan scrolling horizontal jika gambar lebih lebar dari container */
    padding: 10px 0; /* Menambahkan sedikit ruang di atas dan bawah */
    }

</style>




<!-- DETAIL PESANAN TAHAP PEMBAYARAN -->
<!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Tahapan</h6>
                <h2 class="mb-5">3 Proses Pemesanan dan Bayar</h2>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">1. Pemesanan Destinasi</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Nikmati pengalaman perjalanan yang tak terlupakan dengan menggunakan Layanan Booking Destinasi yang telah disediakan, untuk mempermudah pemesanan tempat wisata yang anda inginkan. Lakukan pemesanan destinasi dengan cara pilih tanggal bokingan yang anda inginkan dan kuota tiket yang anda butuhkan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">2. Pembayaran</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Pembayaran bisa dilakukan secara langsung dengan transfer pembayaran ke rekening perusahan yang sudah disediakan atau lakukan pembayaran di Alfamart dan Indomaret terdekat yang mendukung proses pembayaran dan langkah terakhir, silakan upload bukti bayar anda, untuk di verifikasi oleh admin.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">3. Testimoni Pelanggan</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Jelajahi Dunia bersama Kami! Ceritakan Pengalaman Penuh Petualangan Anda dan Berikan Pandangan Istimewa tentang Tempat Wisata yang Telah Anda Kunjungi. Setiap Kisah dan Pendapat Anda akan Kami Jadikan Masukan Berharga untuk Menghadirkan Pengalaman Wisata yang Lebih Luar Biasa di Masa Depan!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Process Start -->



    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Detail Pesanan</h6>
                <h1 class="mb-5">Silakan Lakukan Pembayaran</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <img src="{{ asset($pesanan->destinasi->foto_destinasi)}}" class="product-image" alt="Product Image">
                    <div class="col-12 product-image-thumbs" data-wow-delay="0.1s">
                        <div class="product-image-thumb active"><img class="img-fluid" src="{{ asset($pesanan->destinasi->foto_destinasi)}}" alt="Product Image"></div>
                        <div class="product-image-thumb"><img class="img-fluid" src="{{ url('/') }}/dist/img/1.jpeg" alt="Product Image"></div>
                        <div class="product-image-thumb"><img class="img-fluid" src="{{ url('/') }}/dist/img/2.jpeg" alt="Product Image"></div>
                        <div class="product-image-thumb"><img class="img-fluid" src="{{ url('/') }}/dist/img/3.jpeg" alt="Product Image"></div>
                        <div class="product-image-thumb"><img class="img-fluid" src="{{ url('/') }}/dist/img/pantai.jpeg" alt="Product Image"></div>
                    </div> 
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h5>Nama Destinasi : {{ $pesanan->destinasi->nama_destinasi }}</h5>
                    <h6 class="mb-4">No. Rekening Admin: 07612 0000 000 <br> Metode Pembayaran: Transfer Bank</h6>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-user-alt mr-1 text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Nama Pemesan</h5>
                            <p class="mb-0">{{ $pesanan->user->name }}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">No Phone</h5>
                            <p class="mb-0">{{ $pesanan->user->no_hp }}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">{{ $pesanan->user->email }}</p>
                        </div>
                    </div> &nbsp;
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-regular fa-wallet text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Harga Satuan</h5>
                            <p class="mb-0">Rp. {{ $pesanan->destinasi->harga }},00</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    &nbsp;
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-calendar text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Tanggal Pesanan</h5>
                            <p class="mb-0">{{ $pesanan->tanggal_pesanan }}</p>
                        </div>
                    </div>  &nbsp;
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-cube text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Jumlah Pesanan</h5>
                            <p class="mb-0">{{ $pesanan->qty }} Tiket</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-regular fa-wallet text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Total Harga</h5>
                            <p class="mb-0">Rp. {{ $pesanan->total_harga }},00</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-qrcode text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Kode Pesanan</h5>
                            <p class="mb-0">{{ $pesanan->kode_pesanan }}</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-check-circle text-white"></i>
                        </div> 
                        <div class="ms-3">
                        &nbsp;
                            <h5 class="text-primary">Status Pesanan</h5>
                            <p class="mb-0">{{ $pesanan->status }}</p>
                                @if ($pesanan->status == 'Bayar')
                                <h6>Mohon Tunggu Verifikasi Admin</h6>    
                                @else @endif
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    

    <div class="row justify-content-center">
        <div class="col-md-11">
                     
            <div class="col-md-12">
                <div class="modal-footer">
                
                    <a href="{{ url('pelanggan/pesanan') }}" class="btn btn-info">Kembali</a> 
                    <a href="{{ url('pelanggan/pesanan/print', $pesanan->id) }}" class="btn btn-warning">Print</a> 

                    @if ($pesanan->status == 'Proses')
                        <form action="{{ route('cancel') }}" method="post" 
                            onclick="return confirm('Yakin ingin membatalkan Pesanan ini ?!');">
                            @csrf
                            <input type="hidden" name="delete" value="{{ $pesanan->id }}">
                            <input type="hidden" name="id" value="{{ $pesanan->id }}">
                            <input type="hidden" name="kode_pesanan" value="{{ $pesanan->kode_pesanan }}">
                            <input type="hidden" name="id_destinasi" value="{{ $pesanan->id_destinasi }}">
                            <input type="hidden" name="tanggal_pesanan" value="{{ $pesanan->tanggal_pesanan }}">
                            <input type="hidden" name="qty" value="{{ $pesanan->qty }}">
                            <input type="hidden" name="total_harga" value="{{ $pesanan->total_harga }}">
                            <input type="hidden" name="status" value="Batal">
                            <button class="btn btn-danger">Batal</button>      
                        </form>
                     
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Bayar Pesanan
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('lunas') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Upload bukti bayar</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                    
                                        <div class="inputBox">
                                            <h6>Harga yang harus dibayar : {{ $pesanan->total_harga }}</h6>
                                            <h6>Kode Pesanan : {{ $pesanan->kode_pesanan }}</h6>
                                            <h6>Tanggal Boking : {{ $pesanan->tanggal_pesanan }}</h6>
                                        </div>
                                    
                                            <input type="hidden" name="delete" value="{{ $pesanan->id }}">
                                            <input type="hidden" name="id" value="{{ $pesanan->id }}">
                                            <input type="hidden" name="kode_pesanan" value="{{ $pesanan->kode_pesanan }}">
                                            <input type="hidden" name="id_destinasi" value="{{ $pesanan->id_destinasi }}">
                                            <input type="hidden" name="tanggal_pesanan" value="{{ $pesanan->tanggal_pesanan }}">
                                            <input type="hidden" name="qty" value="{{ $pesanan->qty }}">
                                            <input type="hidden" name="total_harga" value="{{ $pesanan->total_harga }}">
                                            <input type="file" name="bukti_bayar" accept="application/pdf" required>
                                            <input type="hidden" name="status" value="Bayar">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                            <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
                                        </div>
                                    </form>
                                
                                </div>
                            </div>
                        </div>
                    @else


                    @if ($pesanan->status == 'Bayar')
                        <a href="{{ asset($pesanan->bukti_bayar)}}" target="_blank"><button
                            class="btn btn-success">Lihat Bukti Bayar</button></a>
                    @else


                    @if ($pesanan->status == 'Selesai')
                        <a href="{{ url('pelanggan/review/create', $pesanan->id) }}" class="btn btn-success">Review</a>    
                        <a href="{{ asset($pesanan->bukti_bayar)}}" target="_blank"><button
                                class="btn btn-primary">Lihat Bukti Bayar</button></a>       
                    @else


                    @if ($pesanan->status == 'Batal')
                        <span class="badge bg-danger">{{ $pesanan->status }}</span>     
                    @else


                    @if ($pesanan->status == 'Data Tidak Sesuai')
                        <a href="{{ asset($pesanan->bukti_bayar)}}" target="_blank"><button
                            class="btn btn-success">Lihat Bukti Bayar</button></a>
                        <span class="badge bg-danger">{{ $pesanan->status }}</span>           
                    @else


                                    @endif
                                @endif
                            @endif
                        @endif
                    @endif






    
                </div>
            </div>
        </div>
    </div>












<!-- jQuery -->
<script src="{{ url('/') }}/plugins/jquery/jquery.min.js"></script>

<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>

@endsection