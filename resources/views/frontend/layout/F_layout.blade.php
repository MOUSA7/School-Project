<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>School Home Students Category Bootstrap Responsive Website Template | Home :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="School Home Students Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!--<script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>-->


    <!-- Custom-Files -->
    <link rel="stylesheet" href="/front/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link href="/front/css/css_slider.css" type="text/css" rel="stylesheet" media="all">
    <!-- banner slider -->
    <link rel="stylesheet" href="/front/css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="/front/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->





    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese"
          rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">

    <!-- //Web-Fonts -->
</head>
<body>
<!-- main banner -->
<div class="main-top" id="home">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
                <!-- logo -->
                <div id="logo">
                    <h1><a style="font-family: 'Courgette', cursive;color:slategrey " href="/">SCHOOL</a></h1>
                </div>

                <!-- //logo -->

                <!-- nav -->
                <div class="nav_w3ls">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="/" class="active">Home</a></li>
                            <li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="/about">About Us</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                                <!-- First Tier Drop Down -->
                                <!-- <label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                                 </label>
                                <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="blog.html" class="drop-text">Blog</a></li>
                                    <li><a href="#what" class="drop-text">What We do</a></li>
                                    <li><a href="#testimonials" class="drop-text">Testimonials</a></li>
                                </ul>
                            </li>-->
                            <li><a href="/contact">Contact Us</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('change-lang') }}">
                                    @if (App::getLocale() == 'ar')
                                        English
                                    @else
                                        Arabic
                                    @endif
                                </a>
                            </li>
                            @if(Auth::check())

                               @if(auth()->user()->role_id == 1)
                                <li><a href="{{url('/admin')}}"style="color: blue">Welcome : {{Auth::user()->name}}</a></li>
                                   @else
                                <li><a href="{{url('/logout')}}"style="color: blue">Welcome : {{Auth::user()->name}}</a></li>
                               @endif
                            @else
                                <li><a href="/login" class="Login">Login</a></li>
                            @endif

                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
            </div>
        </div>
    </header>
    <!-- //header -->

    <!-- banner -->
@yield('content')
    <!-- //banner -->
</div>
<!-- //main banner -->




<!-- footer -->
<footer class="py-5">
    <div class="container py-xl-4">
        <div class="row footer-top">
            <div class="col-md-5 footer-grid_section_1its">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-6">
                        <h2 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">About Us</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit.Error sit antium dolorts remq hymue laud.</p>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-6 mt-lg-0 mt-md-4 mt-sm-0 mt-4">
                        <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Who We Are</h3>
                        <p>Error sit antium dolorts remq hymue laud.Sed ut perspiciatis unde omnis iste natus error sit.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3 footer-grid_section_1its my-md-0 my-5">
                <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Contact Us</h3>
                <div class="contact-info">
                    <div class="footer-style-w3ls">
                        <h4 class="text-li mb-2">Phone</h4>
                        <p>+121 098 8907 9987</p>
                    </div>
                    <div class="footer-style-w3ls my-4">
                        <h4 class="text-li mb-2">Email </h4>
                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                    <div class="footer-style-w3ls">
                        <h4 class="text-li mb-2">Location</h4>
                        <p>Honey Avenue, New York City</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-grid_section_1its">
                <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Newsletter</h3>
                <p>Be the first to get latest news and offers!<br>Sed ut perspiciatis unde omnis.</p>
                <form action="#" method="post" class="subscribe_form mt-4">
                    <input class="form-control" type="email" name="email" placeholder="Enter your email..." required="">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- social icons -->
                <div class="agileinfo_social_icons mt-4">
                    <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Connect With Social</h3>
                    <ul class="agileits_social_list list-unstyled">
                        <li>
                            <a href="#" class="w3_agile_facebook">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#" class="agile_twitter">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w3_agile_dribble">
                                <span class="fa fa-dribbble"></span>
                            </a>
                        </li>
                        <li class="ml-2">
                            <a href="#" class="w3_agile_google">
                                <span class="fa fa-google-plus"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- social icons -->
            </div>

        </div>
    </div>
</footer>
<!-- //footer -->
<script src="/Metronic/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
