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



  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- PIE CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Jumlah Pengguna</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (LEFT) -->

          <div class="col-md-6">
            <!-- BAR CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Harga Tempat Wisata</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  <!-- /.content -->



  <script>

    // Bar Chart Example
    var lbl = [@foreach($ar_destinasi as $destinasi)'{{$destinasi->nama_destinasi}}',
    @endforeach];
    var hrt = [@foreach($ar_destinasi as $destinasi){{$destinasi->harga}},
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
          label: "Price List",
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
              max: 20000000,
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
      // var ctx = document.getElementById("myPieChart");
      // var myPieChart = new Chart(ctx, 
      var lbl2 = [@foreach ($ar_user as $role) '{{$role->role}}',
                  @endforeach];
      var jml = [@foreach($ar_user as $role) {{$role->jumlah}}, @endforeach];
                document.addEventListener("DOMContentLoaded", () => {
                    new Chart(document.querySelector('#pieChart'), {
        type: 'pie',
        data: {
          labels: lbl2,
          datasets: [{
            data: jml,
            backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
              }], },
          });
      });
  </script>



















@endsection
