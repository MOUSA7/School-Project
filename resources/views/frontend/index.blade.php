
@extends('frontend.layout.F_layout')

@section('content')

    <div class="banner_w3lspvt">
        <div class="csslider infinity" id="slider1">
            <input type="radio" name="slides" checked="checked" id="slides_1" />
            <input type="radio" name="slides" id="slides_2" />
            <input type="radio" name="slides" id="slides_3" />
            <input type="radio" name="slides" id="slides_4" />
            <ul class="banner_slide_bg">
                <li>
                    <div class="container">
                        <div class="w3ls_banner_txt text-center ml-auto pr-xl-0 pr-sm-4 pr-5">
                            <h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">@lang('home.slider_title')</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit <br>acntium doemque laudantium, totam
                                rem aperiam eaque ipsa <br>quae ab illo.</p>
                            <a href="about.html" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Read More</a>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="container">
                        <div class="w3ls_banner_txt text-center ml-auto pr-xl-0 pr-sm-4 pr-5">
                            <h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">Getting Started With School Training</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit <br>acntium doemque laudantium, totam
                                rem aperiam eaque ipsa <br>quae ab illo.</p>
                            <a href="about.html" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Read More</a>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="container">
                        <div class="w3ls_banner_txt text-center ml-auto pr-xl-0 pr-sm-4 pr-5">
                            <h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">House Training and Crate Training</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit <br>acntium doemque laudantium, totam
                                rem aperiam eaque ipsa <br>quae ab illo.</p>
                            <a href="about.html" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Read More</a>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="container">
                        <div class="w3ls_banner_txt text-center ml-auto pr-xl-0 pr-sm-4 pr-5">
                            <h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">Leash Training Students and Puppies</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit <br>acntium doemque laudantium, totam
                                rem aperiam eaque ipsa <br>quae ab illo.</p>
                            <a href="about.html" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Read More</a>

                        </div>
                    </div>
                </li>
            </ul>

            <div class="arrows">
                <label for="slides_1"></label>
                <label for="slides_2"></label>
                <label for="slides_3"></label>
                <label for="slides_4"></label>
            </div>
            <div class="navigation">
                <div>
                    <label for="slides_1"></label>
                    <label for="slides_2"></label>
                    <label for="slides_3"></label>
                    <label for="slides_4"></label>
                </div>
            </div>
        </div>
    </div>

<!-- about -->
<div class="what py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title-w3 mb-sm-4 mb-3 text-bl text-center font-weight-bold">Welcome to Our Website</h3>
        <p class="mx-auto wstyles text-center mb-sm-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
        <img src="{{asset('front/images/21.jpg')}}" alt="" class="img-fluid">
    </div>
</div>
<!-- //about -->

<!-- services -->
<section class="services bg-li py-5" id="services">
    <div class="container py-xl-5 py-lg-3">
        <div class="row py-xl-3">
            <div class="col-lg-4">
                <h3 class="title-w3 text-bl mb-3 font-weight-bold">Pet Services</h3>
                <p class="title-sub-2 mb-4">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id.</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                    sunt explicabofdfd dsdsd. </p>
            </div>
            <div class="col-lg-8 mt-lg-0 mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bottom-gd-ser p-4">

                            <div class="bottom-gd-icon text-center mb-3">
                                <span class="fa fa-expand" aria-hidden="true"></span>
                            </div>
                            <div class="bottom-gd-content text-center mt-sm-0 mt-4">
                                <h4 class="mb-3">Grooming</h4>
                                <p>Integer sit amet mattis quam, sit amet ultricies velit.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 my-md-0 my-4">
                        <div class="bottom-gd-ser p-4">

                            <div class="bottom-gd-icon text-center mb-3">
                                <span class="fa fa-github" aria-hidden="true"></span>
                            </div>
                            <div class="bottom-gd-content text-center mt-sm-0 mt-4">
                                <h4 class="mb-3">School Training</h4>
                                <p>Integer sit amet mattis quam, sit amet ultricies velit.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mt-md-5">
                    <div class="col-md-6">
                        <div class="bottom-gd-ser p-4">

                            <div class="bottom-gd-icon text-center mb-3">
                                <span class="fa fa-heart-o" aria-hidden="true"></span>
                            </div>
                            <div class="bottom-gd-content text-center  mt-sm-0 mt-4">
                                <h4 class="mb-3">Adoption</h4>
                                <p>Integer sit amet mattis quam, sit amet ultricies velit.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4">
                        <div class="bottom-gd-ser p-4">

                            <div class="bottom-gd-icon text-center mb-3">
                                <span class="fa fa-medkit" aria-hidden="true"></span>
                            </div>
                            <div class="bottom-gd-content text-center mt-sm-0 mt-4">
                                <h4 class="mb-3">Veterinary Care</h4>
                                <p>Integer sit amet mattis quam, sit amet ultricies velit.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //services -->



<!-- testimonials -->
<section class="testimonials py-5" id="testimonials">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title-w3 text-wh text-center font-weight-bold mb-sm-5 mb-4">Testimonials</h3>
        <div class="row pt-xl-4">
            <div class="col-md-4 test-grid px-lg-5">
                <div class="test-info text-center">
                    <p class="text-li">"Sed ut perspiciatis unde omnis iste natus error sit volup tatem accus antium dolore tium.</p>
                    <div class="test-img text-center mt-4">
                        <img src="{{asset('front/images/ff.jpg')}}" class="img-fluid" alt="user-image">
                    </div>
                    <h3 class="mt-md-4 mt-3"> - Lorem Ipsum</h3>
                </div>
            </div>
            <div class="col-md-4 test-grid px-lg-5 my-md-0 my-5">
                <div class="test-info text-center">
                    <p class="text-li">"Sed ut perspiciatis unde omnis iste natus error sit volup tatem accus antium dolore tium.</p>
                    <div class="test-img text-center mt-4">
                        <img src="{{asset('front/images/l.jpg')}}" class="img-fluid" alt="user-image">
                    </div>
                    <h3 class="mt-md-4 mt-3"> - Unde Omnis</h3>
                </div>
            </div>
            <div class="col-md-4 test-grid px-lg-5">
                <div class="test-info text-center">
                    <p class="text-li">"Sed ut perspiciatis unde omnis iste natus error sit volup tatem accus antium dolore tium.</p>
                    <div class="test-img text-center mt-4">
                        <img src="{{asset('front/images/74.jpg')}}" class="img-fluid" alt="user-image">
                    </div>
                    <h3 class="mt-md-4 mt-3"> - Iste Natus</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //testimonials -->
<!-- blog -->
<div class="blog_w3ls py-5" id="blog">
    <div class="py-xl-5 py-lg-3">
        <h3 class="title-w3 text-bl text-center font-weight-bold mb-sm-5 mb-4">Our Blog</h3>
        <div class="blog-grids pt-xl-4">
            <div class="container">
                <div class="row">
                    <!-- blog grid -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 med-blog">
                            <div class="card-header p-0">
                                <img class="card-img-bottom" src="{{asset('front/images/paner.jpg')}}" alt="Card image cap">
                            </div>
                            <div class="card-body border border-top-0">
                                <a href="blog.html" class="blog-title-in card-title m-0">At vero eos</a>
                                <p class="my-3">Cras ultricies ligula sed magna dictum porta auris blandita W3Schools is optimized for learning, testing.</p>
                                <a href="blog.html" class="btn button-style-3 text-color let">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- //blog grid -->
                    <!-- blog grid -->
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                        <div class="card border-0 med-blog">
                            <div class="card-header p-0">
                                <img class="card-img-bottom" src="{{asset('front/images/o.png')}}" alt="Card image cap">
                            </div>
                            <div class="card-body border border-top-0">
                                <a href="blog.html" class="blog-title-in card-title m-0">Tccus et ius</a>
                                <p class="my-3">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
                                <a href="blog.html" class="btn button-style-3 text-color let">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- //blog grid -->
                    <!-- blog grid -->
                    <div class="col-lg-4 col-md-6 mx-auto mt-lg-0 mt-5">
                        <div class="card border-0 med-blog">
                            <div class="card-body border right-blog-wthree">
                                <a href="blog.html" class="blog-title-in card-title">Sed do eiusmod tempor auris incididunt ut.</a>
                                <p class="theme-color">Feb 06 2019</p>
                                <a href="blog.html" class="blog-title-in card-title mt-4">Labore et dolore magna aliqua ultricies ligula.</a>
                                <p class="theme-color">Feb 07 2019</p>
                                <a href="blog.html" class="blog-title-in card-title mt-4">Nemo enim aspernatur aut odit aut fugit fdsdsd.</a>
                                <p class="theme-color">Feb 13 2019</p>
                            </div>
                        </div>
                    </div>
                    <!-- //blog grid -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //blog -->

<!-- copyright -->
<div class="cpy-right text-center py-3">
    <p>© 2019 School Home. All rights reserved | Design by
        <a href="http://w3layouts.com"> W3layouts.</a>
    </p>
</div>
<!-- //copyright -->

<!-- move top icon -->
<a href="#home" class="move-top text-center"></a>
<!-- //move top icon -->


@endsection

