<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sleman Foodie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="{{ asset('landingpage/css/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('landingpage/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landingpage/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landingpage/css/magnific-popup.css') }}">

  <link rel="stylesheet" href="{{ asset('landingpage/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('landingpage/css/jquery.timepicker.css') }}">


  <link rel="stylesheet" href="{{ asset('landingpage/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('landingpage/css/style.css') }}">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="{{ route('index')}}">Sleman<span>Foodie</span></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="{{ route('index')}}" class="nav-link">Home</a></li>
        <li class="nav-item active"><a href="{{route('destination')}}" class="nav-link">Destination</a></li>
        <li class="nav-item"><a href="{{route('index.public')}}" class="nav-link">Map</a></li>
        <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
       </ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->

 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('landingpage/images/artomoro2.jpg') }}');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="{{route('destination')}}">Destination <i class="fa fa-chevron-right"></i></a></span> <span>Ayam Pedas Artomoro <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Ayam Pedas Artomoro</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 ftco-animate py-md-5 mt-md-5">
        <img src="{{ asset('landingpage/images/artomoro.jpg') }}" alt="" class="img-fluid">
      </div>
      <div class="col-lg-6 ftco-animate py-md-5 mt-md-5" style="text-align: justify;">
        <p>Ayam Pedas Artomoro adalah sebuah kuliner terkenal yang berlokasi di daerah Palagan, Sleman, Yogyakarta. Tempat ini dikenal luas oleh masyarakat Yogyakarta dan sekitarnya karena kelezatan ayam pedasnya yang autentik dan menggugah selera. Popularitas Ayam Pedas Artomoro tak hanya di kalangan masyarakat biasa, tetapi juga di kalangan selebriti, dengan banyak artis yang sudah berkunjung dan menikmati hidangannya. Racikan bumbu pedas yang khas dan tekstur ayam yang sempurna menjadikan tempat ini destinasi wajib bagi pecinta kuliner pedas.
            </p>
        </div>
        <div class="container">
        <div class="row">
          <div class="col-lg-6" style="text-align: justify;">
            <h3 class="mb-3">Menu</h3>
            <p>Beberapa menu yang tersedia di Ayam Pedas Artomoro antara lain:  </p>
            <ul>
              <li>Ayam Bakar Pedas : Rp 19.900</li>
              <li>Ayam Bakar Manis : Rp 19.900</li>
              <li>Pete Bakar Bandoeng : Rp 5.500</li>
              <li>Tempe Goreng Garit : Rp 4.900</li>
              <li>Tahu Goreng Bandeng : Rp 4.900</li>
              <li>Nasi Sepuasnya/Orang : Rp 4.500</li>
              <li>Es Teh Manis : Rp 4.500</li>
              <li>Teh Manis : Rp 4.000</li>
              <li>Es Jeruk : Rp 6.000</li>
              <li>Es Timun Keruk : Rp 6.500</li>
          </div>
          <div class="col-lg-6">
            <h3 class="mb-3">Jam Buka</h3>
            <ul>
              <li>Setiap Hari, Pukul 09.00 – 20.00</li>
              <li>Dapat dipesan melalui gofood.co.id</li>
    </div>
    <div class="tag-widget post-tag-container mb-5 mt-5">
      <div class="tagcloud">
        <a href="#" class="tag-cloud-link">Food</a>
        <a href="#" class="tag-cloud-link">Travel</a>
        <a href="#" class="tag-cloud-link">Place</a>
      </div>
    </div>
  </div>
</section> <!-- .section -->

<section class="ftco-intro ftco-section ftco-no-pt">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-md-12 text-center">
    <div class="img"  style="background-image:url('{{ asset('landingpage/images/Kuliner4.jpg') }}');">
     <div class="overlay"></div>
     <h2>We Are Sleman Foodie</h2>
     <p>Let's make your dream come true to be able to visit the best food in Yogyakarta</p>
     <p class="mb-0"><a href="{{route('destination')}}" class="btn btn-primary px-4 py-3">See More</a></p>
   </div>
 </div>
</div>
</div>
</section>

<footer class="ftco-footer ftco-section img" style="background-image: url('{{ asset('landingpage/images/bg_3.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Sleman Foodie</h2>
                    <p>Indonesia, negeri dengan sejuta pesona kuliner, terkenal akan kekayaan rempah-rempahnya yang memikat. Di antara segala kelezatan yang dimiliki, hidangan-hidangan di Indonesia menjadi daya tarik yang tak terelakkan bagi para pecinta makanan dari berbagai penjuru dunia.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Information</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">About</a></li>
                        <li><a href="#" class="py-2 d-block">Service</a></li>
                        <li><a href="#" class="py-2 d-block">Terms and Conditions</a></li>
                        <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                        <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Support</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Customer Support</a></li>
                        <li><a href="#" class="py-2 d-block">Booking Guide</a></li>
                        <li><a href="#" class="py-2 d-block">How to Book</a></li>
                        <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map marker"></span><span class="text">Jln. Seturan, Sleman, Yogyakarta</span></li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">082139704108</span></a></li>
                            <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">rinditrisetyaningsih@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a target="_blank">Rindi</a>
                </p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{ asset('landingpage/js/jquery.min.js') }}"></script>
<script src="{{ asset('landingpage/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('landingpage/js/popper.min.js') }}"></script>
<script src="{{ asset('landingpage/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('landingpage/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('landingpage/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('landingpage/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('landingpage/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('landingpage/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('landingpage/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('landingpage/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('landingpage/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('landingpage/js/google-map.js') }}"></script>
<script src="{{ asset('landingpage/js/main.js') }}"></script>


</body>
</html>
