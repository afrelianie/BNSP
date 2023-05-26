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
                  <h3>21</h3>
                  <p>Tempat</p>
                </div>
                <div class="icon">
                  <i class="fas fa-map"></i>
                </div>
                <a href="#" class="small-box-footer">Detail info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>5</h3>
                  <p>Pesanan</p>
                </div>
                <div class="icon">
                  <i class="fas fa-cubes"></i>
                </div>
                <a href="#" class="small-box-footer">Detail info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>7</h3>
                  <p>Testimoni</p>
                </div>
                <div class="icon">
                  <i class="fab fa-fw fa-wpforms"></i>
                </div>
                <a href="#" class="small-box-footer">Detail info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>31</h3>
                  <p>Pengguna</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">Detail info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
        </div>
    </div>
</section>



@endsection
