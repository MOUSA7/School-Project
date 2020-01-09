@extends('frontend.layout.F_layout')

@section('content')
   <div class="banner_w3lspvt-2">
    </div>
    <section class="contact py-5">
        <div class="container py-xl-5 py-lg-3">

            @if(Session::has('msg'))
                <p class="alert alert-info">{{ Session::get('msg') }}</p>
            @endif

            <h3 class="title-w3 text-bl text-center font-weight-bold mb-sm-5 mb-4">Contact Us</h3>
            <!-- mail -->
            <div class="row mail-w3l-agile pt-xl-4">
                <div class="col-md-5 contact-left-w3ls">
                    <h3>Contact Info</h3>
                    <div class="row visit">
                        <div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
                            <span class="fa fa-home" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 contact-text-agileinf0">
                            <h4>Visit us</h4>
                            <p>Parma Via Modena,BO, Italy</p>
                            <p>Lorem ipsum dolor.</p>
                        </div>
                    </div>
                    <div class="row mail-w3 my-4">
                        <div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
                            <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 contact-text-agileinf0">
                            <h4>Mail us</h4>
                            <p><a href="mailto:info@example.com">info@example.com</a></p>
                        </div>
                    </div>
                    <div class="row call">
                        <div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
                            <span class="fa fa-phone" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 contact-text-agileinf0">
                            <h4>Call us</h4>
                            <p>+18044261149</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 agileinfo_mail_grid_right mt-md-0 mt-5">
                    <form action="{{route('frontend.contact')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" required="">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Message......." required=""></textarea>
                        </div>
                        <button type="submit" class="btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @stop
