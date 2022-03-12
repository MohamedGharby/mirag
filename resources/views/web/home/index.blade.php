@extends("web.layout")
@section("title")
الصفحة الرئيسية
@endsection

@section('header')
        <!-- Main Header / Header Style Five-->
        <header class="main-header header-style-five">

            <!--Header-Upper-->

            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="pull-left logo-box">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('logo/logo100.jfif') }}" alt="arked" title="arked"></a>
                            </div>
                        </div>

                        <div class="pull-right upper-right clearfix">

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-clock"></span></div>
                                <ul>
                                    <li><strong> من 9 ص إلى 6 م </strong></li>
                                    <li>نحن نسعد بخدمتك</li>
                                </ul>
                            </div>

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                                <ul>
                                    <li><strong>01110037972</strong></li>
                                    <li>للإستفسارات</li>
                                </ul>
                            </div>

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-placeholder-1"></span></div>
                                <ul>
                                    <li><strong>موقعنا</strong></li>
                                    <li> مكرم عبيد / القاهره </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--End Header Upper-->
            <!--Header Lower-->
            <div class="header-lower ">

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

                                    <li><a href="{{url('/investments')}}">الإستثمار العقارى</a></li>

                                    <li><a href="{{url('/latests')}}">أخبارنا</a></li>

                                    <li><a href="{{ url('/projects') }}">المشاريع</a></li>

                                    <li ><a href="{{url('/about')}}">من نحن</a></li>

                                    <li class="current"><a href="{{url('/')}}">الرئيسية</a></li>
                                </ul>

                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">

                            <ul class="options">
                                <li class="dropdown search-box-outer">
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
                                </li>
                                <li><a href="#"><span class="fa fa-cart-plus"></span></a></li>
                            </ul>

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
                        <a href="{{ url("/") }}" class="img-responsive"><img src="{{ asset("logo/logo170.jpeg") }}" alt="" title=""></a>
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

                                    <li><a href="{{url('/investments')}}">الإستثمار العقارى</a></li>

                                    <li><a href="{{url('/latests')}}">أخبارنا</a></li>

                                    <li><a href="{{ url('/projects') }}">المشاريع</a></li>

                                    <li ><a href="{{url('/about')}}">من نحن</a></li>

                                    <li class="current"><a href="{{url('/')}}">الرئيسية</a></li>
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

@section("main")


    <!--Main Slider-->
    <section class="main-slider">

        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_three_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_three" data-version="5.4.1">
                <ul>

                	<li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('web/images/main-slider/test1.jpg') }}{{-- images/main-slider/image-6.jpg --}}" data-title="Slide Title" data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('web/images/main-slider/test1.jpg') }}{{-- asset('web/images/main-slider/image-6.jpg') --}}">

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['720','720','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['0','-120','-110','-110']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    	<div class="play-btn text-center"><a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-icon"><span class="flaticon-play-button-5"></span></a></div>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['720','720','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['90','-30','10','10']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    	<div class="title text-center">we are Startup Business</div>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['800','850','700','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['170','50','100','100']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    	<h2 class=" text-center"><span class="theme_color">Building World </span>Togather</h2>
                    </div>

                    </li>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('web/images/main-slider/test2.jpg') }}{{-- images/main-slider/image-1.jpg --}}" data-title="Slide Title" data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('web/images/main-slider/test2.jpg') }}{{-- asset('web/images/main-slider/image-1.jpg') --}}">

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['720','720','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['0','-120','-110','-110']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    	<div class="play-btn text-center"><a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-icon"><span class="flaticon-play-button-5"></span></a></div>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['720','720','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['90','-30','10','10']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    	<div class="title text-center">we are Startup Business</div>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['800','850','700','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['170','50','100','100']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    	<h2 class=" text-center"><span class="theme_color">Building World </span>Togather</h2>
                    </div>

                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!--About Section-->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Column-->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="title">من نحن</div>
                            <h2>شركة أركيد للبنيه الاساسية</h2>
                        </div>
                        <div class="bold-text">شركة ميراج للمقاولات تاسست سنه (2009) و اكتسبت الافضلية و التميز بين الشركات و بشهادة البنوك و شركات التمويل المالى
                                و نزاهة التعامل مع الكل و ثقة العملاء ,و لنا العديد من العقود المبرمة بين القطاع الحكومي و الاهلية مع الشركات, و قد تخصصت منذ انطلاقها فى اعمال المقاولات المختلفة . وتتمثل فى:-
                                م/عاطف الشيخ (رئيس مجلس الادارة للشركة )
                                اللواء/ محمد الروبى (نائب رئيس مجلس الادارة)
                                م/ عاطف طه العضو المنتدب للتنفيذ
                                و بخبرتهم الكبيره فى مجال الطرق و الكبارى مع كبرى الشركات</div>

                        <a href="{{ url('/about')}}" class="theme-btn btn-style-one">للمزيد..</a>
                    </div>
                </div>

                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{ asset('web/images/resource/about.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Section-->

    <!--Fun Facts Section-->
    <div class="fact-counter-section" style="background-image:url(web/images/main-slider/test1.jpg);">
        <div class="fact-counter">
            <div class="auto-container">
                <div class="row clearfix">

                </div>
            </div>
        </div>
        <div class="outer-image"><img src="{{asset('web/images/resource/image-1.png')}}" alt="" /></div>
    </div>
    <!--End Fun Facts Section-->

    <!--Services Section-->
    <section class="services-section">
    	<div class="auto-container">
        	<div class="sec-title centered">
            	<div class="title">خدماتنا</div>
                <h2>ماذا نقدم </h2>
                <div class="seperater"></div>
            </div>
            <div class="row clearfix">

                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box" style="background-image:url(images/resource/service-1.jpg)">
                    	<div class="icon-box">
                        	<span class="icon flaticon-sketch"></span>
                        </div>
                        <h3><a href="services-single.html">Property Sketching</a></h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box" style="background-image:url(images/resource/service-1.jpg)">
                    	<div class="icon-box">
                        	<span class="icon flaticon-house-plans"></span>
                        </div>
                        <h3><a href="services-single.html">Interior Designing</a></h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box" style="background-image:url(images/resource/service-1.jpg)">
                    	<div class="icon-box">
                        	<span class="icon flaticon-skyline"></span>
                        </div>
                        <h3><a href="services-single.html">Exterior Design</a></h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box" style="background-image:url(images/resource/service-1.jpg)">
                    	<div class="icon-box">
                        	<span class="icon flaticon-document"></span>
                        </div>
                        <h3><a href="services-single.html">Plan Approvals</a></h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box" style="background-image:url(images/resource/service-1.jpg)">
                    	<div class="icon-box">
                        	<span class="icon flaticon-accounting"></span>
                        </div>
                        <h3><a href="services-single.html">Plan Estimations</a></h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box" style="background-image:url(images/resource/service-1.jpg)">
                    	<div class="icon-box">
                        	<span class="icon flaticon-briefing"></span>
                        </div>
                        <h3><a href="services-single.html">Plan Certification</a></h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Services Section-->

    <!--Project Section-->
    <section class="project-section" style="background-image:url(images/background/3.jpg)">
    	<div class="auto-container">

        	<!--Porfolio Tabs-->
            <div class="project-tab">
                <!--Sec Title-->
                <div class="sec-title light">
                	<div class="clearfix">
                        <div class="pull-right">
                            <div class="title">أفضل مشاريعنا</div>
                            <h2>أفضل مشاريعنا</h2>
                        </div>
                    </div>
                </div>

                <!--Tabs Content-->
                <div class="p-tabs-content">

                    <!--Portfolio Tab / Active Tab-->
                    <div class="p-tab active-tab" id="p-tab-1">
                        <div class="project-carousel owl-theme owl-carousel">

                        	<!--Project Block-->
                            @foreach ($bestProjects as $bestProject)
                        	<div class="project-block">
                            	<div class="inner-box">
                                	<div class="image">
                                        @php
                                        $image = str_replace('public/', 'storage/', $bestProject->img);
                                      @endphp
                                        <img src="{{asset("$image")}}" alt="" />
                                        <div class="overlay-box">
                                        	<div class="content">
                                            	<h3>{{$bestProject->title}}</h3>
                                                <div class="see-project">See Project <span class="fa fa-angle-right"></span></div>
                                            </div>
                                        </div>
                                        <!--Overlay Two-->
                                        <div class="overlay-two">
                                        	<div class="overlay-two-inner">
                                            	<div class="overlay-two-content">
                                                	<h2><a href="projects-single.html">{{$bestProject->title}}</a></h2>
                                                    @if (strlen($bestProject->desc) > 100)
                                                   @php
                                                     $bestProject->desc = substr($bestProject->desc , 0 , 100);
                                                     @endphp
                                                       <div class="text">{{$bestProject->desc}}</div>
                                                     @else
                                                        <div class="text">{{$bestProject->desc}}</div>
                                                     @endif
                                                    <a href="{{ url("/projects/$bestProject->id") }}" class="see-more">See Project <span class="fa fa-angle-right"></span></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


    </section>

    <!--Team Section-->
    <section class="team-section">
    	<div class="auto-container">
        	<!--Sec Title-->
        	<div class="sec-title centered">
            	<div class="title">فريق العمل</div>
                <h2>خبرائنا</h2>
                <div class="seperater"></div>
            </div>

            <div class="row clearfix">

                <!--Team Block-->
                @foreach ($experts as $expert)
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<ul class="social-icon-one">
                        	<li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                        </ul>
                    	<div class="image">
                            @php
                                $image = str_replace('public/', 'storage/', $expert->img);
                            @endphp
                        	<img src="{{ asset("$image") }}" alt="" />
                        </div>
                        <div class="lower-box">
                        	<h3><a href="#">{{$expert->name}}</a></h3>
                            <div class="designation">{{$expert->title}}</div>
                        </div>
                    </div>
                </div>
                @endforeach






            </div>

        </div>
    </section>
    <!--End Team Section-->



    <!--News Section-->
    <section class="news-section">
    	<div class="auto-container">
        	<div class="sec-title centered">
            	<div class="title">أخبارنا</div>
                <h2>أحدث أخبارنا</h2>
                <div class="seperater"></div>
            </div>
            <div class="row clearfix">
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
        </div>
    </section>
    <!--End News Section-->





@endsection
