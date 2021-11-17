@extends('layouts/main')


@section('container')

 <!-- Jumbotron -->
 <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Get work done <span>faster</span> <br>and <span>better</span> with us</h1>
    <a href="#" class="btn btn-info btn-lg tombol">View Our Work</a>
  </div>
</div>
<!-- akhir Jumbotron -->

   <!-- container -->
   @section('body')
       
   
    {{-- <div class="container"> --}}

      <!-- info panel -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-sm">
              <img src="img/employee.png" alt="Employee" class="img-fluid float-left">
              <h4>24 Hours</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-lg">
              <img src="img/hires.png" alt="HiRes" class="img-fluid float-left">
              <h4>High-Res</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-lg">
              <img src="img/security.png" alt="Security" class="img-fluid float-left">
              <h4>Security</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir info panel -->


      <!-- Workingspace -->
      <div class="row workingspace">
        <div class="col-lg-6">
          <img src="img/workingspace.png" alt="Working Space" class="img-fluid">
        </div>
        <div class="col-lg-5">
          <h2>You <span>Work</span> Like at <span>Home</span></h2>
          <p>Bekerja dengan suasana hati yang lebih asik, menyenangkan
            dan mempelajari hal baru setiap harinya.</p>
          <a href="#" class="btn btn-danger tombol">Gallery</a>
        </div>
      </div>
      <!-- akhir Workingspace -->


      <!-- Testimonial -->
      <section class="testimonial">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <p>"Bekerja dengan suasana hati yang lebih asik dan mempelajari hal baru setiap harinya."</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 justify-content-center d-flex">
            <img src="img/img1.png" alt="Testimonial 1">
            <img src="img/img2.png" alt="Testimonial 2" class="img-main">
            <img src="img/img3.png" alt="Testimonial 3">
          </div>
        </div>
        <div class="row justify-content-center info-text">
          <div class="col-lg text-center">
            <h5>Sunny Ye</h5>
            <p>Designer</p>
          </div>
        </div>
      </section>
      <!-- akhir Testimonial -->

      @endsection
    {{-- </div> --}}
    <!-- akhir container -->

        
    @endsection


