
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Tour and Trips</title>

    <!-- link css swiperjs -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Font Awesome cdn link -->
    <script src="https://kit.fontawesome.com/676eaf438a.js" crossorigin="anonymous"></script>

    <!-- swipper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <!-- link css -->
    <link rel="stylesheet" href="{{ url('/') }}/assest/css/style.css">
    <link rel="stylesheet" href="{{ url('/') }}/assest/css/about.css">
    <link rel="stylesheet" href="{{ url('/') }}/assest/css/destination.css">
    <link rel="stylesheet" href="{{ url('/') }}/assest/css/homeDestination.css">
    <link rel="stylesheet" href="{{ url('/') }}/assest/css/contact.css">
    

 
</head>
<body>
    
    <!-- header section start -->
    @include('template.pelanggan.sidebar')
    <!-- firs contect section end -->
    
  
     @yield('content')
    
    
    <!-- footer section start -->
    @include('template.pelanggan.footer')
    <!-- footer sectio end -->

    <!-- link js swiperjs -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- link js -->
    <!-- <script src="{{ url('/') }}/assest/js/script.js"></script>
    <script type="module">
  import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'

  const swiper = new Swiper(...) -->
  <script>
  var swiper = new Swiper('.review-slider', {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
</script>
</body>
</html>
