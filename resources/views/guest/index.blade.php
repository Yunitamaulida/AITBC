<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>TBC Kecerdasan Buatan - Hasil</title>
    <!--====== Favicon Icon ======-->
    <link rel = "icon" href = {{ asset('admin/dist/img/AdminLTELogo.png') }}  type = "image/x-icon">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href={{asset('guest/assets/css/bootstrap.min.css')}}>
    <!--====== Slick css ======-->
    <link rel="stylesheet" href={{asset('guest/assets/css/slick.css')}}>
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href={{asset('guest/assets/css/magnific-popup.css')}}>
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href={{asset('guest/assets/css/LineIcons.css')}}>
    <!--====== Default css ======-->
    <link rel="stylesheet" href={{asset('guest/assets/css/default.css')}}>
    <!--====== Style css ======-->
    <link rel="stylesheet" href={{asset('guest/assets/css/style.css')}}>
</head>

<body>
  
    <!--====== HEADER ONE PART START ======-->

    <header class="header-area">

        <div class="navbar-area navbar-one navbar-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="{{asset('guest/assets/images/logo.sv')}}g" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#penyakit">Penyakit</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href={{ url('konsultasi') }}>Diagnosa</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="navbar-btn d-none d-sm-inline-block">
                                <ul>
                                    <li><a class="light" href={{ url('home') }}>Sign In</a></li>
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <div id="home" class="header-content-area d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-wrapper">
                            <div class="header-content">
                                <h3 class="header-title">Web System Pakar TBC</h3>
                                <p class="text">Aplikasi ini dibuat untuk mempermudah pengguna antara masyarakat dan pakar TBC untuk mekalukan pengecekan mandiri. Aplikasi masih dalam prosess pembangunan dan masih belum meiliki data yang lengkap!</p>
                                <div class="header-btn rounded-buttons">
                                    <a class="main-btn rounded-one" href={{ url('konsultasi') }}>Mulai Diagnosa</a>
                                </div>
                                
                            </div> <!-- header content -->

                            <div class="header-image d-none d-lg-block">
                                <div class="image">
                                    <img src={{asset('guest/assets/images/header.png')}} alt="Header">
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-shape">
                <img src="{{asset('guest/assets/images/header-shape.svg')}}" alt="shape">
            </div> <!-- header-shape -->
        </div> <!-- header content area -->
    </header>

    <!--====== HEADER ONE PART ENDS ======-->
    
    <!--====== FEATRES PART START ======-->

    {{-- <section id="features" class="features-area pt-60 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features text-center mt-40">
                        <div class="features-icon">
                            <i class="lni-school-compass"></i>
                            <img class="shape" src="{{asset('guest/assets/images/f-shape-1.svg')}}" alt="Shape">
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Graphics Design</a></h4>
                            <p class="text">Short description for the ones who look for something new. Awesome!</p>
                            <div class="features-btn rounded-buttons">
                                <a class="main-btn rounded-one" href="#">KNOW MORE</a>
                            </div>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features text-center mt-40">
                        <div class="features-icon">
                            <i class="lni-construction"></i>
                            <img class="shape" src="{{asset('guest/assets/images/f-shape-1.svg')}}" alt="Shape">
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Product Design</a></h4>
                            <p class="text">Short description for the ones who look for something new. Awesome!</p>
                            <div class="features-btn rounded-buttons">
                                <a class="main-btn rounded-one" href="#">KNOW MORE</a>
                            </div>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features text-center mt-40">
                        <div class="features-icon">
                            <i class="lni-cup"></i>
                            <img class="shape" src="{{asset('guest/assets/images/f-shape-1.svg')}}" alt="Shape">
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">UI & UX Design</a></h4>
                            <p class="text">Short description for the ones who look for something new. Awesome!</p>
                            <div class="features-btn rounded-buttons">
                                <a class="main-btn rounded-one" href="#">KNOW MORE</a>
                            </div>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section> --}}

    <!--====== FEATRES PART ENDS ======-->
    
    <!--====== ABOUT THREE PART START ======-->

    <section id="about" class="about-area pt-70 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-feature mt-30">
                        <div class="about-feature-image">
                            <img src={{asset('guest/assets/images/about.png')}} alt="feature">
                        </div>
                        <div class="about-feature-content">
                            <h2 class="feature-title">The future of designing starts here</h2>
                            <p class="text">An open platform for presentations and content collaboration. Sign up to get early access.</p>
                        </div>
                    </div> <!-- about feature three -->
                </div>
                <div class="col-lg-6">
                    <div class="about-feature-items d-sm-flex mt-30">
                        <div class="feature-items-icon">
                            <img src={{asset('guest/assets/images/feature-icon-1.png')}} alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">Powerful templates</h5>
                            <p class="text">Poorly designed presentations are a thing of the past. Create beautiful and high-quality content that is aligned with your brand, in just a few clicks.</p>
                        </div>
                    </div> <!-- about feature items -->
                    <div class="about-feature-items d-sm-flex mt-30">
                        <div class="feature-items-icon">
                            <img src={{asset('guest/assets/images/feature-icon-2.png')}} alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">Designed for everyone</h5>
                            <p class="text">Manually updating your business reports and sales pitches is tedious and painful. With Pitch, connect to external data sources documents.</p>
                        </div>
                    </div> <!-- about feature items -->
                    <div class="about-feature-items d-sm-flex mt-30">
                        <div class="feature-items-icon">
                            <img src={{asset('guest/assets/images/feature-icon-3.png')}} alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">Work anywhere</h5>
                            <p class="text">Poorly designed presentations are a thing of the past. Create beautiful and high-quality content that is aligned with your brand, in just a few clicks.</p>
                        </div>
                    </div> <!-- about feature items -->
                    <div class="about-feature-items d-sm-flex mt-30">
                        <div class="feature-items-icon">
                            <img src={{asset('guest/assets/images/feature-icon-4.png')}} alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">Updated in real time</h5>
                            <p class="text">Manually updating your business reports and sales pitches is tedious and painful. With Pitch, connect to external data sources documents.</p>
                        </div>
                    </div> <!-- about feature items -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT THREE PART ENDS ======-->
    
    <!--====== PORTFOLIO PART START ======-->

    {{-- <section id="portfolio" class="portfolio-area pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                            <div class="text-center">
                                <h2>You are using free lite version of Agency</h2></br>
                                <p>Please, purchase the premium version just for $9 - if you would like to remove footer credits and get all features, documentation and support</p></br>
                                <div class="rounded-buttons">
                                    <a class="main-btn rounded-one" rel="nofollow" href="https://rebrand.ly/agency-gg">Purchase Now</a>
                                </div>
                                
                            </div> <!-- header content -->
            </div> <!-- row -->
            
        </div> <!-- container -->
    </section> --}}

    <!--====== PORTFOLIO PART ENDS ======-->
    
    <!--====== PRICING START ======-->
    
    <section id="penyakit" class="pricing-area pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h4 class="title">Jenis Penyakit TBC</h4>
                        <p class="text">Berikut data penyakit TBC beserta gejala yang sudah di isi oleh pakar TBC !</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row justify-content-center">
                
                @forelse ($penyakit as $post)                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing mt-40">
                        <div class="pricing-baloon">
                            <img src={{ asset("guest/assets/images/baloon.svg") }}  alt="baloon">
                        </div>
                        <div class="pricing-header">
                            <h5 class="sub-title">{{$post->name}}</h5>
                            <span class="price">{{$post->deskipsi}}</span>
                            {{-- <p class="year">per year</p> --}}
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i>{{$post->solusi}}</li>
                                {{-- <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                                <li><i class="lni-check-mark-circle"></i> Super friendly support team</li>
                                <li><i class="lni-check-mark-circle"></i> Awesome Support</li> --}}
                            </ul>
                        </div>
                        {{-- <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-one" href="#">GET STARTED</a>
                        </div>
                        <div class="bottom-shape">
                            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-2{fill:#0067f4;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g><g data-name="Group 747"><path data-name="Path 294" class="cls-1 color-2" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path data-name="Path 297" class="cls-2 color-2" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path data-name="Path 296" class="cls-3 color-2" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path data-name="Path 295" class="cls-4 color-2" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div> --}}
                    </div> <!-- single pricing -->
                </div>                
                @empty             
                    <div class="col-lg-4 col-md-7 col-sm-9">
                        <div class="pricing mt-40">
                            <div class="pricing-baloon">
                                <img src={{ asset("guest/assets/images/baloon.svg") }} alt="baloon">
                            </div>
                            <div class="pricing-header">
                                <h5 class="sub-title">Kosong</h5>
                                <span class="price">Data belum di isi oleh Pakar</span>
                                {{-- <p class="year">per year</p> --}}
                            </div>
                            <div class="pricing-list">
                                <ul>
                                    <li><i class="lni-check-mark-circle"></i>data masih kososng</li>
                                    {{-- <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                                    <li><i class="lni-check-mark-circle"></i> Super friendly support team</li>
                                    <li><i class="lni-check-mark-circle"></i> Awesome Support</li> --}}
                                </ul>
                            </div>
                            {{-- <div class="pricing-btn rounded-buttons text-center">
                                <a class="main-btn rounded-one" href="#">GET STARTED</a>
                            </div> --}}
                            {{-- <div class="bottom-shape">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-2{fill:#0067f4;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g><g data-name="Group 747"><path data-name="Path 294" class="cls-1 color-2" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path data-name="Path 297" class="cls-2 color-2" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path data-name="Path 296" class="cls-3 color-2" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path data-name="Path 295" class="cls-4 color-2" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                            </div> --}}
                        </div> <!-- single pricing -->
                    </div>     
                @endforelse
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRICING ENDS ======-->
    
    <!--====== TESTIMONIAL PART START ======-->

    {{-- <section class="testimonial-area pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h4 class="title">Testimonial</h4>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row testimonial-active">
                <div class="col-lg-6">
                    <div class="single-testimonial mt-30">
                        <div class="testimonial-author d-sm-flex align-items-center">
                            <div class="author-image">
                                <img src="assets/images/author-1.jpg" alt="Author">
                            </div>
                            <div class="author-name media-body">
                                <h6 class="name">Riley Beata</h6>
                                <span class="sub-title">Angel Investor</span>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Poorly designed presentations are a thing of the past. Create beautiful and high-quality content that is aligned with your brand, in just a few clicks.</p>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="single-testimonial mt-30">
                        <div class="testimonial-author d-sm-flex align-items-center">
                            <div class="author-image">
                                <img src="assets/images/author-2.jpg" alt="Author">
                            </div>
                            <div class="author-name media-body">
                                <h6 class="name">Fajar Siddiq</h6>
                                <span class="sub-title">Entrepreneur and Influencer</span>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Poorly designed presentations are a thing of the past. Create beautiful and high-quality content that is aligned with your brand, in just a few clicks.</p>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="single-testimonial mt-30">
                        <div class="testimonial-author d-sm-flex align-items-center">
                            <div class="author-image">
                                <img src="assets/images/author-3.jpg" alt="Author">
                            </div>
                            <div class="author-name media-body">
                                <h6 class="name">Kamil Kiwis</h6>
                                <span class="sub-title">Art Director</span>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Poorly designed presentations are a thing of the past. Create beautiful and high-quality content that is aligned with your brand, in just a few clicks.</p>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section> --}}

    <!--====== TESTIMONIAL PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->

    {{-- <section id="contact" class="contact-area pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h4 class="title">Get in touch</h4>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact mt-30">
                        <h4 class="contact-title">We love to hear from you or have a project on mind? lets talk.</h4>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam unde repellendus delectus facilis quia consequatur maxime perferendis! Sequi, modi consequatur. <br> <br> Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                        <ul class="contact-info">
                            <li><i class="lni-money-location"></i> 1010 Avenue, NY, USA</li>
                            <li><i class="lni-phone-handset"></i> 009-215-5596</li>
                            <li><i class="lni-envelope"></i> hello@customeagency.com</li>
                        </ul>
                    </div> <!-- contact -->
                </div>
                <div class="col-lg-6">
                    <div class="contact-form form-style-one mt-15">
                        <form id="contact-form" action="assets/contact.php" method="post">
                            <div class="form-input mt-15">
                                <label>Name</label>
                                <div class="input-items default">
                                    <input name="name" type="text" placeholder="Name">
                                    <i class="lni-user"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Email</label>
                                <div class="input-items default">
                                    <input name="email" type="text" placeholder="Email">
                                    <i class="lni-envelope"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Massage</label>
                                <div class="input-items default">
                                    <textarea name="message" placeholder="Massage"></textarea>
                                    <i class="lni-pencil-alt"></i>
                                </div>
                            </div> <!-- form input -->
                            <p class="form-message"></p>
                            <div class="form-input standard-buttons mt-20">
                                <button class="main-btn standard-two" type="submit">Submit</button>
                            </div> <!-- form input -->
                        </form>
                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section> --}}

    <!--====== CONTACT PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-70 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-logo-support d-md-flex align-items-end justify-content-between">
                            <div class="footer-logo d-flex align-items-end pt-30">
                                <a href="index.html"><img src={{asset('guest/assets/images/footer-logo.svg')}} alt="Logo"></a>
                            </div> <!-- footer logo -->
                        </div> <!-- footer logo support -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-xl-6 col-lg-4 col-sm-12">
                        <div class="footer-support ">
                            <span class="number">09-215-5596</span>
                            <span class="mail">hello@customeagency.com</span>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram-original"></i></a></li>
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-4">
                        <div class="footer-link">
                            <h6 class="footer-title">Company</h6>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="footer-link">
                            <h6 class="footer-title">Product & Services</h6>
                            <ul>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Developer</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="footer-link">
                            <h6 class="footer-title">Help & Suuport</h6>
                            <ul>
                                <li><a href="#">Support Center</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p class="text">Template Crafted by <a rel="nofollow" href="">Rahgenah</a> - UI Powered by <a el="nofollow" href="">AAP</a></p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->   
    
    
    

    <!--====== jquery js ======-->
    <script src="{{asset('guest/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('guest/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('guest/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('guest/assets/js/popper.min.js')}}"></script>


    <!--====== Images Loaded js ======-->
    <script src="{{asset('guest/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="{{asset('guest/assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('guest/assets/js/scrolling-nav.js')}}"></script>
    
    
    <!--====== Slick js ======-->
    <script src="{{asset('guest/assets/js/slick.min.js')}}"></script>
    
    
    <!--====== Main js ======-->
    <script src="{{asset('guest/assets/js/main.js')}}"></script>
</body>

</html>
