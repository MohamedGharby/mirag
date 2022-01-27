@extends('web.pages-layout')
@section('title')
مشاريع
@endsection

@section('lowerHeader')
    <li><a href="{{ url('/contact') }}">تواصل معنا</a></li>

    <li><a href="{{ url('/team') }}">فريقنا</a></li>

    <li><a href="{{ url('/investments') }}">الإستثمار العقارى</a></li>

    <li><a href="{{url('/latests')}}">أخبارنا</a></li>

    <li class="current"><a href="{{ url('/projects')}}">المشاريع</a></li>

    <li><a href="{{url('/about')}}">من نحن</a></li>

    <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
@endsection

@section('stickyHeader')
    <li><a href="{{ url('/contact') }}">تواصل معنا</a></li>

    <li><a href="{{ url('/team') }}">فريقنا</a></li>

    <li><a href="{{ url('/investments') }}">الإستثمار العقارى</a></li>

    <li><a href="{{url('/latests')}}">أخبارنا</a></li>

    <li class="current"><a href="{{ url('/projects')}}">المشاريع</a></li>

    <li><a href="{{url('/about')}}">من نحن</a></li>

    <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
@endsection



@section('main')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(web/images/background/13.jpg)">
    	<div class="auto-container">
        	<h1>المشاريع</h1>
            <ul class="page-breadcrumb">
            	<li><a href="{{ url("/") }}">الرئيسية</a></li>
                <li>المشاريع</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Project Page Section-->
    <section class="project-page-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<div class="title">أخر اعمالنا</div>
                <h2>المشاريع</h2>
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
                                               @if (strlen($project->desc) > 100)
                                                   @php
                                                     $project->desc = substr($project->desc , 0 , 100);
                                                     @endphp
											       <div class="text">{{$project->desc}}</div>
                                                @else
                                                   <div class="text">{{$project->desc}}</div>
                                                   
                                                @endif      
											<a href="{{ url("/projects/$project->id") }}" class="see-more">See Project <span class="fa fa-angle-right"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                    @endforeach

                <!--Pagintaot-->
                {{ $projects->links('web.inc.paginate') }}

            </div>
        </div>
    </section>
    <!--End Project Page Section-->
@endsection