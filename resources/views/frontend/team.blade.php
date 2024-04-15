@extends('frontend.template')
@section('content')
<main>
    <section class="popular-places" id="popular">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item popular-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="{{asset('frontend/img/team-image-2-646x680.jpg')}}" alt="">
                            </div>
                            <div class="text-content">
                                <h4>Doriane Nouvivi</h4>
                                <span>Développeur</span>
                            </div>
                            <div class="plus-button">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item popular-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="{{asset('frontend/img/team-image-2-646x680.jpg')}}" alt="">
                            </div>
                            <div class="text-content">
                                <h4>CAKPO Anicet</h4>
                                <span>Digital Maketeur</span>
                            </div>
                            <div class="plus-button">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                  <div class="section-heading">
                      <span>Lorem ipsum dolor.</span>
                      <h2>Vivamus nec vehicula felis</h2>
                  </div>
                  <!-- Modal button -->

                  <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi blanditiis, esse deserunt assumenda! Tempora nulla natus illum soluta quasi, nisi, in quaerat cumque corrupti ipsum impedit necessitatibus expedita minus harum, fuga id aperiam autem architecto odio. Perferendis eius possimus ex itaque tenetur saepe id quis dicta voluptas, corrupti sapiente hic!</p>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>

    <section class="popular-places">
        <div class="container text-center">
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>

            <br>

            <div class="blue-button">
                <a href="{{route('contact')}} ">Contact Us</a>
            </div>
        </div>
    </section>
</main>
@endsection
