<!DOCTYPE html>
<html>

     <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Anggita | Ecommerce Website</title>
     <link rel="stylesheet" type="text/css" href="css/style.css">

     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


          <style type="text/css">    
               *{
               margin: 0;
               padding: 0;
               box-sizing: border-box;
               }
               .navbar{
               display: flex;
               align-items: center;
               padding: 20px;
               }
               nav{
               flex: 1;
               text-align: right;
               }
               nav ul{
               display: inline-block;
               list-style: none;
               }
               nav ul li{
               display: inline-block;
               margin-right: 20px;
               }
               a{
               text-decoration: none;
               color: #555;
               }
               p{
               color: #555;
               }
               .container{
               max-width: 1300px;
               margin: auto;
               padding-left: 25px;
               padding-right: 25px;
               }
               .row{
               display: flex;
               align-items: center;
               flex-wrap: wrap;
               justify-content: space-around;
               }
               .col-2{
               flex-basis: 50%;
               min-width: 300px;
               }
               .col-2 img{
               max-width: 100%;
               padding: 50px 0;
               }
               .col-2 h1{
               font-size: 50px;
               line-height: 60px;
               margin: 25px 0;
               }
               .btn{
               display: inline-block;
               background: #ff523b;
               color: #fff;
               padding: 8px 30px;
               margin: 30px 0;
               border-radius: 30px;
               transition: background 0.5s;
               }
               .btn:hover{
               background: #563434;
               }

               .header{
               background: radial-gradient(#fff,#ffd6d6);
               }
               .header .row{
               margin-top: 70px;
               }
               .categories{
               margin: 70px 0;
               }
               .col-3{
               flex-basis: 30%;
               min-width: 250px;
               margin-bottom: 30px;
               }
               .col-3 img{
               width: 100%;
               }
               .small-container{
               max-width: 1080px;
               margin: auto;
               padding-left: 25px;
               padding-right: 25px;

               }
               .col-4{
               flex-basis: 25%;
               padding: 10px;
               min-width: 200px;
               margin-bottom: 50px;
               transition: transfrom 0.5s;
               }
               .col-4 img{
               width: 100%;
               }
               .title{
               text-align: center;
               margin: 0 auto 80px;
               position: relative;
               line-height: 60px;
               color: #555;
               }
               .title :: after{
               content: '';
               background: #ff523b;
               width: 80px;
               height: 5px;
               border-radius: 5px;
               position: absolute;
               bottom: 0;
               left: 50%;
               transform: translateX(-50%);
               }
               h4{
               color: #555;
               font-weight: normal;
               }
               .col-4 p{
               font-size: 14px;
               }
               .rating .fa{
               color: #ff523b;
               }
               .col-4:hover{
               transform: translateY(-5px);
               }

               /*------offer------*/

               .offer{
               background: radial-gradient(#fff,#ffd6d6);
               margin-top: 80px;
               padding: 30px 0;
               }
               .col-2 .offer-img{
               padding: 50px;
               }
               .small{
               color: #555;
               } 

               /*------testimonial------*/

               .testimonial{
               padding-top: 100px;
               }
               .testimonial .col-3{
               text-align: center;
               padding: 40px 20px;
               box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
               cursor: pointer;
               transition: transfrom 0.5s;
               }
               .testimonial .col-3 img{
               width: 50px;
               margin-top: 20px;
               border-radius: 50%;
               }
               .testimonial .col-3:hover{
               transform: translateY(-10px);
               }
               .fa.fa-quote-left{
               font-size: 34px;
               color: #ff523b;
               }
               .col-3 p{
               font-size: 12px;
               margin: 12px 0;
               color: #777;
               }
               .testimonial .col-3 h3{
               font-weight: 600;
               color: #555;
               font-size: 16px;
               }
          </style>

          <!-- Style kedua -->
          <style type="text/css">
               * {
                    padding: 0;
                    margin: 0;
                    font-family: sans-serif;
               }
               a {
                    color: inherit;
                    text-decoration: none;
               }
               .medsos {
                    padding: 5px 0;
                    background-color: #563434;
               }
               .medsos ul li {
                    display: inline-block;
                    color: #fff;
                    margin-right: 10px;
               }
               .container {
                    width: 80%;
                    margin: 0 auto;  
               }
               .container:after {
                    content: '';
                    display: block;
                    clear: both;
               }
               header h1 {
                    float: left;
                    padding: 15px 0;
                    color: #563434;
               }
               header ul {
                    float: right;
               }
               header ul li {
                    display: inline-block;
               }
               header ul li a{
                    padding: 25px 20px;
                    display: inline-block;
               }
               header ul li a:hover{
                    background-color: #563434;
                    color: #fff;
               }
               .active {
                    background-color: #563434;
                    color: #fff;
               }

               section {
                    padding: 50px 0;
               }
               section h3 {
                    text-align: center;
                    padding: 20px 0;
                    color: #563434;
                    margin-bottom: 25px;
               }
               .about,
               .service {
                    padding-bottom: 100px;
               }
               .about p {
                    color: #666;
                    word-spacing: 2px;
                    line-height: 25px;
               }
               .service {
                    background-color: #f9f9f9;
               }
               .box{
                    color: #563434;
               }
               .box:after {
                    content: '';
                    display: block;
                    clear: both;
               }
               .box .col-4 {
                    width: 25%;
                    padding: 20px;
                    box-sizing: border-box;
                    text-align: center;
                    float: left;
               }
               .icon {
                    width: 70px;
                    height: 70px;
                    border: 1px solid;
                    border-radius: 50%;
                    text-align: center;
                    line-height: 70px;
                    font-size: 20px;
                    margin: 0 auto;
               }
               .box .col-4 h4 {
                    margin: 20px 0;
               }
               footer {
                    padding: 30px 0;
                    background-color: #333;
                    color: #fff;
                    text-align: center;
               }
               .label{
                    background-color: #563434;
                    color: #fff;
               }
          </style>

     </head>


     <!--style kedua-->
     <div class="medsos">
        <div class="container">
            <ul>
               <li><a href=""><i class="fab fa-facebook"></i></a></li>
               <li><a href="https://twitter.com/afrelianie?s=08"><i class="fab fa-twitter-square"></i></a></li>
               <li><a href="https://www.instagram.com/anggita_afrelia?r=nametag"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
     </div>
     <header>
        <div class="container">
            <h1><a href="TUGAS1.html">Bride Story</a></h1>
            <ul>
                <li><a href="{{ url('/utama') }}">HOME</a></li>
                <li class="active"><a href="{{ url('/about') }}">ABOUT</a></li>
                <li><a  href="{{ url('/contact') }}">CONTACT</a></li>


                @if (Route::has('login'))
                    
                         @auth
                         <li><a href="{{ url('logout') }}">LOGOUT</a></li>
                         @else
                         
                         <li><a href="{{ route('login') }}">LOGIN</a></li>
                         @endauth
               
                @endif

            </ul>
        </div>
     </header>
     <!-- penutup -->


  <body>
    <div class="header">
      <div class="container">
          <div class="navbar">    
          </div>
       <div class="row">
          <div class="col-2">
               <h1>Paket Lengkap <br> Pernikahan Impian!</h1>
               <p>Paket Sudah Termasuk Beragam Jasa Untuk Wujudkan Impian Anda <br> Mulai dari pemesanan tempat, undangan, hingga perlengkapan pernikahan dan tata rias pengantin.</p>
               <a href="" class="btn">Pesan Sekarang &#8594;</a>
          </div>
          <div class="col-2">
               <img src="{{ url('/') }}/nikah/t3.jpg">
          </div>
       </div>
      </div>
    </div>





     <!--Profile-->
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <hr />

    <header style="text-align: center;">
    <section class="profile">
            <h2>PROFILE PERUSAHAAN</h2>
        <h3>Bride Story</h3>
            <img src="{{ url('/') }}/nikah/logo.jpg" width="200px" height="200px" style="border-radius: 50%">
        <p>(Pemilik Perusahaan : Anggita Afrelia)</p>
    </header>

    <article style="text-align: center;">
        <p>
            Hi, saya adalah web developer yang berdomisisli di Ketapang.
            ini adalah perusahaan saya yang berjalan dibidang jasa prewedding
        </p>
    </article>

    <div style="max-width: 600px; margin: 3em auto">
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>JASA</th>
                    <th>PAKET</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <ul>
                            <li>Fotografer Prewedding</li>
                            <li>Make UP Prewedding</li>
                            <li>Udangan Preweding</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Paket Sewa Temat</li>
                            <li>Paket Foto Pernikahan</li>
                            <li>Paket Alat dan Makanan</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>








     <!------ offer ------>
     <div class="offer">
     <div class="small-container">
     <div class="row">
               <div class="col-2">
                    <img src="{{ url('/') }}/nikah/t1.jpg" class="offer-img">
               </div>
               <div class="col-2">
                    <h2>ABOUT</h2>
                    <small> 1. Tim Profesional dan Berpengalaman: Didedikasikan untuk memberikan pelayanan terbaik, didukung oleh tim yang berpengalaman dalam industri pernikahan. <br>
                         2. Menyediakan Solusi Terpadu: Memberikan paket lengkap yang mencakup segala kebutuhan pernikahan, mulai dari persiapan hingga acara selesai. <br>
                         3. Menghormati Keinginan Pasangan: Mengutamakan keinginan dan visi pasangan untuk menciptakan pernikahan sesuai dengan impian mereka. <br>
                         4. Elegan dan Berkelas: Menghadirkan pernikahan yang elegan dan penuh dengan sentuhan kelas untuk setiap pasangan. <br>
                         5. Mengabadikan Momen Bahagia: Setiap momen istimewa akan diabadikan dengan indah, menciptakan kenangan seumur hidup. <br>
                         6. Detail Tiada Tanding: Setiap aspek dari pernikahan direncanakan dengan teliti, dari dekorasi hingga logistik, demi menciptakan acara yang sempurna. <br>
                         7. Kreatif dan Inovatif: Selalu mencari cara baru untuk membuat setiap pernikahan menjadi unik dan tak terlupakan.
                    </small> <br>
               </div>
          </div>
     </div>
     </div>
     </div>


     <!--footer-->
     <footer>
        <div class="container">
          <strong>Copyright &copy; 2023 <a href="/">Anggita Afrelia</a>.</strong> All rights reserved.
        </div>
     </footer>


  </body>
</html>