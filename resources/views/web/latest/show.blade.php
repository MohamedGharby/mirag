@extends('web.pages-layout')
@section('title')
    أخبارنا
@endsection


@section('lowerHeader')
    <li><a href="{{ url('/contact') }}">تواصل معنا</a></li>

    <li><a href="{{ url('/team') }}">فريقنا</a></li>

    <li><a href="{{ url('/investments') }}">الإستثمار العقارى</a></li>

    <li class="current"><a href="{{url('/latests')}}">أخبارنا</a></li>

    <li><a href="{{url('/projects')}}">المشاريع</a></li>

    <li><a href="{{url('/about')}}">من نحن</a></li>

    <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
@endsection

@section('stickyHeader')
    <li><a href="{{ url('/contact') }}">تواصل معنا</a></li>

    <li><a href="{{ url('/team') }}">فريقنا</a></li>

    <li><a href="{{ url('/investments') }}">الإستثمار العقارى</a></li>

    <li class="current"><a href="{{url('/latests')}}">أخبارنا</a></li>

    <li><a href="{{url('/projects')}}">المشاريع</a></li>

    <li><a href="{{url('/about')}}">من نحن</a></li>

    <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
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