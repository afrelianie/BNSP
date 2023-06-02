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
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3>{{$pembayaran}}</h3>
                  <h4>Pembayaran</h4>
                </div>
                <div class="icon">
                  <i class="fas fa-receipt"></i>
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
            <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Pie Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="pieChart" width="100%" height="50"></canvas></div>
                                   <!-- <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div> -->
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="barChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
</section>

<script>



// Bar Chart Example
var lbl = [@foreach($ar_destinasi as $destinasi)'{{$destinasi->nama_destinasi}}',
@endforeach];
var hrt = [@foreach($ar_destinasi as $destinasi){{$destinasi->id}},
@endforeach];
// var ctx = document.getElementById("myBarChart");
// var myLineChart = new Chart(ctx, {
    document.addEventListener("DOMContentLoaded",()=>{
        new Chart(document.querySelector('#barChart'),
    {
  type: 'bar',
  data: {
    labels: lbl,
    datasets: [{
      label: "Omzet Penjualan",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: hrt,
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 10,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
});
</script>

<script>
  // Pie Chart Example
var lbl2 = [@foreach ($ar_pembayaran as $pembayaran)'{{$pembayaran->total_pembayaran}}',
@endforeach];
var jml = [@foreach ($ar_pembayaran as $pembayaran){{$pembayaran->jumlah}},
@endforeach];
document.addEventListener("DOMContentLoaded",()=>{
    new Chart(document.querySelector('#pieChart'),{
  type: 'pie',
  data: {
    labels: lbl2,
    datasets: [{
      data: jml,
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
    }],
  },
});
});

</script>

@endsection
