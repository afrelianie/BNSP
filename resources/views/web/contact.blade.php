
@extends('template.pelanggan.header')
@section('content')




 <!-- contact section star --> 
 <section class="ftco-section ftco-no-pb contact-section mb-4">
        <div class="container">
          <div class="row d-flex contact-info">
            <div class="col-md-3 d-flex">
             <div class="align-self-stretch box p-4 text-center">
              <div class="icon d-flex align-items-center justify-content-center">
               <span class="fa fa-map-marker"></span>
             </div>
             <h3 class="mb-2">Address</h3>
             <p>198 West 21th Street, Suite 721 New York NY 10016</p>
           </div>
         </div>
         <div class="col-md-3 d-flex">
           <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
             <span class="fa fa-phone"></span>
           </div>
           <h3 class="mb-2">Contact Number</h3>
           <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
         </div>
       </div>
       <div class="col-md-3 d-flex">
         <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
           <span class="fa fa-paper-plane"></span>
         </div>
         <h3 class="mb-2">Email Address</h3>
         <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
       </div>
      </div>
      <div class="col-md-3 d-flex">
       <div class="align-self-stretch box p-4 text-center">
        <div class="icon d-flex align-items-center justify-content-center">
         <span class="fa fa-globe"></span>
       </div>
       <h3 class="mb-2">Website</h3>
       <p><a href="#">yoursite.com</a></p>
      </div>
      </div>
      </div>
      </div>
      </section>
      
      <!-- form section -->
        <section class="contact" id="contact">

            <div class="row">

                <div class="img">
                    <img src="{{ url('/') }}/assest/img/img7.jpg" alt="">
                </div>

                <!-- form contact -->
                <form action="">
                    <div class="inputBox">
                        <input type="text" placeholder="name">
                        <input type="email" placeholder="email">
                    </div>
                    <div class="inputBox">
                        <input type="number" placeholder="number">
                        <input type="text" placeholder="subject">
                    </div>
                    <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
                    <input href="#" type="submit" class="btn" value="send message">
                </form>

            </div>

        </section>
<!-- contact section end -->      


    
@endsection