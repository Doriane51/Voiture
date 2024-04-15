@extends('frontend.template')
@section('content')
<section class="banner banner-secondary" id="top" style="background-image: url(img/banner-image-1-1920x300.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-caption">
                    <div class="line-dec"></div>
                    <h2>Nos offres de voitures</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<main>
    <section class="featured-places">
        <div class="container">
            <div class="row">
                @foreach ($allCars as $car)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img class="img-fluid w-100" src="{{$car->photo}}" alt="" style="height:250px">
                        </div>

                        <div class="down-content" >
                        <div style="height:200px">
                            <h4>{{$car->nom}}</h4>
                            <h5>{{$car->marque}}</h5>

                            <span><strong><sup>{{$car->prixLocation}}</sup>F CFA</strong> Par jour</span>

                            <p>{{substr($car->description, 0, 60)}}...</p>
                        </div>
                            <div class="text-button">
                                <a href="{{route('detail', ['id'=>$car->id])}}">Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

{{--
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="{{asset('frontend/img/offer-1-720x480.jpg')}}" alt="">
                        </div>

                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <span>from <strong><sup>$</sup>120</strong> per weekend</span>

                            <p>Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.</p>

                            <div class="text-button">
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="{{asset('frontend/img/offer-1-720x480.jpg')}}" alt="">
                        </div>

                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <span>from <strong><sup>$</sup>120</strong> per weekend</span>

                            <p>Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.</p>

                            <div class="text-button">
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img/offer-4-720x480.jpg" alt="">
                        </div>

                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <span>from <strong><sup>$</sup>120</strong> per weekend</span>

                            <p>Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.</p>

                            <div class="text-button">
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img/offer-5-720x480.jpg" alt="">
                        </div>

                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <span>from <strong><sup>$</sup>120</strong> per weekend</span>

                            <p>Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.</p>

                            <div class="text-button">
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img/offer-6-720x480.jpg" alt="">
                        </div>

                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <span>from <strong><sup>$</sup>120</strong> per weekend</span>

                            <p>Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.</p>

                            <div class="text-button">
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
</main>
@endsection
