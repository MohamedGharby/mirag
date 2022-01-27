@extends("web.pages-layout")

@section('title')
  مشروع
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
        	<h1>{{ $project->title }}</h1>
            <ul class="page-breadcrumb">
            	<li><a href="{{ url("/") }}">الرئيسية</a></li>
                <li>{{ $project->title }}</li>
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
                            	<li>{{$project->client}}<span>العميل </span></li>
                                <li>{{$project->location}}<span>الموقع</span></li>
                                <li>{{$project->surface_area}}<span>مساحة المشروع</span></li>
                                <li>{{$project->year}}<span>سنة الإنتهاء</span></li>
                               
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