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
                            <div class="text">ميراج للمقاولات والإستثمارات العقارية</div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">
    
                        <div class="pull-left logo-box">
                            <div class="logo"><a href="{{ url("/") }}"><img src="{{ asset("web/images/logo.png") }}" alt="" title=""></a></div>
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
        
                                    <li><a href="#">الإستثمار العقارى</a></li>
        
                                    <li class="current"><a href="{{url('/latests')}}">أخبارنا</a></li>
        
                                    <li><a href="{{ url('/projects') }}">المشاريع</a></li>
        
                                    <li><a href="{{url('/about')}}">من نحن</a></li>
        
                                    <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
        
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
    
                        <div class="outer-box clearfix">
    
                        
    
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
                        <a href="{{ url('/') }}" class="img-responsive"><img src="{{ asset("web/images/logo-small.png") }}" alt="" title=""></a>
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
        
                                    <li><a href="#">الإستثمار العقارى</a></li>
        
                                    <li class="current"><a href="{{url('/latests')}}">أخبارنا</a></li>
        
                                    <li><a href="{{ url('/projects') }}">المشاريع</a></li>
        
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
                <h1>{{ $latest->name }}</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ url('/') }}">الرئيسية</a></li>
                    <li>أخبارنا</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-single">
						<div class="inner-box">
                            <div class="image">
                                <img src="{{ asset("web/images/resource/news-15.jpg") }}" alt="" />
                                <div class="post-date"><span>{{ $latest->created_at->format('d') }}</span> {{ $latest->created_at->format('M') }}</div>
                            </div>
                            <div class="title-box">
                            	<h2>{{ Str::limit($latest->title , 50 , '.') }}</h2>
                            </div>
                            <div class="lower-content">
                            	<div class="text">
                                	<p>{{ $latest->desc }}</p>
                                    <p>That is the way we all be came the Brady Bunch these to days are all Happy and Free these days you wanna be where everybody knows your name fish do not fry in the artist kitchen and beans do not burn on the grill took a whole lotta trying just to get up that hill.</p>
                                    <div class="two-column">
                                        <div class="row clearfix">
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <div class="image">
                                                    <img src="{{ asset("web/images/resource/news-16.jpg") }}" alt="" />
                                                </div>
                                            </div>
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <p>That is the way we all be came the Brady Bunch these to days are all Happy and Free these days you wanna be where everybody knows your name fish do not fry in the artist kitchen and beans do not burn on the grill the way we all be came the Brady Bunch these to days took a whole lotta trying just to get up that hill.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p>{{ $latest->desc }}</p>
                                </div>


                            </div>
                        </div>



                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar">

                        
                        

                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                        	<div class="sidebar-title">
                            	<h2>أخبارنا</h2>
                            </div>
                            <div class="widget-content">
                                @foreach ($news as $new)
                                    
                                    <article class="post">
                                        <figure class="post-thumb"><a href="{{ url("latests/$new->id") }}"><img src="{{ asset("web/images/resource/post-thumb-1.jpg") }}" alt=""></a></figure>
                                        <div class="text"><a href="{{ url("latests/$new->id") }}">{{ Str::limit($new->title , 50 , '.') }}</a></div>
                                        <div class="post-info">{{ $new->created_at->format('d M, Y') }}</div>
                                    </article>
                                @endforeach

							</div>
                        </div>

					</aside>
                </div>

            </div>
        </div>
    </div>
      
@endsection