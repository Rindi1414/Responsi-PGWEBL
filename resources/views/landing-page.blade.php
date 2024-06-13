<!-- resources/views/landing-page.blade.php -->
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Sleman<span>Foodie</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('destination') }}" class="nav-link">Destination</a></li>
                    <li class="nav-item"><a href="{{ route('index.public') }}" class="nav-link">Map</a></li>
                    <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('landingpage/images/Kuliner4.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <span class="subheading">Welcome to Sleman Foodie</span>
                    <h1 class="mb-4">Nikmati Setiap Sajian dengan Cita Rasa Asli Sleman</h1>
                    <p class="caps">Explore the Deliciousness in Every Bite</p>
                </div>
                <div class="col-md-5 d-flex justify-content-center align-items-center">
                    <a href="#video" class="icon-play scroll-down">
                        <span class="fa fa-play"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section services-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100" style="text-align: center;">
                        <span class="subheading">Welcome to Sleman Foodie</span>
                        <h2 class="mb-4">It's time to start your adventure</h2>
                        <p>Selamat datang di surga tersembunyi di tepi meja makan, di mana kelezatan tak terbatas bertemu dengan petualangan rasa yang tak terlupakan. Temukan pesona yang tiada duanya di hidangan-hidangan kami, tempat di mana cita rasa mengisahkan ceritanya sendiri dan aroma menjadi saksi bisu akan keindahan yang abadi. Sambutlah keajaiban kuliner yang mengundang Anda untuk menjelajahi kelezatan yang tak terbatas di destinasi kuliner yang kami tawarkan.</p>
                        <p>Indonesia, negeri dengan beragam kekayaan kuliner, terkenal akan kelezatan masakannya yang memikat. Di antara segala keindahan rasa yang dimiliki, hidangan-hidangan di Indonesia menjadi daya tarik yang tak terelakkan bagi para penikmat kuliner dari berbagai penjuru dunia. Menjadi pilihan utama destinasi kuliner, pesona hidangan-hidangan ini menawarkan pengalaman yang tak terlupakan, menjadikan Indonesia sebagai surga bagi para pencinta petualangan kuliner.</p>
                        <p><a href={{ route('destination') }} class="btn btn-primary py-3 px-4">Search Destination</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about img" style="background-image: url('{{ asset('landingpage/images/Kuliner1.jpg') }}');">
        <div class="overlay"></div>
        <div class="container py-md-5">
            <div class="row py-md-5">
                <div class="col-md d-flex align-items-center justify-content-center">
                    <!-- Content -->
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about ftco-no-pt img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="img d-flex w-100 align-items-center justify-content-center" style="background-image: url('{{ asset('landingpage/images/Kuliner3.jpg') }}');">
                                <!-- Image content -->
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">Thank you</span>
                                    <p>Bumbu dan masakan adalah kata-kata indah cinta yang mewakili perasaanku. Karena kelezatanku senantiasa merasuk bagai aroma yang menggugah.</p>
                                    <p><a href={{ route('destination') }} class="btn btn-primary">Choice Destination</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="video" class="ftco-intro ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <iframe id="video1" width="100%" height="500" src="https://www.youtube.com/embed/_hdZwBbGGro?si=7XzROrM3RK4iGs2N" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro ftco-section ftco-no-pt">
        <div class="container">
         <div class="row justify-content-center">
          <div class="col-md-12 text-center">
           <div class="img"  style="background-image: url('{{ asset('landingpage/images/Kuliner4.jpg') }}');">
            <div class="overlay"></div>
            <h2>We Are Sleman Foodie</h2>
            <p>Let's make your dream come true to be able to visit the best beaches in Yogyakarta</p>
            <p class="mb-0"><a href="{{ route('index.public') }}" class="btn btn-primary px-4 py-3">See More</a></p>
          </div>
        </div>
       </div>
       </div>
       </section>
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

    <!-- Scripts -->
    <script src="{{ asset('landingpage/js/jquery.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/popper.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('landingpage/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/aos.js') }}"></script>
    <script src="{{ asset('landingpage/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('landingpage/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/scrollax.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/main.js') }}"></script>
</body>
</html>
