@extends('template.user.header')
@section('content')



    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimoni</h6>
                <h1 class="mb-5">Sampaikan Pendapat Anda...</h1>
            </div>
            <div class="row g-12 ">
                <div class="col-lg-7 col-md-12 wow fadeInUp  mx-auto" data-wow-delay="0.5s">
                    <form action="{{ url('pelanggan/review/store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <input type="hidden" name="id_pesanan" value="{{$www}}">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="komentar" placeholder="Komentar" class="form-control">
                                    <label for="komentar">Komentar</label>
                                    @error('komentar')
                                        <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating date"id="date3" data-target-input="nearest">
                                    <input class="form-control" id="name" accept="image/jpeg,image/png" type="file" name="foto_testi" >
                                    <label for="file">Upload Foto</label>
                                    @error('foto_testi')
                                        <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->





@endsection