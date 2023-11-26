<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="UTF-8" />
<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, target-densitydpi=device-dpi"
/>
<title> Personal Portfolio </title>
<link rel="icon" type="image/png" href="{{asset('/')}}website/images/favicon.png" />
<link rel="stylesheet" href="{{asset('/')}}website/css/font-awesome-pro.css" />
<link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{asset('/')}}website/css/scroll_button.css" />
<link rel="stylesheet" href="{{asset('/')}}website/css/plugin.css" />
<link rel="stylesheet" href="{{asset('/')}}website/css/spacing.css" />
<link rel="stylesheet" href="{{asset('/')}}website/css/style.css" />
<link rel="stylesheet" href="{{asset('/')}}website/css/responsive.css" />
</head>

<body>

<div class="preloader">
    <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
        <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
    </svg>
    <h5 class="preloader-text">Loading</h5>
</div>

<nav class="navbar navbar-expand-lg main_menu">
    <div class="container main_menu_bg ">
        <a class="navbar-brand text-light " href="{{route('home')}}">Rakibul Hasan</a>
        <button
            class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-sharp fa-regular fa-bars bar_icon"></i>
            <i class="fa-regular fa-xmark close_icon"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link text_hover_animaiton active" href="{{route('home')}}">Home</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text_hover_animaiton" href="{{route('about')}}">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text_hover_animaiton" href="{{route('service')}}">services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text_hover_animaiton" href="{{route('project')}}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text_hover_animaiton" href="{{route('contact')}}">contact</a>
                </li>
            </ul>
            <span class="toggle_icon c-pointer" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <i class="fa-sharp fa-sharp fa-regular fa-bars bar_icon-staggered"></i>
            </span>
        </div>
    </div>
</nav>

<section class="tf__banner banner" style="background: url({{asset('/')}}website/images//bg/banner.jpg)">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-8">
                <div class="tf__banner_text">
                    <h1>
                        Hi, I'm Rakibul Hasan! Creative
                        <span class="cd-headline rotate-1">

                  <span class="cd-words-wrapper">
                    <b class="is-visible">Designer</b>
                    <b>Coder</b>
                    <b>Player</b>
                  </span>
                </span>
                    </h1>
                    <p>
                        I'm a passionate Web design and Development with a mission to create
                        delightful and intuitive digital experiences. With a strong
                        foundation in design principles and a keen eye for detail, I
                        specialize in translating complex ideas into user-friendly
                        interfaces that captivate and engage.
                    </p>
                    <ul>
                        <li>
                            <a class="common_btn" href="#">Download Cv <i class="fa-solid fa-arrow-down-to-line"></i></a>
                        </li>
                        <li>
                            <a class="banner_video_btn play_btn" href="https://www.youtube.com/watch?v=B-ytMSuwbf8"><i class="fa-sharp fa-solid fa-circle-play"></i> Watch the Video</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-5 col-lg-4">
                <div class="tf__banner_img">
                    <div class="img">
                        <img src="{{asset('/')}}website/images//banner_img_1.png" alt="rakib" class="img-fluid w-100"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@yield('content')



<section class="tf__testimonial pt_115 xs_pt_75">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 m-auto mb_30">
                <div class="tf__section_heading">
                    <h5 class="has-animation">clients review</h5>
                    <h2 class="has-animation">My testomonial</h2>
                </div>
            </div>
        </div>
        <div class="row testi_slider">
            <div class="col-xl-6">
                <div class="tf__single_testimonial">
                    <div class="img">
                        <img src="{{asset('/')}}website/images//testimonial/1.jpg" alt="clients" class="img-fluid w-100"/>
                    </div>
                    <p class="rating">
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                    </p>
                    <h3>Eleanor pena</h3>
                    <h5>Marketing Coordinator</h5>
                    <p class="description">
                        Financial planners help people to knowledge in about how to
                        invest and in save their moneye the most efficient way eve plan
                        ners help people tioniio know ledige in about how.
                    </p>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="tf__single_testimonial">
                    <div class="img">
                        <img src="{{asset('/')}}website/images//testimonial/2.jpg" alt="clients" class="img-fluid w-100"/>
                    </div>
                    <p class="rating">
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                    </p>
                    <h3>Eleanor pena</h3>
                    <h5>Marketing Coordinator</h5>
                    <p class="description">
                        Financial planners help people to knowledge in about how to
                        invest and in save their moneye the most efficient way eve plan
                        ners help people tioniio know ledige in about how.
                    </p>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="tf__single_testimonial">
                    <div class="img">
                        <img src="{{asset('/')}}website/images//testimonial/1.jpg" alt="clients" class="img-fluid w-100"/>
                    </div>
                    <p class="rating">
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                    </p>
                    <h3>Eleanor pena</h3>
                    <h5>Marketing Coordinator</h5>
                    <p class="description">
                        Financial planners help people to knowledge in about how to
                        invest and in save their moneye the most efficient way eve plan
                        ners help people tioniio know ledige in about how.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>





<footer class="footer" id="footer">
    <div class="footer-container">
        <div class="pt_120 xs_pt_80 sm_pt_80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tf__footer_content fade_right" data-trigerId="footer" data-stagger=".25">
                            <div class="icon">
                                <div class="icon-contianer">
                                    <img src="{{asset('/')}}website/svg/map.svg" alt="footer" class="img-fluid w-100 svg"/>
                                </div>
                            </div>
                            <div class="text">
                                <h3>Address</h3>
                                <p>2118 Thornridge Cir. Syracuse, Connecticut 35624</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tf__footer_content fade_right" data-trigerId="footer" data-stagger=".25">
                            <div class="icon">
                                <div class="icon-contianer">
                                    <img src="{{asset('/')}}website/svg/phone.svg" alt="footer" class="img-fluid w-100 svg"/>
                                </div>
                            </div>
                            <div class="text">
                                <h3>Lets talk us</h3>
                                <a href="callto:1234567890">(603) 555-0123</a>
                                <a href="#">GitHub</a>
                                <a href="#">Facebook</a>
                                <a href="#">LinkedIn</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div
                            class="tf__footer_content fade_right" data-trigerId="footer" data-stagger=".25">
                            <div class="icon">
                                <div class="icon-contianer">
                                    <img src="{{asset('/')}}website/svg/envelope.svg" alt="footer" class="img-fluid w-100 svg"/>
                                </div>
                            </div>
                            <div class="text">
                                <h3>Send us email</h3>
                                <a href="mailto:example@gmail.com">deanna.curtis@example.com</a>
                                <a href="mailto:example@gmail.com">curtis@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tf__footer_copyright">
                            <p>© CodeeFly 2023 | All Rights Reserved</p>
                            <ul>
                                <li>
                                    <a href="#" class="text_hover_animaiton">Trams & Condition</a>
                                </li>
                                <li>
                                    <a href="#" class="text_hover_animaiton">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="text_hover_animaiton">Sitemap</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="progress active c-pointer">
    <svg class="progress-svg" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>

<div id="magic-cursor">
    <div id="ball"></div>
</div>


<script src="{{asset('/')}}website/js/plugin.js"></script>
<!--scroll button js-->
<script src="{{asset('/')}}website/js/scroll_button.js"></script>
<!--sticky sidebar js-->
<script src="{{asset('/')}}website/js/sticky_sidebar.js"></script>
<!-- Animation -->
<script src="{{asset('/')}}website/js/animation.js"></script>
<!--main/custom js-->
<script src="{{asset('/')}}website/js/main.js"></script>
</body>


</html>
