<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourist - Travel Agency HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('/') }}/assest2/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assest2/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assest2/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('/') }}/assest2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ url('/') }}/assest2/css/style.css" rel="stylesheet">

    
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('/') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>JTT</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ url('destinasi') }}" class="nav-item nav-link">Destinasi</a>
                    <a href="{{ url('contact') }}" class="nav-item nav-link">Kontak</a>
                    <a href="{{ url('pelanggan/pesanan') }}" class="nav-item nav-link">Pesanan</a>
                </div>

                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                         @auth
                         <a href="{{ url('pelanggan/profile') }}" class="btn btn-primary rounded-pill py-2 px-4">Selamat Datang {{ Auth::user()->name }}</a> &nbsp;
                         <a href="{{ url('logout') }}" class="btn btn-primary rounded-pill py-2 px-4">Logout</a>
                         @else
                         
                         <a href="{{ route('login') }}" class="btn btn-primary rounded-pill py-2 px-4">Login</a>
                         @endauth
                    </div>
                @endif

            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">

                    <div class="container">
                         <div class="row">
                              <div class="col-md-12 mt-2">
                              @include('template.notif')
                              </div>
                         </div>
                    </div> 

                        <h1 class="display-3 text-white mb-3 animated slideInDown">Java Tourist and Trips</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Ayo Jelajahi Tempat Wisata di Provinsi Jawa Barat</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">


                         <form action="{{ url('art') }}" method="get" class="search-property-1">
                              @csrf
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" name="query" id="keyword" placeholder="Cari Tempat Wisata ... ">
                            <button type="submit" value="Search" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Cari</button>
                         </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->








                        @if (isset($data))
                        
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Tabel Data Destinasi</h6>
                    <h1 class="mb-5">Lihat Destinasi Anda...</h1>
                </div>
                <div class="card-header">
                            <div class="card-body p-2">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-light table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Destinasi</th>
                                                <th>Harga</th>
                                                <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($data) > 0)
                                                @foreach ( $data as $item )
                                                <tr>
                                                    <td>
                                                        <a style="color:black; font-size:16px; " href=" {{ url('/destinasi/detail', $item->id) }}"
                                                            class="text-decoration-none text-muteds">
                                                            {{ $item->nama_destinasi }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a style="color:black; font-size:16px; " href="{{ url('/destinasi/detail', $item->id) }}"
                                                            class="text-decoration-none text-muteds">
                                                            {{ $item->harga }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a style="color:black; font-size:16px; " href="{{ url('/destinasi/detail', $item->id) }}"
                                                            class="text-decoration-none text-muteds">
                                                            {{ $item->alamat_destinasi }}
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @else
                                            <tr><td>No Result Found!</td></tr>
                                            @endif
                                        </tbody>
                                    </table>
                                    <div class="pagination-block">
                                        {{ $data->links() }}
                                    </div>
                                        @endif
                                </div>
                            </div>
                        </div>
    </div>
</div>









    
    @yield('content')
    
        
    @include('template.user.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('/') }}/assest2/lib/wow/wow.min.js"></script>
        <script src="{{ url('/') }}/assest2/lib/easing/easing.min.js"></script>
        <script src="{{ url('/') }}/assest2/lib/waypoints/waypoints.min.js"></script>
        <script src="{{ url('/') }}/assest2/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="{{ url('/') }}/assest2/lib/tempusdominus/js/moment.min.js"></script>
        <script src="{{ url('/') }}/assest2/lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="{{ url('/') }}/assest2/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ url('/') }}/assest2/js/main.js"></script>


    
    <!-- DataTables  & Plugins -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>


    <!-- DataTables  & Plugins -->
        <script src="{{ url('/') }}/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ url('/') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{ url('/') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{ url('/') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="{{ url('/') }}/plugins/jszip/jszip.min.js"></script>
        <script src="{{ url('/') }}/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="{{ url('/') }}/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="{{ url('/') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="{{ url('/') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="{{ url('/') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->


    <script>
        $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        });
    </script>


    <script>
        $(document).ready(function () {

        $('.dataTable').DataTable();
        setTimeout(() => {
            $('.alert').css("display", "none");
        }, 5000);
        $('#summernote').summernote();
        });


    </script>
    
</body>

</html>
