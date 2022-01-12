@extends('web.layout')
@section('title')
مشاريع
@endsection

@section('header')

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
                            <li><a href="{{ url('/contact') }}">تواصل معنا</a></li>

                            <li><a href="#">أخبار</a>

                            </li>

                            <li><a href="{{ url('/projects')}}">المشاريع</a>

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

                            <li><a href="{{ url('/projects') }}">المشاريع</a>

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

@section('main')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/13.jpg)">
    	<div class="auto-container">
        	<h1>Projects</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">HOME</a></li>
                <li>Projects</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Project Page Section-->
    <section class="project-page-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<div class="title">Our Best Work</div>
                <h2>Latest Projects</h2>
                <div class="seperater"></div>
            </div>
        	<!--MixitUp Galery-->
            <div class="mixitup-gallery">

                <!--Filter-->
                <div class="filters text-center clearfix">
                    
                </div>
              
                <div class="filter-list row clearfix">

                    <!--Project Block-->
                    @foreach ($projects as $project)
                    
                    <div class="project-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="{{ asset("uploads/$project->img") }}" alt="project image" />
								<div class="overlay-box">
									<div class="content">
										<h3>{{$project->title}}</h3>
										<div class="see-project">See Project <span class="fa fa-angle-right"></span></div>
									</div>
								</div>
								<!--Overlay Two-->
								<div class="overlay-two">
									<div class="overlay-two-inner">
										<div class="overlay-two-content">
											<h2>   
                                                       <a href="{{ url("/projects/$project->id") }}">{{$project->title}}</a></h2>
											<div class="text">{{$project->desc}}</div>
											<a href="#" class="see-more">See Project <span class="fa fa-angle-right"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                    @endforeach

                <!--Btn Box-->
                <div class="btn-box text-center">
                    <a href="projects-single.html" class="theme-btn btn-style-three">More Project</a>
                </div>

            </div>
        </div>
    </section>
    <!--End Project Page Section-->
@endsection