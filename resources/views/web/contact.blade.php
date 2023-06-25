
@extends('template.pelanggan.header')
@section('content')



<section class="contact" id="contact">

<div class="row">
    <style>
      .kontak {
        margin-left:auto;
        margin-right:auto;
        display:block;
        width:200px 
      }
    </style>
    <div class="kontak" style="display: flex; justify-content: center;">
        <img src="{{ url('/') }}/assest/img/contac.png" alt="">
    </div>

</div>

</section>
 <!-- contact section star --> 
 <section class="ftco-section ftco-no-pb contact-section mb-4">
        <div class="container-kontak">
          <div class="row d-flex contact-info">
            <div class="col-md-3 d-flex">
             <div class="align-self-stretch box p-4 text-center">
              <div class="icon d-flex align-items-center justify-content-center">
               <span class="fa fa-map-marker"></span>
             </div>
             <h3 class="mb-2">Address</h3>
             <p>Jtt tower, Kuningan Jakarta Selatan</p>
           </div>
         </div>
         <div class="col-md-3 d-flex">
           <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
             <span class="fa fa-phone"></span>
           </div>
           <h3 class="mb-2">Contact Number</h3>
           <p><a href="tel://1234567920">+62 617003044</a></p>
         </div>
       </div>
       <div class="col-md-3 d-flex">
         <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
           <span class="fa fa-paper-plane"></span>
         </div>
         <h3 class="mb-2">Email Address</h3>
         <p><a href="mailto:info@yoursite.com">jtt.info@gmail.com</a></p>
       </div>
      </div>
      <div class="col-md-3 d-flex">
       <div class="align-self-stretch box p-4 text-center">
        <div class="icon d-flex align-items-center justify-content-center">
         <span class="fa fa-globe"></span>
       </div>
       <h3 class="mb-2">Website</h3>
       <p><a href="#">Javatourandtrips.com</a></p>
      </div>
      </div>
      </div>
      </div>
      </section>
      
      <!-- form section -->

<!-- contact section end -->      


    
@endsection