@extends('frontend.template')
@section('content')
<section class="banner" id="top" style="background-image: url({{asset('frontend/img/homepage-banner-image-1920x700.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-caption">
                    <div class="line-dec"></div>
                    <h2>Louer la voiture de vos rêves en un clic...</h2>
                    <div class="blue-button">
                        <a href="{{route('contact')}}">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main>
    <section class="our-services">
        <div class="container">
            <div class="row">
                @if (session()->has('statut'))
                        <p style="text-align: center; color:blue">{{session()->get('statut')}}</p>
                @endif
                <div class="col-md-7">
                    <div class="left-content">
                        <br>
                        <h4>A propos de nous</h4>
                        <p>Aenean hendrerit metus leo, quis viverra purus condimentum nec. Pellentesque a sem semper, lobortis mauris non, varius urna. Quisque sodales purus eu tellus fringilla.<br><br>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellus, id efficitur leo. In hac habitasse platea dictumst. Vel sequi odit similique repudiandae ipsum iste, quidem tenetur id impedit, eaque et, aliquam quod.</p>
                        <div class="blue-button">
                            <a href="{{asset('frontend/pages/about-us.html')}}">Découvrir plus</a>
                        </div>

                        <br>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="{{asset('frontend/img/about-1-720x480.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>



    <section id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                  <div class="section-heading">
                      <span>Contact Us</span>
                      <h2>les meilleures offres de voitures</h2>
                  </div>
                  <!-- Modal button -->

                  <div class="blue-button">
                    <a href="{{route('contact')}}">Nous contacter</a>
                  </div>
            </div>
        </div>
    </section>

    <section class="popular-places" id="popular">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Témoignages</span>
                        <h2>Nombreux sont ceux qui nous font confiance.</h2>
                    </div>
                </div>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="{{asset('frontend/img/popular_item_1.jpg')}}" alt="">
                        <div class="text-content">
                            <h4>John BONI</h4>
                            <span>"La qualité de leur voiture me surprend. Ce sont de vraies marveilles."</span>
                        </div>
                        <div class="plus-button">
                            <a href="{{asset('frontend/pages/testimonials.html')}}"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="{{asset('frontend/img/popular_item_2.jpg')}}" alt="">
                        <div class="text-content">
                            <h4>Prince ANIGBO</h4>
                            <span>"Compagnie fiable. Accueil chaleureux."</span>
                        </div>
                        <div class="plus-button">
                            <a href="{{asset('frontend/pages/testimonials.html')}}"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="{{asset('frontend/img/popular_item_3.jpg')}}" alt="">
                        <div class="text-content">
                            <h4>Erick DOSSOU</h4>
                            <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                        </div>
                        <div class="plus-button">
                            <a href="{{asset('frontend/pages/testimonials.html')}}"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="{{asset('frontend/img/popular_item_4.jpg')}}" alt="">
                        <div class="text-content">
                            <h4>John Doe</h4>
                            <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                        </div>
                        <div class="plus-button">
                            <a href="{{asset('frontend/pages/testimonials.html')}}"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="{{asset('frontend/img/popular_item_5.jpg')}}" alt="">
                        <div class="text-content">
                            <h4>John Doe</h4>
                            <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                        </div>
                        <div class="plus-button">
                            <a href="{{asset('frontend/pages/testimonials.html')}}"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="{{asset('frontend/img/popular_item_1.jpg')}}" alt="">
                        <div class="text-content">
                            <h4>John Doe</h4>
                            <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                        </div>
                        <div class="plus-button">
                            <a href="{{asset('frontend/pages/testimonials.html')}}"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="{{asset('frontend/img/popular_item_2.jpg')}}" alt="">
                        <div class="text-content">
                            <h4>John Doe</h4>
                            <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                        </div>
                        <div class="plus-button">
                            <a href="{{asset('frontend/pages/testimonials.html')}}"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
