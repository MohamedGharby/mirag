@extends('web.layout')

@section('title')
    أخبارنا
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

                                    <li><a href="{{ url('/team') }}">فريقنا</a></li>

                                    <li><a href="{{ url('/investments') }}">الإستثمار العقارى</a></li>
    
                                    <li class="current"><a href="{{url('/latests')}}">أخبارنا</a></li>
    
                                    <li><a href="{{url('/projects')}}">المشاريع</a></li>
    
                                    <li><a href="{{url('/about')}}">من نحن</a></li>
    
                                    <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
    
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

                                    <li><a href="{{ url('/team') }}">فريقنا</a></li>

                                    <li><a href="{{ url('/investments') }}">الإستثمار العقارى</a></li>
    
                                    <li class="current"><a href="{{url('/latests')}}">أخبارنا</a></li>
    
                                    <li><a href="{{url('/projects')}}">المشاريع</a></li>
    
                                    <li><a href="{{url('/about')}}">من نحن</a></li>
    
                                    <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
    
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
        <section class="page-title" style="background-image:url(web/images/background/14.jpg)">
            <div class="auto-container">
                <h1>Latest News</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ url('/') }}">الرئيسية</a></li>
                    <li>أخبارنا</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->


            <!--Blog Page Section-->
    <section class="blog-page-section">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--News Block-->
            @foreach ($latests as $latest)
                
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{ url("latests/$latest->id") }}"><img src="{{ asset("uploads/$latest->main_img") }}" alt="" /></a>
                            <div class="post-date"><span>{{ $latest->created_at->format('d') }}</span> {{ $latest->created_at->format('M') }}</div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{ url("latests/$latest->id") }}">{{ Str::limit($latest->title , 50 , '.') }}</a></h3>

                            <div class="text">{{ Str::limit($latest->desc , 150 , '...') }}</div>
                        </div>
                    </div>
                </div>
            @endforeach    

            </div>

            <!--Pagination-->
            {{ $latests->links('web.inc.paginate') }}

        </div>
    </section>
    <!--End Blog Page Section-->
@endsection