<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">  


  <title>Synergy Soft India</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('index/assets/img/logo3.png')}}" rel="icon">
  <link href="{{url('index/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('index/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('index/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('index/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('index/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('index/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('index/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Template Main CSS File -->
  <link href="{{url('index/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.11.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body class="bg-light">
<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <!-- <a href="index.html" class="logo d-flex align-items-center"> -->
        <a href="#hero"><img src="{{url('index/assets/img/logo3.png')}}" alt="" style="height:90px;"></a>
       
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{url('/')}}"><h4>Home</h4></a></li>
          <!-- <li><a class="nav-link scrollto" href="{{url('indexhome')}}">About</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="{{url('readmore')}}">About Us</a></li> -->
         <!--  <li><a class="nav-link scrollto" href="{{url('indexhome')}}">Counter</a></li>
          <li><a class="nav-link scrollto" href="{{url('indexhome')}}">Services</a></li>
          <li><a class="nav-link scrollto" href="{{url('indexhome')}}">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="{{url('indexhome')}}">Testimonial</a></li>
          <li><a class="nav-link scrollto" href="{{url('indexhome')}}">Team</a></li>
          <li><a class="nav-link scrollto" href="{{url('indexhome')}}">Clients</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#recent-blog-posts">Blog</a></li> -->
          <!-- <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
          <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<div class="container" style="margin-top: 8em;">
  <div class="row mt-5 mb-4">
    <!-- <div class="col-sm-10">
      
    </div> -->
    <!-- <div class="col-sm-12">
      <a href="{{url('/')}}" class="btn  text-white rounded-circle float-end" style="background-color: #012970;" >Back</a>

    </div> -->
    @foreach ($aboutus->take(6) as $key => $value)
    <div class="col-sm-1">
      &nbsp
    </div>
    <div class="col-sm-10">
      <h2 class="display-1" style="color: #012970;">{{$value->heading}}</h2>
      <img src="{{asset('abimages/'.$value->image)}}" style="height: 450px; width: 100%;" class="img-fluid" alt="">
      <p class="text-truncate bg-white">{!! $value->description !!}</p>
    </div>
    <div class="col-sm-1">
        &nbsp
    </div>
    
    @endforeach
  </div>
</div>

<!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="#"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
             <img src="{{url('index/assets/img/logo3.png')}}" alt="" >
             <!-- <span>Synergy Soft India</span> -->
            </a>
             @foreach($foot->take(1) as $key => $value)
            <p>{!! $value->paragraph !!}</p>
            @endforeach
            <div class="social-links mt-3">
              <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> -->
              <a href="https://www.facebook.com/profile.php?id=100090601004491&mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
              <!-- <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> -->
              <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
            </div>
          </div>
          
          <div class="col-lg-4 footer-links">
          </div>
          <!-- <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Una,<br>
              Himachal Pradesh<br><br>
              <strong>Phone:</strong> +91-70181-55283<br>
              <strong>Email:</strong>info@synergysoftindia.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SynergySoftIndia</span></strong>. All Rights Reserved
      </div>
      <!-- <div class="credits"> -->
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
       <!--  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> -->
    </div>
  </footer><!-- End Footer -->

 <!--  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="{{url('index/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{url('index/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{url('index/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('index/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{url('index/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('index/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{url('index/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('index/assets/js/main.js')}}"></script>

</body>

</html>