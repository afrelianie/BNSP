@extends('template.pelanggan.header')
@section('content')


 <!-- booking section start -->
 <section class="booking" id="booking">

<h1 class="heading">
    <span>t</span>
    <span>e</span>
    <span>s</span>
    <span>t</span>
    <span>i</span>
    <span>m</span>
    <span>o</span>
    <span>n</span>
    <span>i</span>
    <span class="space"></span>

</h1>

<div class="row">

    <div class="image">
        <img src="{{ url('/') }}/assest/img/review.jpg" alt="">
    </div>

    <form action="{{ url('pelanggan/review/store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id_pesanan" value="{{$www}}"> 
        <div class="inputBox">
            <h3>Komentar</h3>
            <input type="text" name="komentar" placeholder="Komentar">
        </div>
        <div class="inputBox">
            <h3>Upload foto</h3>
            <input type="file" name="foto_testi" placeholder="">

        <input type="submit" class="btn" value="kirim">
    </form>

</div>
</section>
<!-- booking sectio end -->


@endsection