<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('page_title')</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Business Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <!-- //Meta-Tags -->

    <!-- css files -->
    <link href="{{asset('front/register/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('front/register/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!-- //css files -->

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- //google fonts -->
    @yield('css')
</head>
<body>
<div class="signupform">
    <div class="container">
        @yield('content')
    </div>
</div>
</body>
</html>
