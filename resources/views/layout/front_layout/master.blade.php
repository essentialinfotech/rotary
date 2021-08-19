<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Rotary</title>
<!-- Stylesheets -->
<link href="{{asset('assets/front/assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('assets/front/assets/css/style.css')}}" rel="stylesheet">
<!-- Responsive File -->
<link href="{{asset('assets/front/assets/css/responsive.css')}}" rel="stylesheet">
<!-- Color File -->
<link href="{{asset('assets/front/assets/css/color.css')}}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Yantramanav:wght@300;400;500;700;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('assets/front/assets/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('assets/front/assets/images/favicon.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>
    <div id="home"></div>

    <!-- Main Header -->
    <header class="main-header header-style-one onepage-header">

        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="left-column">
                        <ul class="social-icon">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                        <div class="search-box">
                            <form class="search-form">
                                <input type="search" placeholder="Search...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="location">
                            <span class="flaticon-cursor"></span>
                            <form action="#" class="location-switcher">
                                <select class="selectpicker">
                                    <option value="1">Melbourne</option>
                                    <option value="2">New York</option>
                                    <option value="3">Chicago</option>
                                    <option value="4">Boston</option>
                                </select>
                            </form>
                        </div>
                        <div class="phone-number"><i class="flaticon-calling"></i><a href="tel:(+61)32456789"></a>(+61) 324 56 789</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="onepage-menu">
            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <!-- div class="logo-box">
                            <div class="logo"><a href="index.html"><img src="{{asset('assets/front/assets/images/logo.png')}}" alt=""></a></div>
                        </div> -->
                        <div class="right-column">
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img src="{{asset('assets/front/assets/images/icons/icon-bar-2.png')}}" alt=""></div>

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix scroll-nav" id="navbarSupportedContent">
                                        <ul class="navigation">
                                            <li class="current"><a href="#home">Home</a></li>
                                            <li><a href="#about">About RLI</a></li>
                                            <li><a href="#work">RLI Bangladesh Division</a></li>
                                            <li><a href="#testimonial">RLI South Asia</a></li>
                                            <li><a href="#blog">Announcement</a></li>
                                            <li><a href="#contact">RLI Alumni</a></li>
                                            <li class="dropdown"><a href="about.html">Courses</a>
                                            <ul>
                                                <li><a href="about.html">Register for RLI Courese</a></li>
                                                
                                            </ul>
                                        </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="navbar-left-info">
                                <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img src="{{asset('assets/front/assets/images/icons/icon-bar-2.png')}}" alt=""></div>

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix scroll-nav" id="navbarSupportedContent">
                                        <ul class="navigation">
                                            <li class="dropdown"><a href="about.html">Login</a>
                                            <ul>
                                                <li><a href="about.html">Member Login/Sign up</a></li>
                                                <li><a href="history.html">Register For Alumni</a></li>
                                         
                                            </ul>
                                        </li>
                                            <li><a href="#about">Google Translate</a></li>
                                          
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-remove"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{asset('assets/front/assets/images/logo.png')}}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>
    <!-- End Main Header -->

    <!-- Hidden Sidebar -->
    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href="index.html"><img src="{{asset('assets/front/assets/images/logo.png')}}" alt=""></a></div>
                    <div class="text">Demoralized by the charms of pleasure of the moment so blinded by desire that they cannot foresees the pain.</div>
                </div>
                <!-- PDF Widget -->
                <div class="pdf-widget sidebar-widget">
                    <div class="row">
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="{{asset('assets/front/assets/images/icons/icon-8.png')}}" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="{{asset('assets/front/assets/images/icons/icon-8.png')}}" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                    </div>                            
                </div>
                <!-- Contact Widget -->
                <div class="contact-widget">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-cursor"></span></div>
                        <div class="text">Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-calling"></span></div>
                        <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61) 324 56 789 & 790</a></div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-mail"></span></div>
                        <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">supportyou@transida.com</a></div>
                    </div>
                </div>
                <!-- Link Btn -->
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i>Purchase Our Theme </span></a></div>
            </div>
        </div>
    </section>
    
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

   @yield('content')

    <!--Main Footer-->
    <footer class="main-footer">
        <div class="upper-box">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="widget contact-widget style-two">
                            <h4>Do You Have Any Question? Please <br> Contact Our Team</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="wrapper-box">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-calling"></span></div>
                                            <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61)32456789</a></div>
                                        </div>
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">info@transida.com</a></div>
                                        </div>
                                        <ul class="social-icon">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-box">
                                        <div class="icon"><span class="flaticon-mail"></span></div>
                                        <div>
                                            <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                            <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            <div class="text"><span>Sunday-Closed</span></div>
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget links-widget">
                                    <h4 class="widget_title">Useful Links</h4>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="about.html">About Company</a></li>
                                            <li><a href="contact.html">Get In Touch</a></li>
                                            <li><a href="#">Industries Served</a></li>
                                            <li><a href="service.html">Our Services</a></li>
                                            <li><a href="#">Pricing & Plans</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget instagram-widget">
                                    <h4 class="widget_title">Our Gallery</h4>
                                    <div class="wrapper-box">
                                        <div class="image">
                                            <img src="{{asset('assets/front/assets/images/gallery/gallery-1.jpg')}}" alt="">
                                            <div class="overlay-link"><a href="{{asset('assets/front/assets/images/gallery/gallery-1.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img src="{{asset('assets/front/assets/images/gallery/gallery-2.jpg')}}" alt="">
                                            <div class="overlay-link"><a href="{{asset('assets/front/assets/images/gallery/gallery-2.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img src="{{asset('assets/front/assets/images/gallery/gallery-3.jpg')}}" alt="">
                                            <div class="overlay-link"><a href="{{asset('assets/front/assets/images/gallery/gallery-3.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img src="{{asset('assets/front/assets/images/gallery/gallery-4.jpg')}}" alt="">
                                            <div class="overlay-link"><a href="{{asset('assets/front/assets/images/gallery/gallery-4.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img src="{{asset('assets/front/assets/images/gallery/gallery-5.jpg')}}" alt="">
                                            <div class="overlay-link"><a href="{{asset('assets/front/assets/images/gallery/gallery-5.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img src="{{asset('assets/front/assets/images/gallery/gallery-6.jpg')}}" alt="">
                                            <div class="overlay-link"><a href="{{asset('assets/front/assets/images/gallery/gallery-6.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                    </div><!-- /.gallery-wrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>               
    </footer>
    <!--End Main Footer-->

    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row m-0 align-items-center justify-content-between">
                <div class="copyright-text">Copyright © 2020 <a href="#"> Transida.</a> All Rights Reserved.</div>
                <ul class="menu">
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy </a></li>
                    <li><a href="#">  Sitemap</a></li>
                </ul>
            </div>            
        </div>
    </div>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>

<script src="{{asset('assets/front/assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/front/assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/front/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/front/assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/front/assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/front/assets/js/isotope.js')}}"></script>
<script src="{{asset('assets/front/assets/js/owl.js')}}"></script>
<script src="{{asset('assets/front/assets/js/appear.js')}}"></script>
<script src="{{asset('assets/front/assets/js/wow.js')}}"></script>
<script src="{{asset('assets/front/assets/js/lazyload.js')}}"></script>
<script src="{{asset('assets/front/assets/js/scrollbar.js')}}"></script>
<script src="{{asset('assets/front/assets/js/TweenMax.min.js')}}"></script>
<script src="{{asset('assets/front/assets/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/front/assets/js/jquery.polyglot.language.switcher.js')}}"></script>
<script src="{{asset('assets/front/assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/front/assets/js/parallax-scroll.js')}}"></script>
<script src="{{asset('assets/front/assets/js/pagenav.js')}}"></script>

<script src="{{asset('assets/front/assets/js/script.js')}}"></script>


</body>
</html>













