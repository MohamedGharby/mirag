@extends("web.pages-layout")
@section("title")
تواصل معنا
@endsection


@section('lowerHeader')
    <li class="current"><a href="{{ url('contact') }}">تواصل معنا</a></li>

    <li><a href="{{ url('/team') }}">فريقنا</a></li>

    <li><a href="{{url('/investments')}}">الإستثمار العقارى</a></li>

    <li><a href="{{url('/latests')}}">أخبارنا</a></li>

    <li><a href="{{ url('/projects')}}">المشاريع</a></li>

    <li><a href="{{url('/about')}}">من نحن</a></li>

    <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
@endsection

@section('stickyHeader')
    <li class="current"><a href="{{ url('/contact') }}">تواصل معنا</a></li>

    <li><a href="{{ url('/team') }}">فريقنا</a></li>

    <li><a href="{{url('/investments')}}">الإستثمار العقارى</a></li>

    <li><a href="{{url('/latests')}}">أخبارنا</a></li>

    <li><a href="{{ url('/projects')}}">المشاريع</a></li>

    <li><a href="{{url('/about')}}">من نحن</a></li>

    <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
@endsection

@section("main")

	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/13.jpg)">
    	<div class="auto-container">
        	<h1>تواصل معنا</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">الرئيسية</a></li>
                <li>نواصل معنا</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Contact Form Section-->
    <section class="contact-form-section">
    	<div class="auto-container">
        	<!--Title Box-->
        	<div class="title-box">
            	<div class="title">ارسب لنا رسالة</div>
                <h2>لديك ايه اسئلة ؟</h2>
                <div class="text">شكرا لاهتمامك بشركتنا و خدمتنا و نرجو ان كان لديك ايه اسئلة لا تتردد في التواصل معنا</div>
            </div>

            <!--Contact Form-->
            <div class="contact-form">
                <form  id="contact-form">
                     @csrf
                    
                        <div id="errorMsg" class="alert alert-danger">
                         </div>
                     
                    <div class="row clearfix">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <input class="form-data" type="text" name="name" value="" placeholder="الاسم" >
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <input class="form-data" type="email" name="email" value="" placeholder="البريد الالكتروني" >
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <input class="form-data" id="phone" name="phone_number" type="text" placeholder="رقم الهاتف">
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <textarea class="form-data" name="body" placeholder="الرسالة"></textarea>
                        </div>

                        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                            <button id="contact-form-btn" type="submit" class="theme-btn message-btn">تواصل</button>
                            <div id="sucmsg" class="alert alert-success mt-3">
                             </div>
                        </div>
                        
                        
                        
                        
                    </div>
                </form>
            </div>
            <!--End Contact Form-->

        </div>
    </section>
    <!--End Contact Form Section-->

	<!--Contact Page Info Section-->
    <div class="contact-page-info-section">

    	<div class="auto-container">
        	<div class="row clearfix">

            	<!--Info Column-->
            	<div class="info-column col-lg-6 col-md-12 col-sm-12">
                	<div class="inner-column">
                    	<div class="sec-title">
                        	<div class="title">تواصل معنا</div>
                            <h2>كن على تواصل</h2>
                        </div>
                        <div class="text">Thewebmax ipsum amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore agna aliquam erat. ipsum dolor sit amet, consectetuer adipiscing. ipsum dolor sit .</div>
                        <ul class="list-style-two">
                            <li><span class="icon fa fa-phone"></span>Call us 1-800-555-1234</li>
                            <li><span class="icon fa fa-envelope"></span>info@emarat.com</li>
                            <li><span class="icon fa fa-map-marker"></span>Open Hours 09:00 am - 06:00 pm</li>
                            <li><span class="icon fa fa-clock-o"></span>185, Pickton Near Street, Los  Angeles, USA</li>
                        </ul>
                        <ul class="social-icon-two">
                            <li class="follow">Follow on: </li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                        </ul>
                    </div>
                </div>

                <!--Map Column-->
            	<div class="map-column col-lg-6 col-md-12 col-sm-12">
                	<div class="inner-column">

                        <!--Map Outer-->
                        <div class="map-outer">
                            <!--Map Canvas-->
                            <div class="map-canvas"
                                data-zoom="12"
                                data-lat="-37.817085"
                                data-lng="144.955631"
                                data-type="roadmap"
                                data-hue="#ffc400"
                                data-title="Envato"
                                data-icon-path="images/icons/map-marker.png"
                                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
	</div>  


@endsection

@section("scripts")
    <script>
        

    $("#sucmsg").hide();
    $('#errorMsg').hide();

    $('#contact-form-btn').click(function(e){
        $("#sucmsg").hide();
        $('#errorMsg').hide();
        $("#sucmsg").empty();
        $('#errorMsg').empty();
    
        e.preventDefault();
        let formData = new FormData($("#contact-form")[0]);

        $.ajax({
            type: "POST",
            url: '{{ url("contact/message") }}',
            data: formData,
            contentType: false,
            processData: false,

            success: function (data){
                $("#sucmsg").show();
                $("#sucmsg").text(data.success);
                
            }, error: function(xhr , status , error) {
                $('#errorMsg').show();
                $.each(xhr.responseJSON.errors , function(key , item) {
                    $('#errorMsg').append("<p>" +item+ "</p");
                })
            }
        })
    })



    </script>


@endsection