@extends('template.user.header')
@section('content')




<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Tabel Testimoni</h6>
            <h1 class="mb-5">Lihat Pendapat Anda...</h1>
        </div>
        <div class="card-header">
        <div class="card-body p-2">
            <div class="table-responsive">
                <table id="example1" class="table table-light table-striped">
                    <thead>
                        <tr>
                            <th width="20px">No</th>
                            <th width="50px"><center>Action</center></th>
                            <th>Nama Destinasi</th>
                            <th>Kode Pesanan</th>
                            <th>Tanggal Boking</th>
                            <th>Harga</th>
                            <th>Komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimoni as $testi)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td>
                                <a href="{{ url('pelanggan/review/show', $testi->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>&nbsp;
                            </td>
                            <td> {{ $testi->destinasi->nama_destinasi }} </td>
                            <td> {{ $testi->pesanan->kode_pesanan }} </td>
                            <td> {{ $testi->pesanan->tanggal_pesanan }} </td>
                            <td> Rp. {{ $testi->destinasi->harga }} </td>
                            <td> {{ $testi->komentar }} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>
        </div>
        </div>

    </div>
</div>

    







    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Galeri</h6>
                <h1 class="mb-5">Galeri Perjalanan</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                    @foreach ($testimoni as $testi)
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset($testi->foto_testi) }}" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">{{ $testi->destinasi->nama_destinasi }}</div>
                            </a>
                        </div>
                    @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Destination Start -->




@endsection