@extends('template.admin.header')
@section('judul','Web Wisata | Sistem Informasi Tempat Wisata')
@section('sub_judul','Home')
@section('content')


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{$destinasi}}</h3>
                  <h4>Tempat</h4>
                </div>
                <div class="icon">
                  <i class="fas fa-map"></i>
                </div>
                <a href="{{url('admin/destinasi')}}" class="small-box-footer">Detail info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{$pesanan}}</h3>
                  <h4>Pesanan</h4>
                </div>
                <div class="icon">
                  <i class="fas fa-cubes"></i>
                </div>
                <a href="{{url('admin/pesanan')}}" class="small-box-footer">Detail info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{$testimoni}}</h3>
                  <h4>Testimoni</h4>
                </div>
                <div class="icon">
                  <i class="fab fa-fw fa-wpforms"></i>
                </div>
                <a href="{{url('admin/testimoni')}}" class="small-box-footer">Detail info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{$user}}</h3>
                  <h4>Pengguna</h4>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <a href="{{url('admin/user')}}" class="small-box-footer">Detail info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
        </div>
    </div>
</section>










@endsection
