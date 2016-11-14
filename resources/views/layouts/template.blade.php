<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- google translate meta tag -->
    <meta name="google-translate-customization" content="b90adbbc52fb36b1-37c320bc66433c93-gfafe45677761b348-15">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>A.E.C. Nursing Home Thailand</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico') }}"/>

    <!-- Responsive jQuery Slideshow -->
    <link rel="stylesheet" href="{{ url('assets/css/responsiveslides.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/themes.css') }}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="{{ url('assets/js/responsiveslides.min.js') }}"></script>
    <!-- End Responsive jQuery Slideshow -->


    <!-- PRE-LOADER JAVASCRIPT START -->
    <script src="js/pace.min.js" type="text/javascript"></script>
    <!-- PRE-LOADER JAVASCRIPT END -->

    <!-- STYLESHEETS START -->
    <!-- Bootstrap style sheet -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- Font Awesome style sheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Ion Icons style sheet -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Pretty photo style sheet -->
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <!-- Sunshine specific style sheet -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- STYLESHEETS END -->

    <!-- FONTS START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
    <!-- FONTS END -->

    <!-- Bootstrap -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Plugins -->
    <link href="{{ url('assets/plugins/rs-plugin/css/settings.css') }}" media="screen" rel="stylesheet">
    <link href="{{ url('assets/plugins/rs-plugin/css/extralayers.css') }}" media="screen" rel="stylesheet">
    <link href="{{ url('assets/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/animations.css') }}" rel="stylesheet">
    <link href="{{ url('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">

    <!-- iDea core CSS file -->
    <link href="{{ url('assets/css/style.css')}}" rel="stylesheet">

    <!-- Color Scheme (In order to change the color scheme, replace the red.css with the color scheme that you prefer)-->
    <link href="{{ url('assets/css/skins/white.css') }}" rel="stylesheet">

    <!-- place for your custom styles -->
    <link href="{{ url('assets/carousel.css') }}" rel="stylesheet">
    <link href="{{ url('assets/custom.css') }}" rel="stylesheet" />


    <!-- jQuery UI Style -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    {{-- FancyBox image popup --}}

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

    {{-- End FancyBox image popup --}}

</head>
<body data-spy="scroll" data-target="#top-navigation">
    <div class="container-non-responsive">
        <div class="navbar_header">
            <div class="translate_menu">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-7">

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                        <div class="google-translate-border" id="google_translate_element">

                        </div>
                    </div>
                    <a href="{{ URL::to('change/th') }}">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3">
                            <div class="language-link">
                                TH
                            </div>
                        </div>
                    </a>
                    <a href="{{ URL::to('change/en') }}">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3 border-left">
                            <div class="language-link">
                                EN
                            </div>
                        </div>
                    </a>
                    {{--<a href="javascript:void(0)">--}}
                        {{--<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 border-left">--}}
                            {{--<div class="language-link">--}}
                                {{--Aa<sup>+</sup>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}

                </div>
            </div>
            <div class="header_name">
                A.E.C. Nursing Home Thailand
            </div>

            <!-- responsive menu 1 -->
            {{--<div>--}}
                {{--<ul class="topnav" id="myTopnav">--}}
                    {{--<li><a href="{{ url('/') }}">Home</a></li>--}}
                    {{--<li><a href="{{ url('rooms') }}">Rooms</a></li>--}}
                    {{--<li><a href="{{ url('service') }}">Service</a></li>--}}
                    {{--<li><a href="{{ url('care-giver') }}">Care Giver</a></li>--}}
                    {{--<li><a href="{{ url('facility') }}">Facility</a></li>--}}
                    {{--<li><a href="{{ url('contact-us') }}">Contact Us</a></li>--}}
                    {{--<li class="icon">--}}
                        {{--<a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            <!-- responsive menu 1 -->

            <!-- Start Responsive Navbar Menu 2 -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span><b>{{ trans('index_page.menu') }}</b></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse navbar-menu-font" id="myNavbar">
                        <ul class="nav nav-justified nav-pills">
                            {{--<li><a href="{{ url('/') }}">Home</a></li>--}}
                            {{--<li><a href="{{ url('rooms') }}">Rooms</a></li>--}}
                            {{--<li><a href="{{ url('service') }}">Service</a></li>--}}
                            {{--<li><a href="{{ url('care-giver') }}">CareGiver</a></li>--}}
                            {{--<li><a href="{{ url('facility') }}">Facility</a></li>--}}
                            {{--<li><a href="{{ url('contact-us') }}">Contact Us</a></li>--}}
                            <li><a href="{{ url('/') }}">{{ trans('index_page.home_menu') }}</a></li>
                            <li><a href="{{ url('rooms') }}">{{ trans('index_page.room_menu') }}</a></li>
                            <li><a href="{{ url('service') }}">{{ trans('index_page.service_menu') }}</a></li>
                            <li><a href="{{ url('care-giver') }}">{{ trans('index_page.care_menu') }}</a></li>
                            <li><a href="{{ url('facility') }}">{{ trans('index_page.fac_menu') }}</a></li>
                            <li><a href="{{ url('contact-us') }}">{{ trans('index_page.contact_menu') }}</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Responsive Navbar Menu 2 -->
        </div>
    </div>



    @yield('main')


    <!-- FOOTER -->
    <!-- English -->
    {{--<div class="navbar_footer">--}}
        {{--<div class="footer_name">A.E.C. Nursing Home Thailand</div>--}}
        {{--<div><img src="{{ url('assets/images/address.png') }}" class="footer_img">--}}
            {{--17 Soi Ladprao 64, Road jungtion 4 Wang Thong Lang,<br>--}}
            {{--Wang Thong Lang district,  Bangkok 10310</div>--}}
        {{--<div><img src="{{ url('assets/images/telephone.png') }}" class="footer_img">--}}
            {{--02-530-2199, 098-287-7287, 090-004-6331</div>--}}
        {{--<div class="footer_img_group">--}}
            {{--<img src="{{ url('assets/images/line.png') }}">--}}
            {{--<img src="{{ url('assets/images/email.png') }}">--}}
            {{--<img src="{{ url('assets/images/location.png') }}">--}}
            {{--<img src="{{ url('assets/images/facebook.png') }}">--}}
        {{--</div>--}}
        {{--<div>&copy; 2016 Think Active Company, Inc.</div>--}}
    {{--</div>--}}
    <!-- End English -->

    <!-- THAI -->
    <div class="navbar_footer">
        <div>{{ trans('index_page.name') }}</div>
        <div><img src="{{ url('assets/images/address.png') }}" class="footer_img">
            {{ trans('index_page.address_1') }}<br>
            {{ trans('index_page.address_2') }}
       </div>
        <div>
            <img src="{{ url('assets/images/telephone.png') }}" class="footer_img">
            02-530-2199, 098-287-7287, 090-004-6331</div>
        <div class="footer_img_group">
            <a href="https://line.me/R/ti/p/%40mzm5743z" target="_blank"><img src="{{ url('assets/images/line.png') }}"></a>
            <a class="article_link" href="mailto:aecnursinghome.th@gmail.com"><img src="{{ url('assets/images/email.png') }}"></a>
            <a href="https://www.google.com/maps/place/AEC+Nursing+Home/@13.788569,100.5948633,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xcb632c328604579a!8m2!3d13.788569!4d100.597052?hl=th-TH" target="_blank"><img src="{{ url('assets/images/location.png') }}"></a>
            <img src="{{ url('assets/images/facebook.png') }}">
        </div>
        <div>&copy; 2016 Think Active Company, Inc.</div>
    </div>
    <!-- End THAI-->


    <!-- script -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- jQuery UI JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{--<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>--}}

    <!-- Modernizr javascript -->
    <script type="text/javascript" src="{{ url('assets/plugins/modernizr.js') }} "></script>

    <!-- jQuery REVOLUTION Slider  -->
    <script type="text/javascript" src="{{ url('assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Initialization of Plugins -->
    <script type="text/javascript" src="{{ url('assets/js/template.js') }}"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="{{ url('assets/js/custom.js') }}"></script>

    <!-- end script -->


    <!-- JAVASCRIPT START -->
    <!-- jQuery script -->
    <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <!-- Bootstrap script -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Pretty photo script -->
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <!-- Parallax script -->
    <script src="js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <!-- Mixitup Filters script -->
    <script src="js/jquery.mixitup.min.js" type="text/javascript"></script>

    <!-- Sunshine specific Scripts -->
    <script src="js/scripts.js" type="text/javascript"></script>
    <!-- JAVASCRIPT END -->

    <!--Modal box control popup-->
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/facilities.js"></script>

    <script type="text/javascript" src="{{ url('assets/js/responsiveslides.js') }}"></script>

    <!--google translate script-->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'th',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    <script>
        // You can also use "$(window).load(function() {"
        $(function () {

            // Slideshow 1
            $("#slider1").responsiveSlides({
                speed: 1000,
                timeout: 5000,
                nav: true,
                pager: true,
                auto: true,
//                namespace: "centered-btns",
                namespace: "large-btns"
            });
        });
    </script>



    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

</body>
</html>