@extends('layout.front_layout.master')
@section('content')
 <!-- Bnner Section -->
    <section class="banner-section">
        <div class="left-panel">
            <div class="side-menu-nav sidemenu-nav-toggler"><span class="flaticon-interface"></span>More</div>
            <div class="option-box">
                <div class="icon"><span class="flaticon-tracking"></span></div>
                <h4>Track <br> Shipment</h4>
                <div class="order-form-area">
                    <div class="wrapper-box">
                        <h4>Track Your Shipment</h4>
                        <form class="order-form">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Shipment Number *">
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" name="make">
                                    <option value="*">Type of Reference *</option>
                                    <option value=".category-1">Package</option>
                                    <option value=".category-3">Freight</option>
                                    <option value=".category-4">Mail of Innovations</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Track Now</span></button>
                            </div>
                        </form>
                    </div>                        
                </div>
            </div>
            <div class="option-box">
                <a href="pricing-plan.html">
                    <div class="icon"><span class="flaticon-logistics"></span></div>
                    <h4>Pricing <br> Plan</h4>
                </a>
            </div>
            <div class="option-box">
                <a href="grequest-quote.html">
                    <div class="icon"><span class="flaticon-test"></span></div>
                    <h4>Get A <br>Quote</h4>
                </a>
            </div>
        </div>
        <div class="background-text">
            <div data-parallax='{"x": 100}'>
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>                
        </div>
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                @foreach($sliders as  $slider)
                <div class="swiper-slide" style="background-image: url({{asset('images/backend_images/sliders/'.$slider->image)}})">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h4>Competitve rates </h4>
                                <h1>safety & reliable on-time</h1>
                                <div class="text">We denounce with righteous indignation & dislike beguiled</div>
                                <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
              <!-- Slide Item -->
               
        </div>
        <div class="banner-slider-nav style-two">
            <div class="banner-slider-control banner-slider-button-prev"><span><i class="far fa-angle-left"></i>Prev</span></div>
            <div class="banner-slider-control banner-slider-button-next"><span>Next<i class="far fa-angle-right"></i></span> </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Our Services</div>
                <h2>Moving Your Products Across <br> All Borders</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 service-block-one">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <h4>Air Freight</h4>
                        <div class="text">How all this mistaken idea of denouncing <br>pleasure and praising ...</div>
                        <div class="read-more-btn"><a href="air-freight.html" class="link"><i class="flaticon-up-arrow"></i>Read More</a></div>
                        <div class="count"><span>01</span></div>
                        <div class="image" data-parallax='{"y": 30}'><img src="{{asset('assets/front/assets/images/resource/image-1.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-4 service-block-one">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <h4>Ocean Freight</h4>
                        <div class="text">To take a trivial example which of us ever undertakes laborious physical ...</div>
                        <div class="read-more-btn"><a href="ocean-freight.html" class="link"><i class="flaticon-up-arrow"></i>Read More</a></div>
                        <div class="count"><span>02</span></div>
                        <div class="image" data-parallax='{"y": 30}'><img src="{{asset('assets/front/assets/images/resource/image-2.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-4 service-block-one">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <h4>Road Freight</h4>
                        <div class="text">Right to find fault with man who chooses to enjoy a pleasure that annoying ...</div>
                        <div class="read-more-btn"><a href="road-freight.html" class="link"><i class="flaticon-up-arrow"></i>Read More</a></div>
                        <div class="count"><span>03</span></div>
                        <div class="image" data-parallax='{"y": 30}'><img src="{{asset('assets/front/assets/images/resource/image-3.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about" style="background-image: url({{asset('assets/front/assets/images/background/bg-1.jpg')}}">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title">Company</div>
                        <h2>Provide a <br> Reliable Services <br> Since 1942</h2>
                        <div class="text">Denounce with righteous indignation and dislike men who are  beguiled <br> and demoralized by the charms of pleasure of the moment so blinded by <br> desire, that they cannot foresee the pain and trouble.</div>
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                                <div class="icon"><span class="flaticon-package"></span></div>
                                <div class="content">
                                    <a href="about.html"><h4>About <br>Our Company</h4></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                                <div class="icon"><span class="flaticon-goal"></span></div>
                                <div class="content">
                                    <a href="about.html"><h4>Statement of <br> Mission</h4></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1700ms">
                                <div class="icon"><span class="flaticon-binoculars"></span></div>
                                <div class="content">
                                    <a href="about.html"><h4>Statement of <br> Vision</h4></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1900ms">
                                <div class="icon"><span class="flaticon-gold"></span></div>
                                <div class="content">
                                    <a href="about.html"><h4>Statement of <br> Value</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image wow fadeInRight" data-wow-duration="1500ms"><img src="{{asset('assets/front/assets/images/resource/image-1.jpg')}}" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Whychooseus Section -->
    <section class="Whychooseus-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title text-center">Why Choose Us</div>
                <h2>We Aim to Contribute Well to <br>  Your Company</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">01</span><i class="flaticon-shield"></i></div>
                        <div class="content">
                            <h4>Trasparent Pricing</h4>
                            <div class="text">Indignation and dislike men who are so beguiled all <br> moralized by the charms.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">02</span><i class="flaticon-delivery"></i></div>
                        <div class="content">
                            <h4>On - Time Delivery</h4>
                            <div class="text">Foresee the pain and trouble that are bound ensue <br> and equal blame belongs to fail duty.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">03</span><i class="flaticon-24-hours"></i></div>
                        <div class="content">
                            <h4>Real Time Tracking</h4>
                            <div class="text">These cases are perfectly simple easy distinguish <br> in a free hour of choice when our power.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">04</span><i class="flaticon-24-hours"></i></div>
                        <div class="content">
                            <h4>24/7 Online Support</h4>
                            <div class="text">Indignation and dislike men who are so beguiled all <br> moralized by the charms.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work-process Section -->
    <section class="work-process-section" id="work">
        <div class="bg" style="background-image: url({{asset('assets/front/assets/images/background/bg-2.jpg')}}"></div>
        <div class="auto-container">
            <div class="sec-title text-center light">
                <div class="sub-title text-center">How We Work</div>
                <h2>We Aim to Contribute Well to <br> Your Company</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="count">01</div>
                        <div class="icon"><span class="flaticon-shipping"></span></div>
                        <h4>Replenishment <br> & Picking</h4>
                        <div class="text">Dolores quas molestias <br>  excepturi occaecati cupiditated <br> non provident.</div>
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInDwon" data-wow-duration="1500ms">
                        <div class="count">02</div>
                        <div class="icon"><span class="flaticon-warehouse"></span></div>
                        <h4>Warehousing <br> Operation</h4>
                        <div class="text">It will frequently occur
                            that pleasures have to repudiated
                            annoyances accepted.</div>
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="count">03</div>
                        <div class="icon"><span class="flaticon-packing-list"></span></div>
                        <h4>Packaging <br> & Distribution</h4>
                        <div class="text">Ever undertakes laborious
                            physical exercise excepts obtain
                            some advantage right.</div>
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <div class="count">04</div>
                        <div class="icon"><span class="flaticon-delivery-1"></span></div>
                        <h4>Transportation <br> Process</h4>
                        <div class="text">Nothing prevents our
                            being able to do what like work
                            best every pleasure </div>
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                    </div>
                </div>
            </div>
            <div class="bottom-text">Simplifying Your Freight & Logistics Needs With a Personal Approach. <a href="contact.html"> Get In Touch</a></div>
        </div>
    </section>

    <!-- Industries Covered -->
    <section class="industries-covered" style="background-image: url({{asset('assets/front/assets/images/background/bg-3.jpg')}}">
        <div class="background-text" data-parallax='{"x": 100}'>industries</div>
        <div class="outer-box side-container">
            <div class="outer-container">
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "center": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                    <div class="text-block">
                        <div class="inner-box">
                            <div class="image" style="background-image: url({{asset('assets/front/assets/images/resource/image-2.jpg')}})">
                            </div>
                            <div class="content">
                                <div class="icon"><span class="flaticon-spaceship"></span></div>
                                <h4>Industrial and <br> Aerospace</h4>
                                <div class="text">The wise man therefore always holds in <br> these matters to this principle. </div>
                                <div class="link">
                                    <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-block">
                        <div class="inner-box">
                            <div class="image" style="background-image: url({{asset('assets/front/assets/images/resource/image-4.jpg')}}}">
                            </div>
                            <div class="content">
                                <div class="icon"><span class="flaticon-spaceship"></span></div>
                                <h4>Construction <br> Companies</h4>
                                <div class="text">The wise man therefore always holds in <br> these matters to this principle. </div>
                                <div class="link">
                                    <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-block">
                        <div class="inner-box">
                            <div class="image" style="background-image: url({{asset('assets/front/assets/images/resource/image-5.jpg')}})">
                            </div> <div class="image">
                                <img src="{{asset('assets/front/assets/images/resource/image-5.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <div class="icon"><span class="flaticon-box-1"></span></div>
                                <h4>Vehicle <br> Manufacturing</h4>
                                <div class="text">The wise man therefore always holds in <br> these matters to this principle. </div>
                                <div class="link">
                                    <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title text-center">Pricing & Plans</div>
                <h2>Our Effective and Affordable <br> Pricing Plans</h2>
            </div>
            <div class="row m-0">
                <div class="col-lg-4 col-md-6 pricing-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="category-wrapper"><div class="category">Basic Plan</div></div>
                        <div class="price">$89.99</div>
                        <div class="time">Per Month</div>
                        <ul class="content">
                            <li>1 Warehouse </li>
                            <li>Custom Business Rules</li>
                            <li>Real Time Rate Shopping</li>
                            <li>100% Insurance</li>
                            <li>50 Freight Shipments</li>
                        </ul>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pricing-block style-two">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" style="background-image: url(assets/images/resource/image-3.jpg);">
                        <div class="category-wrapper"><div class="category">Standard Plan</div></div>
                        <div class="price">$129.99</div>
                        <div class="time">Per Month</div>
                        <ul class="content">
                            <li>1 Warehouse </li>
                            <li>Custom Business Rules</li>
                            <li>Real Time Rate Shopping</li>
                            <li>100% Insurance</li>
                            <li>50 Freight Shipments</li>
                        </ul>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pricing-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="category-wrapper"><div class="category">Advanced Plan</div></div>
                        <div class="price">$149.99</div>
                        <div class="time">Per Month</div>
                        <ul class="content">
                            <li>1 Warehouse </li>
                            <li>Custom Business Rules</li>
                            <li>Real Time Rate Shopping</li>
                            <li>100% Insurance</li>
                            <li>50 Freight Shipments</li>
                        </ul>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facts Section -->
    <section class="facts-section">
        <div class="auto-container">
            <div class="wrapper-box" style="background-image: url({{asset('assets/front/assets/images/background/bg-4.jpg')}});">
                <div class="shape">
                    <div class="shape-one"><img src="{{asset('assets/front/assets/images/resource/image-4.png')}}" alt=""></div>
                    <div class="shape-two"><img src="{{asset('assets/front/assets/images/resource/image-5.png')}}" alt=""></div>
                    <div class="shape-three"><img src="{{asset('assets/front/assets/images/resource/image-6.png')}}" alt=""></div>
                    <div class="shape-four"><img src="{{asset('assets/front/assets/images/resource/image-7.png')}}" alt=""></div>
                    <div class="shape-five"><img src="{{asset('assets/front/assets/images/resource/image-8.png')}}" alt=""></div>
                </div>
                <div class="sec-title text-center light">
                    <div class="sub-title text-center">Interesting Facts</div>
                    <h2>The Numbers Speak for <br> themselves</h2>
                </div>
                <div class="outer-box">
                    <div class="row">
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="{{asset('assets/front/assets/images/icons/icon-3.png')}}" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="6500">0</span>
                                    </div>
                                    <div class="text">Parcel Delivered</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="{{asset('assets/front/assets/images/icons/icon-4.png')}}" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="254">0</span>
                                    </div>
                                    <div class="text">Expert Employee</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="{{asset('assets/front/assets/images/icons/icon-5.png')}}" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="2495">0</span>
                                    </div>
                                    <div class="text">Satisfied Clients</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="{{asset('assets/front/assets/images/icons/icon-3.png')}}" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="145">0</span>
                                    </div>
                                    <div class="text">Branches Across</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="{{asset('assets/front/assets/images/icons/icon-3.png')}}" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="3879">0</span>
                                    </div>
                                    <div class="text">Tons of Goods</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>            
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" id="testimonial">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title text-center">Testimonials</div>
                <h2>1000+ Happy Customers Said</h2>
            </div>
            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text">I am highly impressed with
                            the professionalism and passion
                            of people in this warehouse
                            very neat & clean.
                        </div>
                        <div class="author-thumb">
                            <img src="{{asset('assets/front/assets/images/resource/author-1.jpg')}}" alt="">
                            <div class="quote"><span class="flaticon-right-quote"></span>
                            </div>
                        </div>
                        <h4>Nathan Felix</h4>
                        <div class="designation">CEO, High Rise Construction</div>
                        <div class="rating">
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text">The staff is amazing! 
                            Very helpful and considerate
                            with a sense of urgency &Loads
                            are 99% on time.
                        </div>
                        <div class="author-thumb">
                            <img src="{{asset('assets/front/assets/images/resource/author-2.jpg')}}" alt="">
                            <div class="quote"><span class="flaticon-right-quote"></span>
                            </div>
                        </div>
                        <h4>Lillian Grace</h4>
                        <div class="designation">VP, Green Valley Intenationl</div>
                        <div class="rating">
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text">I only use Transida Logistics
                            for my shipping needs. My clients
                            have all come to expect the
                            excellent shipping.
                        </div>
                        <div class="author-thumb">
                            <img src="{{asset('assets/front/assets/images/resource/author-3.jpg')}}" alt="">
                            <div class="quote"><span class="flaticon-right-quote"></span>
                            </div>
                        </div>
                        <h4>Roman Dexter</h4>
                        <div class="designation">Business Man, Newyork, USA</div>
                        <div class="rating">
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                        </div>
                    </div>
                </div>
                <!-- End -->
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section" id="blog">
        <div class="auto-container">
            <div class="sec-top row m-0 justify-content-md-between align-items-center">
                <div class="sec-title">
                    <div class="sub-title">News & Updates</div>
                    <h2>Latest From Our Blog Post</h2>
                </div>
                <div class="link">
                    <a href="blog.html" class="readmore-link"><i class="flaticon-up-arrow"></i>Read All News</a>
                </div>
            </div>
            <div class="row">
                <div class="news-block-one col-lg-4">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-details.html"><img src="{{asset('assets/front/assets/images/resource/news-1.jpg')}}" alt=""></a>
                            <div class="date">25 <br> Jun</div>
                        </div>
                        <div class="lower-content">
                            <div class="category"><i class="fas fa-folder"></i> Freight Management</div>
                            <h3><a href="blog-details.html">Trends in Freight Transportation <br>  & the COVID-19 Impact</a></h3>
                            <div class="text">Enjoy pleasures that has annoying consequences <br>  or one who avoids a pain ...</div>
                            <div class="link">
                                <a href="blog-details.html" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="image">
                                <a href="blog-details.html"><img src="{{asset('assets/front/assets/images/resource/news-1-2.jpg')}}" alt=""></a>
                                <div class="date">25 <br> Jun</div>
                            </div>
                            <div class="lower-content">
                                <div class="category"><i class="fas fa-folder"></i> Freight Management</div>
                                <h3><a href="blog-details.html">Trends in Freight Transportation <br>  & the COVID-19 Impact</a></h3>
                                <div class="link">
                                    <a href="blog-details.html" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-block-one col-lg-4">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-details.html"><img src="{{asset('assets/front/assets/images/resource/news-2.jpg')}}" alt=""></a>
                            <div class="date">14 <br> May</div>
                        </div>
                        <div class="lower-content">
                            <div class="category"><i class="fas fa-folder"></i> Industry News</div>
                            <h3><a href="blog-details.html">Named a Finalist For Year 2019 <br> Best Choice Award</a></h3>
                            <div class="text">Enjoy pleasures that has annoying consequences <br>  or one who avoids a pain ...</div>
                            <div class="link">
                                <a href="blog-details.html" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="image">
                                <a href="blog-details.html"><img src="{{asset('assets/front/assets/images/resource/news-2-2.jpg')}}" alt=""></a>
                                <div class="date">14 <br> May</div>
                            </div>
                            <div class="lower-content">
                                <div class="category"><i class="fas fa-folder"></i> Industry News</div>
                                <h3><a href="blog-details.html">Named a Finalist For Year 2019 <br> Best Choice Award</a></h3>
                                <div class="link">
                                    <a href="blog-details.html" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-block-one col-lg-4">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-details.html"><img src="{{asset('assets/front/assets/images/resource/news-3.jpg')}}" alt=""></a>
                            <div class="date">05 <br> May</div>
                        </div>
                        <div class="lower-content">
                            <div class="category"><i class="fas fa-folder"></i> Warehousing</div>
                            <h3><a href="blog-details.html">Conditions for Applying C / O for <br> Transited Goods</a></h3>
                            <div class="text">Enjoy pleasures that has annoying consequences <br>  or one who avoids a pain ...</div>
                            <div class="link">
                                <a href="blog-details.html" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="image">
                                <a href="blog-details.html"><img src="{{asset('assets/front/assets/images/resource/news-3-2.jpg')}}" alt=""></a>
                                <div class="date">05 <br> May</div>
                            </div>
                            <div class="lower-content">
                                <div class="category"><i class="fas fa-folder"></i> Warehousing</div>
                                <h3><a href="blog-details.html">Conditions for Applying C / O for <br> Transited Goods</a></h3>
                                <div class="link">
                                    <a href="blog-details.html" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section" id="contact">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55945.16225505631!2d-73.90847969206546!3d40.66490264739892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1601263396347!5m2!1sen!2sbd" width="600" height="490" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section> 

    <!-- Branches Section -->
    <section class="branches-section">
        <div class="auto-container">
            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "4" }}}'>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Hoxton - HO</h4>
                    <div class="text"> Boat House, 152/21 City Road,
                    Hoxton, N1 6NG, UK.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Melbourne</h4>
                    <div class="text"> 46 Yarra Boulevard, 2nd Cross,
                        Victoria 3010, AUS.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Houston</h4>
                    <div class="text"> 3333 Raleigh Street, Houston,
                        TX 77021, USA.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>New Delhi</h4>
                    <div class="text">11/8, Shantipath, Chanakyapuri,
                        New Delhi 110049, IND.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Hoxton - HO</h4>
                    <div class="text"> Boat House, 152/21 City Road,
                    Hoxton, N1 6NG, UK.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Melbourne</h4>
                    <div class="text"> 46 Yarra Boulevard, 2nd Cross,
                        Victoria 3010, AUS.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Houston</h4>
                    <div class="text"> 3333 Raleigh Street, Houston,
                        TX 77021, USA.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>New Delhi</h4>
                    <div class="text">11/8, Shantipath, Chanakyapuri,
                        New Delhi 110049, IND.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
            </div>
        </div>        
    </section>

    <section class="newsletter-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-5">
                    <h3><span class="flaticon-email"></span> Subscribe Our Newsletter <br> & Get Updates.</h3>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form">
                        <form class="ajax-sub-form" method="post">
                            <div class="form-group">
                                <i class="far fa-envelope-open"></i>
                                <input type="email" placeholder="Enter Your Email Address..." id="subscription-email">
                                <button type="submit" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Subscribe</span></button>
                                <label class="subscription-label" for="subscription-email"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </section>
@endsection