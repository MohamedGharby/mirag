@extends('web.pages-layout')

@section("title")
من نحن
@endsection


@section('lowerHeader')
<li><a href="{{ url('/contact') }}">تواصل معنا</a></li>

<li><a href="{{ url('/team') }}">فريقنا</a></li>

<li><a href="{{url('/investments')}}">الإستثمار العقارى</a></li>

<li><a href="{{url('/latests')}}">أخبارنا</a></li>

<li><a href="{{url('/projects')}}">المشاريع</a></li>

<li class="current"><a href="{{url('/about')}}">من نحن</a></li>

<li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
@endsection


@section('stickyHeader')
<li><a href="{{ url('/contact') }}">تواصل معنا</a></li>

<li><a href="{{ url('/team') }}">فريقنا</a></li>

<li><a href="{{url('/investments')}}">الإستثمار العقارى</a></li>

<li><a href="{{url('/latests')}}">أخبارنا</a></li>

<li><a href="{{url('/projects')}}">المشاريع</a></li>

<li class="current"><a href="{{url('/about')}}">من نحن</a></li>

<li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
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
