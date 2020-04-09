<!DOCTYPE html>
<html lang="zxx">


<head>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->
    <title>..:: CSED GP LIBRARY ::..</title>

    <!-- Favicon -->
    <link href="../images/favicon.ico" rel="icon" type="image/x-icon"/>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet"/>
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <!-- Mobile Menu -->
    <link href="../css/mmenu.css" rel="stylesheet" type="text/css"/>
    <link href="../css/mmenu.positioning.css" rel="stylesheet" type="text/css"/>

    <!-- Stylesheet -->
    <link href="../style.css" rel="stylesheet" type="text/css"/>
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="screen" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="../js/html5shiv.min.js"></script>
    <script src="../js/respond.min.js"></script>
    <![endif]-->
</head>


<body>

<!-- Start: Header Section -->
<section class="page-banner services-banner">

    <header id="header-v1" class="navbar-wrapper inner-navbar-wrapper"> 
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="index-2.html">
                                            <img src="../images/libraria-logo-v1.png" alt="LIBRARIA"/>
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <!-- Header Topbar -->
                            <div class="header-topbar hidden-sm hidden-xs">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="topbar-info">
                                            <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+61-3-8376-6284</a>
                                            <span>/</span>
                                            <a href="mailto:support@libraria.com"><i class="fa fa-envelope"></i>support@libraria.com</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="topbar-links">
                                            <div class="flex-center position-ref full-height">
                                            @guest
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            @if (Route::has('register'))
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            @endif
                                            @else
                                            <ul>
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                            {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>
                                                    <div style="background-color:black; padding-left: 10px " class="dropdown-menu dropdown-menu-right "
                                                        aria-labelledby="navbarDropdown">
                                                            <a class="dropdown-item fa fa-btn fa-user"
                                                            href="../profile">{{ __('    My Profile') }}</a>
                                                            <br>
                                                            <a class="dropdown-item fa fa-btn fa-sign-out"
                                                            href="{{ route('logout') }}"
                                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                method="POST" style="display: none;">
                                                                @csrf
                                                            </form>

                                                    </div>
                                                </li>
                                                @endguest
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class='row'>   
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav">
                                    <li class="dropdown active">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="/home">Home</a>
                                    </li>

                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="blog.html">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog.html">Blog Grid View</a></li>
                                            <li><a href="blog-detail.html">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    </ul>
                            </div>         
                    </div>  
                    
                </nav>
            </div>
        </div>
    </header>
    `<!-- End: Header Section -->

    <!-- Start: Page Banner -->
        <!-- <div class="container">
                <div class="banner-header">
                <h2>@yield ('title')</h2>
                <span class="underline center"></span>
                <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
            </div> -->
            <!-- <div class="breadcrumb">
                <li><a  href="{{ url('/') }}"> HOME</a></li>
            </div> 
        </div> -->`
</section>

<div id="app">
    <main class="py-4">
            @yield('content')
    </main>
</div>

<!-- Start: Social Network -->
<section class="social-network section-padding">
    <div class="container">
        <div class="center-content">
            <h2 class="section-title">Follow Us</h2>
            <span class="underline center"></span>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <ul>
            <li>
                <a class="facebook" href="#" target="_blank">
                    <span>
                        <i class="fa fa-facebook-f"></i>
                    </span>
                </a>
            </li>
            <li>
                <a class="twitter" href="#" target="_blank">
                    <span>
                        <i class="fa fa-twitter"></i>
                    </span>
                </a>
            </li>
            <li>
                <a class="google" href="#" target="_blank">
                    <span>
                        <i class="fa fa-google-plus"></i>
                    </span>
                </a>
            </li>
            <li>
                <a class="rss" href="#" target="_blank">
                    <span>
                        <i class="fa fa-rss"></i>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</section>
<!-- End: Social Network -->

<!-- Start: Footer -->
        <footer class="site-footer">
            <div class="container">
                <div id="footer-widgets">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 widget-container">
                            <div id="text-2" class="widget widget_text">
                                <h3 class="footer-widget-title">About Libraria</h3>
                                <span class="underline left"></span>
                                <div class="textwidget">
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking.
                                </div>
                                <address>
                                    <div class="info">
                                        <i class="fa fa-location-arrow"></i>
                                        <span>21 King Street, Melbourne, Victoria 3000 Australia</span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-envelope"></i>
                                        <span><a href="mailto:support@libraria.com">support@libraria.com</a></span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-phone"></i>
                                        <span><a href="tel:012-345-6789">+ 012-345-6789</a></span>
                                    </div>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 widget-container">
                            <div id="nav_menu-2" class="widget widget_nav_menu">
                                <h3 class="footer-widget-title">Quick Links</h3>
                                <span class="underline left"></span>
                                <div class="menu-quick-links-container">
                                    <ul id="menu-quick-links" class="menu">
                                        <li><a href="#">Library News</a></li>
                                        <li><a href="#">History</a></li>
                                        <li><a href="#">Meet Our Staff</a></li>
                                        <li><a href="#">Board of Trustees</a></li>
                                        <li><a href="#">Budget</a></li>
                                        <li><a href="#">Annual Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                        <div class="col-md-2 col-sm-6 widget-container">
                            <div id="text-4" class="widget widget_text">
                                <h3 class="footer-widget-title">Timing</h3>
                                <span class="underline left"></span>
                                <div class="timming-text-widget">
                                    <time datetime="2017-02-13">Mon - Thu: 9 am - 9 pm</time>
                                    <time datetime="2017-02-13">Fri: 9 am - 6 pm</time>
                                    <time datetime="2017-02-13">Sat: 9 am - 5 pm</time>
                                    <time datetime="2017-02-13">Sun: 1 pm - 6 pm</time>
                                    <ul>
                                        <li><a href="#">Closings</a></li>
                                        <li><a href="#">Branches</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 widget-container">
                            <div class="widget twitter-widget">
                                <h3 class="footer-widget-title">Latest Tweets</h3>
                                <span class="underline left"></span>
                                <div id="twitter-feed">
                                    <ul>
                                        <li>
                                            <p><a href="#">@TemplateLibraria</a> Sed ut perspiciatis unde omnis iste
                                                natus error sit voluptatem. <a href="#">template-libraria.com</a></p>
                                        </li>
                                        <li>
                                            <p><a href="#">@TemplateLibraria</a> Sed ut perspiciatis unde omnis iste
                                                natus error sit voluptatem. <a href="#">template-libraria.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-text col-md-3">
                            <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                        </div>
                        <div class="col-md-9 pull-right">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="books-media-list-view.html">Books &amp; Media</a></li>
                                <li><a href="news-events-list-view.html">News &amp; Events</a></li>
                                <li><a href="#">Kids &amp; Teens</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<!-- End: Footer -->

<!-- jQuery Latest Version 1.x -->
<script type="text/javascript" src="../js/jquery-1.12.4.min.js"></script>

<!-- jQuery UI -->
<script type="text/javascript" src="../js/jquery-ui.min.js"></script>

<!-- jQuery Easing -->
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="../js/mmenu.min.js"></script>

<!-- Harvey - State manager for media queries -->
<script type="text/javascript" src="../js/harvey.min.js"></script>

<!-- Waypoints - Load Elements on View -->
<script type="text/javascript" src="../js/waypoints.min.js"></script>

<!-- Facts Counter -->
<script type="text/javascript" src="../js/facts.counter.min.js"></script>

<!-- MixItUp - Category Filter -->
<script type="text/javascript" src="../js/mixitup.min.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="../js/owl.carousel.min.js"></script>

<!-- Accordion -->
<script type="text/javascript" src="../js/accordion.min.js"></script>

<!-- Responsive Tabs -->
<script type="text/javascript" src="../js/responsive.tabs.min.js"></script>

<!-- Responsive Table -->
<script type="text/javascript" src="../js/responsive.table.min.js"></script>

<!-- Masonry -->
<script type="text/javascript" src="../js/masonry.min.js"></script>

<!-- Carousel Swipe -->
<script type="text/javascript" src="../js/carousel.swipe.min.js"></script>

<!-- bxSlider -->
<script type="text/javascript" src="../js/bxslider.min.js"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
