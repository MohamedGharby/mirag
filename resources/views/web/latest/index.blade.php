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
                            @php
                                $image = str_replace('public/', 'storage/', $latest->main_img);
                            @endphp
                            <a href="{{ url("latests/$latest->id") }}"><img src="{{ asset("uploads/$image") }}" alt="" /></a>
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