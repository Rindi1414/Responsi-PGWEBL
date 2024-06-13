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
     <a class="navbar-brand" href="{{ route('index') }}">Yogyakarta<span>Sleman Foodie</span></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="{{ route('index') }}" class="nav-link">Home</a></li>
					<li class="nav-item active"><a href="destination.html" class="nav-link">Destination</a></li>
					<li class="nav-item"><a href="{{ route('index.public') }}" class="nav-link">Map</a></li>
                    <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
       </ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->

 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('landingpage/images/Kuliner4.jpg') }}');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Destination <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Destination</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-4 d-flex ftco-animate">
       <div class="blog-entry justify-content-end">
        <a href="{{route('artomoro')}}" class="block-20" style="background-image: url('{{ asset('landingpage/images/artomoro.jpg') }}');">
        </a>
        <div class="text">
         <div class="d-flex align-items-center mb-4 topp">
          <div class="one">
           <span class="day">11</span>
         </div>
         <div class="two">
           <span class="yr">2023</span>
           <span class="mos">September</span>
         </div>
       </div>
       <h3 class="heading"><a href="{{route('artomoro')}}">Ayam Pedas Artomoro</a></h3>
       <p>Jalan Palagan Tentara Pelajar No.30s, Karang Moko, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta</p>
       <p><a href="{{ route('artomoro') }}" class="btn btn-primary">Read more</a></p>
     </div>
   </div>
 </div>
 <div class="col-md-4 d-flex ftco-animate">
   <div class="blog-entry justify-content-end">
    <a href="{{route('ayammertua')}}" class="block-20" style="background-image: url('{{ asset('landingpage/images/ayammertua1.jpg') }}');">
    </a>
    <div class="text">
     <div class="d-flex align-items-center mb-4 topp">
      <div class="one">
        <span class="day">11</span>
      </div>
      <div class="two">
        <span class="yr">2023</span>
        <span class="mos">September</span>
     </div>
   </div>
   <h3 class="heading"><a href="kesirat.html">Ayam Mertua</a></h3>
   <p>Jl. Deresan IV No.17, Manggung, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta</p>
   <p><a href="{{route('ayammertua')}}" class="btn btn-primary">Read more</a></p>
 </div>
</div>
</div>
<div class="col-md-4 d-flex ftco-animate">
 <div class="blog-entry">
  <a href="{{route('warungsambalbakar')}}" class="block-20" style="background-image: url('{{ asset('landingpage/images/sambalbakar1.jpg') }}');">
  </a>
  <div class="text">
   <div class="d-flex align-items-center mb-4 topp">
    <div class="one">
     <span class="day">11</span>
   </div>
   <div class="two">
     <span class="yr">2023</span>
     <span class="mos">September</span>
   </div>
 </div>
 <h3 class="heading"><a href="{{route('warungsambalbakar')}}">Warung Sambal Bakar</a></h3>
 <p>Jalan Palagan Tentara Pelajar, Karang Moko, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta</p>
 <p><a href="{{route('warungsambalbakar')}}" class="btn btn-primary">Read more</a></p>
</div>
</div>
</div>
<div class="col-md-4 d-flex ftco-animate">
 <div class="blog-entry">
  <a href="{{route('richeese')}}" class="block-20" style="background-image: url('{{ asset('landingpage/images/recheese1.jpg') }}');">
  </a>
  <div class="text">
   <div class="d-flex align-items-center mb-4 topp">
    <div class="one">
     <span class="day">11</span>
   </div>
   <div class="two">
     <span class="yr">2023</span>
     <span class="mos">September</span>
   </div>
 </div>
 <h3 class="heading"><a href="{{route('richeese')}}">Richeese Factory Jogja City Mall</a></h3>
 <p>Jogja City Mall, Jl. Kutu Patran, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta</p>
 <p><a href="{{route('richeese')}}" class="btn btn-primary">Read more</a></p>
</div>
</div>
</div>
<div class="col-md-4 d-flex ftco-animate">
 <div class="blog-entry">
  <a href="{{route('preksu')}}" class="block-20" style="background-image: url('{{ asset('landingpage/images/preksu1.jpg') }}');">
  </a>
  <div class="text">
   <div class="d-flex align-items-center mb-4 topp">
    <div class="one">
     <span class="day">11</span>
   </div>
   <div class="two">
     <span class="yr">2023</span>
     <span class="mos">September</span>
   </div>
 </div>
 <h3 class="heading"><a href="{{route('preksu')}}">Ayam Geprek & Susu (PREKSU) Pandega</a></h3>
 <p>jl. Pogung Raya, Pogung Kidul, Sinduadi, Kabupaten Sleman, Daerah Istimewa Yogyakarta</p>
 <p><a href="{{route('preksu')}}" class="btn btn-primary">Read more</a></p>
</div>
</div>
</div>
<div class="col-md-4 d-flex ftco-animate">
 <div class="blog-entry">
  <a href="{{route('kfc')}}" class="block-20" style="background-image: url('{{ asset('landingpage/images/kfc1.jpg') }}');">
  </a>
  <div class="text">
   <div class="d-flex align-items-center mb-4 topp">
    <div class="one">
     <span class="day">11</span>
   </div>
   <div class="two">
     <span class="yr">2023</span>
     <span class="mos">September</span>
   </div>
 </div>
 <h3 class="heading"><a href="{{route('kfc')}}">KFC UGM Yogyakarta</a></h3>
 <p>Jl. C. Simanjuntak No.73, Terban, Kec. Gondokusuman, Kabupaten Sleman, Daerah Istimewa Yogyakarta</p>
 <p><a href="{{route('kfc')}}" class="btn btn-primary">Read more</a></p>
</div>
</div>
</div>
</div>
</div>
</section>
<br>
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

<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#ff6b6b"/></svg></div>

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
<script src="{{ asset('landingpage/js/google-map.js') }}"></script>
<script src="{{ asset('landingpage/js/main.js') }}"></script>

</body>
</html>
