@extends('web.pages-layout')
@section('title')
    فريقنا
@endsection


@section('lowerHeader')
    <li><a href="{{ url('/contact') }}">تواصل معنا</a></li>

    <li class="current"><a href="{{ url('/team') }}">فريقنا</a></li>

    <li><a href="{{url('/investments')}}">الإستثمار العقارى</a></li>

    <li><a href="{{url('/latests')}}">أخبارنا</a></li>

    <li><a href="{{url('/projects')}}">المشاريع</a></li>

    <li><a href="{{url('/about')}}">من نحن</a></li>

    <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
@endsection

@section('stickyHeader')
    <li><a href="{{ url('/contact') }}">تواصل معنا</a></li>

    <li class="current"><a href="{{ url('/team') }}">فريقنا</a></li>

    <li><a href="{{url('/investments')}}">الإستثمار العقارى</a></li>

    <li><a href="{{url('/latests')}}">أخبارنا</a></li>

    <li><a href="{{url('/projects')}}">المشاريع</a></li>

    <li><a href="{{url('/about')}}">من نحن</a></li>

    <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
@endsection

@section('main')
    	<!--Page Title-->
        <section class="page-title" style="background-image:url(web/images/background/13.jpg)">
            <div class="auto-container">
                <h1>فريقنا</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ url("/") }}">الرئيسية</a></li>
                    <li>فريقنا</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

            <!--Team Section-->
    <section class="team-section">
    	<div class="auto-container">

        	<!--Sec Title-->
        	<div class="sec-title centered">
            	<div class="title">فريقنا</div>
                <h2>أفضل خبرائنا</h2>
                <div class="seperater"></div>
            </div>

            <div class="row clearfix">
                @foreach ($experts as $expert)

                <!--Team Block-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box">
                        @foreach ($expert->socialMedia as $social)

                    	<ul class="social-icon-one">
                        	<li><a href="{{ $social->facebook }}"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="{{ $social->twitter }}"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="{{ $social->instagram }}"><span class="fa fa-instagram"></span></a></li>
                            <li><a href="{{ $social->linkedin }}"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                        @endforeach
                    	<div class="image">
                        	<img src="{{ asset("uploads/experts/$expert->img") }}" alt="{{ $expert->name }}" />
                        </div>
                        <div class="lower-box">
                        	<h3>{{ $expert->name }}</h3>
                            <div class="designation">{{ $expert->title }}</div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>

        </div>
    </section>
    <!--End Team Section-->
@endsection
