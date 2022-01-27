@extends('web.pages-layout')
@section('title')
    الإستثمار العقارى
@endsection


@section('lowerHeader')
    <li><a href="{{ url('/contact') }}">تواصل معنا</a></li>

    <li><a href="{{ url('/team') }}">فريقنا</a></li>

    <li class="current"><a href="{{ url('investments') }}">الإستثمار العقارى</a></li>

    <li><a href="{{url('/latests')}}">أخبارنا</a></li>

    <li><a href="{{url('/projects')}}">المشاريع</a></li>

    <li><a href="{{url('/about')}}">من نحن</a></li>

    <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
@endsection

@section('stickyHeader')
    <li><a href="{{ url('/contact') }}">تواصل معنا</a></li>

    <li><a href="{{ url('/team') }}">فريقنا</a></li>

    <li class="current"><a href="{{ url('investments') }}">الإستثمار العقارى</a></li>

    <li><a href="{{url('/latests')}}">أخبارنا</a></li>

    <li><a href="{{url('/projects')}}">المشاريع</a></li>

    <li><a href="{{url('/about')}}">من نحن</a></li>

    <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
@endsection

@section('main')
        	<!--Page Title-->
            <section class="page-title" style="background-image:url(web/images/background/14.jpg)">
                <div class="auto-container">
                    <h1> الإستثمار العقارى</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ url('/') }}">الرئيسية</a></li>
                        <li> الإستثمار العقارى</li>
                    </ul>
                </div>
            </section>
            <!--End Page Title-->

    <!--Realstate Investment Section-->
    @foreach ($companies as $company)
    
    <section class="services-section-two">
    	<div class="auto-container">
        	<div class="p-3 d-flex justify-content-end align-items-center">
                <h2 class="text-warning">{{ $company->name }}</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme">
                @foreach ($company->investments as $invest)
                    
                <!--Services Block Two-->
                <div class="services-block-two">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset("web/images/resource/service-2.jpg") }}" alt="" />
                            <div class="overlay-box">
                            	<div class="overlay-inner">
                                	<div class="content ">
                                    	<div class="text overflow-hidden">
                                            <p>
                                                {{ $invest->desc }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-box">
                        	<div class="icon-box">
                            	<span class="icon flaticon-sketch"></span>
                            </div>
                            <h3><a href="services-single.html">{{ $invest->project_name }}</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach

			</div>
        </div>
    </section>
    @endforeach
    <!--End Realstate Investment Section-->            
@endsection