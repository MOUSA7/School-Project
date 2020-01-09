@extends('frontend.layout.F_layout')

@section('content')
    <div class="banner_w3lspvt-2">

    </div>
    <div class="what py-5" id="what">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 text-bl text-center font-weight-bold mb-sm-5 mb-4">About Us</h3>
            <div class="row pt-xl-4">
                <div class="col-lg-6 serv_bottom text-center mt-xl-3">
                    <div class="row mt-xl-4">
                        <div class="col-sm-6">
                            <div class="bottom-gd">
                                <img src="{{asset('front/images/ac.png')}}" height="50px" alt="" class="img-fluid train">
                                <h3 class="my-3 font-weight-bold">House & Crate</h3>
                                <p>Sit amet mattis quam, sit amet excepteur sint occaecat cupidatat.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                            <div class="bottom-gd">
                                <img src="{{asset('front/images/st.jpg')}}" alt="" class="img-fluid train">
                                <h3 class="my-3 font-weight-bold">Leash Training</h3>
                                <p>Sit amet mattis quam, sit amet excepteur sint occaecat cupidatat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-5 mt-4 pt-xl-4">
                        <div class="col-sm-6">
                            <div class="bottom-gd">
                                <img src="{{asset('front/images/acccc.jpg')}}" alt="" class="img-fluid train">
                                <h3 class="my-3 font-weight-bold">Clicker Training</h3>
                                <p>Sit amet mattis quam, sit amet excepteur sint occaecat cupidatat.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                            <div class="bottom-gd">
                                <img src="{{asset('front/images/acc.jpg')}}" alt="" class="img-fluid train">
                                <h3 class="my-3 font-weight-bold">Basic Commands</h3>
                                <p>Sit amet mattis quam, sit amet excepteur sint occaecat cupidatat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fetured-sec mt-lg-0 mt-sm-5 mt-4">
                    <img src="{{asset('front/images/abb.jpg')}}"class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>



    <div class="team py-5" id="team">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 text-bl text-center font-weight-bold mb-sm-5 mb-4">Student Trainers
            </h3>
            <div class="row team-bottom pt-4">
                <div class="col-lg-3 col-sm-6 team-grid">
                    <img src="{{asset('front/images/am.jpg')}}" height="50px" class="img-fluid" alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Mark Henry</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook f1" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter f2" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus f3" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-grid mt-sm-0 mt-5">
                    <img src="{{asset('front/images/mma.jpg')}}" height="50px"class="img-fluid" alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Ronda Lusi</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook f1" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter f2" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus f3" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-grid mt-lg-0 mt-5">
                    <img src="{{asset('front/images/asaw.jpg')}}"height="50px" class="img-fluid" alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Brie Billa</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook f1" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter f2" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus f3" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-grid  mt-lg-0 mt-5">
                    <img src="{{asset('front/images/ma.jpg')}}" class="img-fluid" alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>John Doe</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook f1" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter f2" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus f3" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //team -->
    @endsection
