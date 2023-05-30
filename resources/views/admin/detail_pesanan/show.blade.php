@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Detail Pesanan')
@section('content')




    <div class="row justify-content-center">
        <div class="col-md-11">
           
            <!-- About Me Box 2 -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">DETAIL USAHA</h3>
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
                                    <strong><i class="fas fa-user-alt mr-1"></i> Nama Pengguna</strong>
                                    <p class="text-muted">{{ $data->name }}</p>
                                    <hr>

                                    <strong><i class="fas fa-solid fa-envelope"></i> Email</strong>
                                    <p class="text-muted">{{ $data->email }}</p>
                                    <hr>

                                    <strong><i class="fas fa-solid fa-phone"></i> Contact</strong>
                                    <p class="text-muted">{{ $data->no_hp }}</p>
                                    <hr>

                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">    
                                    <strong><i class="fas fa-users"></i> Kode Pesanan</strong>
                                    <p class="text-muted">{{ $data->kode_pesanan }}</p>
                                    <hr>

                                    <strong><i class="fas fa-map mr-1"></i> Nama Tempat</strong>
                                    <p class="text-muted">{{ $data->nama_destinasi }}</p>
                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                                    <p class="text-muted">{{ $data->alamat }}</p>
                                    <hr>
                                </div>
                            </div> 
                        </div>

                    <!-- <div class="card-footer">
                        @if ($umkm->status == 'Proses')
                            <div class="row col-6">
                                <div class="col-2">
                                    <form action="{{ route('terima') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="delete" value="{{ $umkm->id_umkm }}">
                                        <input type="hidden" name="id_umkm" value="{{ $umkm->id_umkm }}">
                                        <input type="hidden" name="umkm" value="{{ $umkm->umkm }}">
                                        <input type="hidden" name="id_category" value="{{ $umkm->id_category }}">
                                        <input type="hidden" name="id_kecamatan" value="{{ $umkm->id_kecamatan }}">
                                        <input type="hidden" name="id_pemilik" value="{{ $umkm->id_pemilik }}">
                                        <input type="hidden" name="kbli" value="{{ $umkm->kbli }}">
                                        <input type="hidden" name="sektor" value="{{ $umkm->sektor }}">
                                        <input type="hidden" name="alamat" value="{{ $umkm->alamat }}">
                                        <input type="hidden" name="lokasi" value="{{ $umkm->lokasi }}">
                                        <input type="hidden" name="tki" value="{{ $umkm->tki }}">
                                        <input type="hidden" name="tahun" value="{{ $umkm->tahun }}">
                                        <input type="hidden" name="photo" value="{{ $umkm->photo }}">
                                        <input type="hidden" name="foto" value="{{ $umkm->foto }}">
                                        <input type="hidden" name="deskripsi" value="{{ $umkm->deskripsi }}">
                                        <input type="hidden" name="status" value="Terima">
                                        <button class="btn-success btn-sm">Terima</button>
                                    </form>
                                </div>
                                <div class="col-3">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">Tolak
                                        </button>
                                    </div>

                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Keterangan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('tolak') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="delete" value="{{ $umkm->id_umkm }}">
                                                        <input type="hidden" name="id_umkm" value="{{ $umkm->id_umkm }}">
                                                        <input type="hidden" name="umkm" value="{{ $umkm->umkm }}">
                                                        <input type="hidden" name="id_category" value="{{ $umkm->id_category }}">
                                                        <input type="hidden" name="id_kecamatan" value="{{ $umkm->id_kecamatan }}">
                                                        <input type="hidden" name="id_pemilik" value="{{ $umkm->id_pemilik }}">
                                                        <input type="hidden" name="kbli" value="{{ $umkm->kbli }}">
                                                        <input type="hidden" name="sektor" value="{{ $umkm->sektor }}">
                                                        <input type="hidden" name="alamat" value="{{ $umkm->alamat }}">
                                                        <input type="hidden" name="lokasi" value="{{ $umkm->lokasi }}">
                                                        <input type="hidden" name="tki" value="{{ $umkm->tki }}">
                                                        <input type="hidden" name="tahun" value="{{ $umkm->tahun }}">
                                                        <input type="hidden" name="photo" value="{{ $umkm->photo }}">
                                                        <input type="hidden" name="foto" value="{{ $umkm->foto }}">
                                                        <input type="hidden" name="deskripsi" value="{{ $umkm->deskripsi }}">
                                                        <input type="hidden" name="status" value="Tolak">
                                                        <textarea name="keterangan"rows="2" class="form-control"></textarea>
                                                        <button class="btn-danger btn-sm mt-2 mb-2">Tolak</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            @if ($umkm->status == 'Terima')
                                <span class="badge bg-info">{{ $umkm->status }}</span>
                                <a href="{{ route('print', $umkm->id_umkm) }}"><button
                                        class="btn btn-sm btn-info">Print</button></a>
                            @else
                                @if ($umkm->status == 'Tolak')
                                <span class="badge bg-info">{{ $umkm->status }}</span>
                                <p>{{$umkm->keterangan}}</p>
                                @else
                                @endif
                            @endif
                        @endif
                    </div> -->

                </div>
            </div>

        </div>
    </div>







@endsection
