<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechNews - HTML and CSS Template</title>

    <!-- favicon -->
    <link href="{{ url('public/front/img/favicon.png')}}" rel=icon>

    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="{{ url('public/front/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- font-awesome -->
    <link href="{{ url('public/front/fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="{{ url('public/front/css/mobile-menu.css')}}" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="{{ url('public/front/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ url('public/front/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <!-- Theme Style -->
    <link href="{{ url('public/front/css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- preloader -->

<div class="uc-mobile-menu-pusher">
<div class="content-wrapper">

@include('front/layout/header')
<!-- header_section_wrapper -->

@yield('content')


<!-- Subscriber Section -->

@include('front/layout/footer')
</div>
<!-- #content-wrapper -->

</div>
<!-- .offcanvas-pusher -->

<a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

<div class="uc-mobile-menu uc-mobile-menu-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="uc-mobile-menu-close-btn">&times;</button>
    <div>
        <div>
            <ul id="menu">
                <li class="active"><a href="blog.html">News</a></li>
                <li><a href="category.html">Mobile</a></li>
                <li><a href="blog.html">Tablet</a></li>
                <li><a href="category.html">Gadgets</a></li>
                <li><a href="blog.html">Camera</a></li>
                <li><a href="category.html">Design</a></li>
                <li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">More
                    <span><i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="m-menu-content">
                                <ul class="col-sm-3">
                                    <li class="dropdown-header">Widget Haeder</li>
                                    <li><a href="#">Awesome Features</a></li>
                                    <li><a href="#">Clean Interface</a></li>
                                    <li><a href="#">Available Possibilities</a></li>
                                    <li><a href="#">Responsive Design</a></li>
                                    <li><a href="#">Pixel Perfect Graphics</a></li>
                                </ul>
                                <ul class="col-sm-3">
                                    <li class="dropdown-header">Widget Haeder</li>
                                    <li><a href="#">Awesome Features</a></li>
                                    <li><a href="#">Clean Interface</a></li>
                                    <li><a href="#">Available Possibilities</a></li>
                                    <li><a href="#">Responsive Design</a></li>
                                    <li><a href="#">Pixel Perfect Graphics</a></li>
                                </ul>
                                <ul class="col-sm-3">
                                    <li class="dropdown-header">Widget Haeder</li>
                                    <li><a href="#">Awesome Features</a></li>
                                    <li><a href="#">Clean Interface</a></li>
                                    <li><a href="#">Available Possibilities</a></li>
                                    <li><a href="#">Responsive Design</a></li>
                                    <li><a href="#">Pixel Perfect Graphics</a></li>
                                </ul>
                                <ul class="col-sm-3">
                                    <li class="dropdown-header">Widget Haeder</li>
                                    <li><a href="#">Awesome Features</a></li>
                                    <li><a href="#">Clean Interface</a></li>
                                    <li><a href="#">Available Possibilities</a></li>
                                    <li><a href="#">Responsive Design</a></li>
                                    <li><a href="#">Pixel Perfect Graphics</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- .uc-mobile-menu -->

</div>
<!-- #main-wrapper -->

<!-- jquery Core-->
<script src="{{ url('public/front/js/jquery-2.1.4.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{ url('public/front/js/bootstrap.min.js'}}")></script>

<!-- Theme Menu -->
<script src="{{ url('public/front/js/mobile-menu.js'}}"><)/script>

<!-- Owl carousel -->
<script src="{{ url('public/front/js/owl.carousel.min.js')}}"></script>

<!-- Theme Script -->
<script src="{{ url('public/front/js/script.js'}}"></scri)pt>
</body>
</html>