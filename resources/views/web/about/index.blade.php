@extends('web.layout')

@section("title")
من نحن
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

                                <li><a href="#">المشاريع</a>

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

                                <li><a href="{{url('/projects')}}">المشاريع</a>

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
        <section class="page-title" style="background-image:url(web/images/background/13.jpg)">
            <div class="auto-container">
                <h1>من نحن</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ url('/') }}">الرئيسية</a></li>
                    <li>من نحن</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->
    
        <!--About Section-->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
    
                    <!--Content Column-->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <div class="title">من نحن</div>
                                <h2>شركة ميراج للمقاولات</h2>
                            </div>
                            <div class="text">شركة ميراج للمقاولات تاسست سنه (2009) و اكتسبت الافضلية و التميز بين الشركات و بشهادة البنوك و شركات التمويل المالى 
                                و نزاهة التعامل مع الكل و ثقة العملاء ,و لنا العديد من العقود المبرمة بين القطاع الحكومي و الاهلية مع الشركات, و قد تخصصت منذ انطلاقها فى اعمال المقاولات المختلفة . وتتمثل فى:-
                                م/عاطف الشيخ (رئيس مجلس الادارة للشركة )
                                اللواء/ محمد الروبى (نائب رئيس مجلس الادارة)
                                م/ عاطف طه العضو المنتدب للتنفيذ
                                و بخبرتهم الكبيره فى مجال الطرق و الكبارى مع كبرى الشركات
                                </div>
                            <div class="bold-text">
                                <h3>سياسة جودة الامان</h3>
                            </div>
                            <div class="text">عنصري الجودة و الامان من اهم العناصر التى نضعها ضمن اولوياتنا التى لا يمكن ان نتهاون فيها , كما اننا على مدار سنين طويلة من تقديم اعمال المقاولات خاصه الطرق و الكبارى و الصيانة  و التشغيل و نحن نعمل على تحسين الجودة فى كل اعمالنا بنظام جودة و امان ممتاز يواكب التحديات المستمرة و يتماشى مع متطلبات العملاء المختلفة .</div>
                            <div class="bold-text">
                                <h3>الرؤية والهدف</h3>
                            </div>
                            <div class="text">نتطلع الى التوسع فى الاعمال المستقبلية المتطورة مع رؤية الدولة مستمرة التجدد , و زيادة تنوع الاعمال ,للتاكيد على موثوقية الشركة ,و زيادة ارباحها ,فيؤول ذلك الى وضع الشركة فى مصاف كبرى الشركات على المستوى المحلى و العالمى  , و نبذل قصارى جهدنا من اجل تحقيق هذه الرؤية  و لنلبى طموحات و احتياجات عملائنا الحالية و المستقبلية , كما اننا نسير وفق خطة منظمة نسعى من خلالها الى توسيع نشاطتنا . 
                                و نهدف الى طموحات الدولة ممثله فى قيادتها السياسية الرشيده , و التى تهدف الى الاستثمار فى كافة مجالات المقاولات و استغلال كافه امكانيات الدولة المصرية الاستغلال الامثل .
                                و بناء على ذلك قامت الدولة بعمل شبكة طرق و كبارى عالمية و على احدث و افضل طراز عالمى , و كان لنا نصيب فى هذه الاعمال باعمال متكاملة فى الطرق و الكبارى و احدثها افتتاح القيادة السياسية للمحاور الهامة فى الدولة 
                            </div>

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


@endsection
