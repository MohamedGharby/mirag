@extends("web.layout")
@section("title")
تواصل معنا
@endsection
@section("header")
<!-- Main Header-->
<header class="main-header header-style-one">

    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="clearfix">
                <!--Top Left-->
                <div class="top-left clearfix">
                    <ul class="links clearfix">
                        <li><a href="#"><span class="icon fa fa-map-marker"></span>185, Los Angeles, USA</a></li>
                        <li><a href="#"><span class="icon fa fa-envelope"></span>info@emarat.com</a></li>
                    </ul>
                </div>

                <!--Top Right-->
                <div class="top-right pull-right">
                    <div class="text">Welcome to Emarat Construction Template</div>
                </div>
            </div>
        </div>
    </div>

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-box">
                    <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                </div>

                <div class="pull-right upper-right clearfix">

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-clock-2"></span></div>
                        <ul>
                            <li><strong>09:00 am - 06:00 pm</strong></li>
                            <li>We Serve with Pleasure</li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                        <ul>
                            <li><strong>(01) 98 756 321 01</strong></li>
                            <li>Discuss any Queries</li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <ul class="social-nav">
                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Header Lower-->
    <div class="header-lower">

        <div class="auto-container">
            <div class="nav-outer clearfix">

                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="current"><a href="{{ url('contact') }}">تواصل معنا</a></li>

                            <li><a href="#">الإستثمار العقارى</a></li>

                            <li><a href="{{url('/latests')}}">أخبارنا</a></li>

                            <li><a href="{{ url('/projects')}}">المشاريع</a></li>

                            <li>
                                <a href="{{url('/about')}}">من نحن</a>
                            </li>

                            <li>
                                <a href="{{ url('/') }}">الصفحة الرئيسية</a>
                            </li>

                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->

                <div class="outer-box clearfix">

                    <!--Search Box-->
                    <div class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                <li class="panel-outer">
                                    <div class="form-container">
                                        <form method="post" action="blog.html">
                                            <div class="form-group">
                                                <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="advisor-box">
                        <a href="index.html" class="theme-btn advisor-btn">Get A Quote</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Header Lower-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu  navbar-expand-md">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">
                            <li class="current"><a href="{{ url('/contact') }}">تواصل معنا</a></li>

                            <li><a href="#">الإستثمار العقارى</a></li>

                            <li><a href="{{url('/latests')}}">أخبارنا</a>

                            </li>

                            <li><a href="{{ url('/projects')}}">المشاريع</a>

                            </li>

                            <li><a href="{{url('/about')}}">من نحن</a>
                            </li>

                            <li><a href="{{ url('/') }}">الصفحة الرئيسية</a>
                            </li>

                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

</header>
<!--End Main Header -->
@endsection

@section("main")

	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/13.jpg)">
    	<div class="auto-container">
        	<h1>Contact Us</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">HOME</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Contact Form Section-->
    <section class="contact-form-section">
    	<div class="auto-container">
        	<!--Title Box-->
        	<div class="title-box">
            	<div class="title">Write a Message</div>
                <h2>Have Any Questions?</h2>
                <div class="text">Thank you very much for your interest in our company and our services and if you have any questions, please write us a message now!</div>
            </div>

            <!--Contact Form-->
            <div class="contact-form">
                <form method="post" action="sendemail.php" id="contact-form">
                    <div class="row clearfix">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="firstname" value="" placeholder="Your name" required>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <input type="email" name="email" value="" placeholder="Your Email" required>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <textarea name="message" placeholder="Your Massage"></textarea>
                        </div>

                        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="theme-btn message-btn">Send Massage</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--End Contact Form-->

        </div>
    </section>
    <!--End Contact Form Section-->

	<!--Contact Page Info Section-->
    <div class="contact-page-info-section">

    	<div class="auto-container">
        	<div class="row clearfix">

            	<!--Info Column-->
            	<div class="info-column col-lg-6 col-md-12 col-sm-12">
                	<div class="inner-column">
                    	<div class="sec-title">
                        	<div class="title">Contact us</div>
                            <h2>Get in Touch</h2>
                        </div>
                        <div class="text">Thewebmax ipsum amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore agna aliquam erat. ipsum dolor sit amet, consectetuer adipiscing. ipsum dolor sit .</div>
                        <ul class="list-style-two">
                            <li><span class="icon fa fa-phone"></span>Call us 1-800-555-1234</li>
                            <li><span class="icon fa fa-envelope"></span>info@emarat.com</li>
                            <li><span class="icon fa fa-map-marker"></span>Open Hours 09:00 am - 06:00 pm</li>
                            <li><span class="icon fa fa-clock-o"></span>185, Pickton Near Street, Los  Angeles, USA</li>
                        </ul>
                        <ul class="social-icon-two">
                            <li class="follow">Follow on: </li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                        </ul>
                    </div>
                </div>

                <!--Map Column-->
            	<div class="map-column col-lg-6 col-md-12 col-sm-12">
                	<div class="inner-column">

                        <!--Map Outer-->
                        <div class="map-outer">
                            <!--Map Canvas-->
                            <div class="map-canvas"
                                data-zoom="12"
                                data-lat="-37.817085"
                                data-lng="144.955631"
                                data-type="roadmap"
                                data-hue="#ffc400"
                                data-title="Envato"
                                data-icon-path="images/icons/map-marker.png"
                                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
	</div>  


@endsection