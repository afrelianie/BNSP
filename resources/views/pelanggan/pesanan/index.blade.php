@extends('template.user.header')
@section('content')



<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Tabel Pesanan</h6>
            <h1 class="mb-5">Lihat Pesanan Anda...</h1>
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
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_data as $pesanan)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td>
                                <a href="{{ url('pelanggan/pesanan/show', $pesanan->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>&nbsp;
                            </td>
                            <td> {{ $pesanan->destinasi->nama_destinasi }} </td>
                            <td> {{ $pesanan->kode_pesanan }} </td>
                            <td> {{ $pesanan->tanggal_pesanan }} </td>
                            <td> Rp. {{ $pesanan->destinasi->harga }} </td>
                            <td> {{ $pesanan->status }} </td>
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