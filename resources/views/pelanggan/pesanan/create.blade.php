@extends('template.pelanggan.header')
@section('content')





    <!-- booking section start -->
    <section class="booking" id="booking">

        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
            <span class="space"></span>

        </h1>

        <div class="row">

            <div class="image">
                <img src="{{ url('/') }}/assest/img/img8.jpg" alt="">
            </div>

            <form action="{{ url('pelanggan/pesanan/store') }}" method="post" enctype="multipart/form-data">
                @csrf
               
                <input type="hidden" name="id_destinasi" value="{{$www}}">
                <div class="inputBox">
                    <h3>Tanggal Boking</h3>
                    <input type="date" name="tanggal_pesanan" placeholder="Tanggal Pesanan">
                         @error('tanggal_pesanan')
                              <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                         @enderror
                </div>
                <div class="inputBox">
                    <h3>Jumlah Pesanan</h3>
                    <input type="number" name="qty" placeholder="Jumlah Pesanan">
                         @error('qty')
                              <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                         @enderror
                </div>

                <input type="submit" class="btn" value="booking now">
            </form>

        </div>
    </section>
    <!-- booking sectio end -->





@endsection