
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Tour and Trips</title>

    <!-- link css swiperjs -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />

    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- link css -->
    <link rel="stylesheet" href="{{ url('/') }}/assest/css/style.css">
    <link rel="stylesheet" href="{{ url('/') }}/assest/css/about.css">
    
 
</head>
<body>
    
    <!-- header section start -->
    @include('template.pelanggan.sidebar')
    <!-- firs contect section end -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-2">
                       @include('template.notif')
                    </div>
                </div>
            </div>  
    
     @yield('content')
    
    
    <!-- footer section start -->
    @include('template.pelanggan.footer')
    <!-- footer sectio end -->

    <!-- link js swiperjs -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- link js -->
    <script src="{{ url('/') }}/assest/js/script.js"></script>
</body>
</html>
