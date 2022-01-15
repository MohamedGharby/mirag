<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Mirag | @yield('title') </title>
    <!-- Stylesheets -->
    <link href="{{asset('web/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('web/plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{asset('web/plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
    <link href="{{asset('web/plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
    <link href="{{asset('web/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('web/css/myStyle.css')}}">
    <link href="{{asset('web/css/responsive.css')}}" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <!-- <link href="{{asset('web/css/color-switcher-design.css')}}" rel="stylesheet"> -->
    <!--Color Themes-->
    <link id="theme-color-file" href="{{asset('web/css/color-themes/default-theme.css')}}" rel="stylesheet">

      
    <link rel="shortcut icon" href="{{asset('web/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('web/images/favicon.png')}}" type="image/x-icon">
    @yield("styles")
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper rtl">

        <!-- Preloader -->
        <div class="myLoader">
            <img style="width: 100%;"  src="{{asset('construction-gif-2.gif')}}" alt="">
        </div>

        @yield('header')




        @yield("main")





        <!--Main Footer-->
        <footer class="main-footer" style="background-image:url(web/images/background/6.jpg)">

            <div class="auto-container">

                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--big column-->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!--Footer Column-->
                                <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="logo">
                                            <a href="index.html"><img src="{{ asset('web/images/footer-logo.png') }}" alt="" /></a>
                                        </div>
                                        <div class="text">Thewebmax ipsum amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore agna aliquam erat. ipsum dolor sit amet, consectetuer adipiscing. ipsum dolor sit .</div>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h2>Working Hours</h2>
                                        <ul class="list-style-one">
                                            <li><span class="icon fa fa-envelope"></span>185, Pickton Near Street, Los Angeles, USA</li>
                                            <li><span class="icon fa fa-phone"></span>info@sentiment.com</li>
                                            <li><span class="icon fa fa-map-marker"></span>support@sentiment.com</li>
                                            <li><span class="icon fa fa-clock-o"></span>1-800-985-357</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--big column-->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!--Footer Column-->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget news-widget">
                                        <h2>Latest News</h2>
                                        <!--News Widget Block-->
                                        <div class="news-widget-block">
                                            <div class="widget-inner">
                                                <div class="image">
                                                    <img src="{{ asset('web/images/resource/news-image-1.jpg') }}" alt="" />
                                                </div>
                                                <h3><a href="blog-detail.html">Planning Process Needs to improve your Business.</a></h3>
                                                <div class="post-date">28 Dec, 2020</div>
                                            </div>
                                        </div>

                                        <!--News Widget Block-->
                                        <div class="news-widget-block">
                                            <div class="widget-inner">
                                                <div class="image">
                                                    <img src="{{ asset('web/images/resource/news-image-2.jpg') }}" alt="" />
                                                </div>
                                                <h3><a href="blog-detail.html">7 Tips To Move Your Project Move Forward.</a></h3>
                                                <div class="post-date">13 Oct, 2020</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="footer-widget map-widget">
                                        <h2>Our Branches</h2>
                                        <div class="image">
                                            <img src="{{ asset('web/images/resource/map.png') }}" alt="" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <div class="copyright">Copyrights 2022. All Rights are Reserved by <a href="{{ url('/') }}">Mirag</a></div>
                        </div>
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <ul class="footer-nav">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">Blogs</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

    <!-- Color Palate / Color Switcher -->
    <div class="color-palate">
        <div class="color-trigger">
            <i class="fa fa-gear"></i>
        </div>
        <div class="color-palate-head">
            <h6>Choose Your Color</h6>
        </div>
        <div class="various-color clearfix">
            <div class="colors-list">
                <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
                <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
                <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
                <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
                <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
                <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
                <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
                <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
            </div>
        </div>

        <ul class="rtl-version option-box">
            <li class="rtl">RTL Version</li>
            <li>LTR Version</li>
        </ul>

        <a href="#" class="purchase-btn">Purchase now $17</a>

        <div class="palate-foo">
            <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
        </div>

    </div>

    <script src="{{asset('web/js/jquery.js')}}"></script>
    <!--Revolution Slider-->
    <script src="{{asset('web/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('web/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('web/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('web/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('web/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('web/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('web/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('web/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('web/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('web/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('web/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('web/js/main-slider-script.js')}}"></script>


    <script src="{{asset('web/js/popper.min.js')}}"></script>
    <script src="{{asset('web/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('web/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('web/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('web/js/appear.js')}}"></script>
    <script src="{{asset('web/js/owl.js')}}"></script>
    <script src="{{asset('web/js/wow.js')}}"></script>
    <script src="{{asset('web/js/jquery-ui.js')}}"></script>
    <script src="{{asset('web/js/script.js')}}"></script>
    <!-- <script src="{{asset('web/js/color-settings.js')}}"></script> -->
    @yield("scripts")

</body>

</html>