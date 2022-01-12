@extends("web.layout")

@section('title')
  مشروع
@endsection


@section('header')

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
                            <li><a href="contact.html">تواصل معنا</a></li>

                            <li><a href="#">أخبار</a>

                            </li>

                            <li><a href="#">المشاريع</a>

                            </li>

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
                            <li><a href="{{ url('/contact') }}">تواصل معنا</a></li>

                            <li><a href="#">أخبار</a>

                            </li>

                            <li><a href="#">المشاريع</a>

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

@endsection


@section('main')

<section class="page-title" style="background-image:url(images/background/13.jpg)">
    	<div class="auto-container">
        	<h1>Projects Detail</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">HOME</a></li>
                <li>Projects</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Projects Single Section-->
    <section class="project-single-section">
    	<div class="auto-container">
        	<div class="upper-section">
            	<div class="row clearfix">

                    <!--Image Column-->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    	<div class="image">
                        	<img src="{{ asset("uploads/$project->img") }}" alt="" />
                        </div>
                    </div>

                    <!--Info Column-->
                    <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    	<div class="inner-column">
                        	<h2><span class="theme_color">Project</span> Information</h2>
                            <div class="text">{{$project->title}}</div>
                            <ul class="info-list">
                            	<li><span>Client:</span>{{$project->client}}</li>
                                <li><span>Location:</span>{{$project->location}}</li>
                                <li><span>Surface Area:</span>{{$project->surface_area}}</li>
                                <li><span>Year Completed:</span>{{$project->year}}</li>
                               
                            </ul>
                        </div>
                    </div>

                </div>

                <!--Lower Section-->
                <div class="lower-section">
                    <div class="row clearfix">

                        <!--Content Column-->
                        <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        	<div class="inner-column">
                            	<h2>Project Descripation</h2>
                                <div class="text">
                                    <p>{{$project->desc}}</p>
                                    <h3>Project Challenge</h3>
                                    <div class="row clearfix">
                                    	<div class="column col-lg-6 col-md-6 col-sm-12">
                                        	<ul class="list-style-five">
                                            	<li>Five passengers set sail that day for a three hour</li>
                                                <li>Family that’s the way we all became the brady</li>
                                                <li>The powerless in a world of criminals operate</li>
                                            </ul>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                        	<ul class="list-style-five">
                                            	<li>Till the one day when the lady met this fellow</li>
                                                <li>Champion the cause of the innocent career</li>
                                                <li>Now were up in the big leagues getting’ turn</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h3>What We Did</h3>
                                    <p>Then along come two they got nothin’ but their jeans. Texas tea. Knight Rider: A shadowy flight into the dangerous world of a man who does not exist. The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest.</p>
                                    <h3>RESULT</h3>
                                    <p>That’s just a little bit more than the law will allow. We’re gonna do it. On your mark get set and go now. Got a dream and we just know now we’re gonna make our dream come true. Makin their way the only way they know how. That’s just a little bit more than the law will allow.</p>
                                </div>
                            </div>
                        </div>

                        <!--Contact Column-->
                        <div class="contact-column col-lg-4 col-md-12 col-sm-12">
                        	<div class="inner-column" style="background-image:url(images/background/pattern-1.png)">
                            	<div class="title">Quick Contact</div>
                                <h2>Get Solution</h2>
                                <div class="text">Contact us at the Constration office nearest to you or submit a business inquiry online.</div>
                                <a href="#" class="theme-btn contact-btn">Contact</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Projects Single Section-->

    <!--Subscribe Section-->
    <section class="subscribe-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Form Column-->
            	<div class="title-column col-lg-6 col-md-12 col-sm-12">
                	<h2>Need more information?</h2>
                    <div class="text">Please email us and our support staff will contact you back</div>
                    <div class="icon-box">
                    	<span class="icon flaticon-envelope-1"></span>
                    </div>
                </div>
                <!--Form Column-->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                	<div class="inner-column">
                        <div class="subscribe-form">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Enter your mail" required>
                                    <button type="submit" class="theme-btn">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Subscribe Section-->
@endsection