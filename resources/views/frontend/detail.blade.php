@extends('frontend.template')
@section('content')
<section class="banner banner-secondary" id="top" style="background-image: url(img/banner-image-1-1920x300.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-caption">
                    <div class="line-dec"></div>
                    <h2>Détails de la voture</h2>
                </div>
            </div>
        </div>
    </div>
</section>
    <main>
        @if (session()->has('statut') && session()->has('nbreJours')  )
            <p style="text-align: center; color:blue">{{session()->get('statut')}} {{session()->get('nbreJours')}} jours.</p>
        @endif


 <!-- Detail Start -->
 <div class="container-fluid pt-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <h1 class="display-4 text-uppercase mb-5">{{$car->nom}}</h1>
                <div class="row mx-n2 mb-3">
                    <div class="col-md-3 col-6 px-2 pb-2">
                        <img class="img-fluid w-100" src="{{$car->photo}}" alt="" style=" height:200px;">
                    </div>
                    <div class="col-md-3 col-6 px-2 pb-2">
                        <img class="img-fluid w-100" src="{{asset('img/banner-image-1-1920x300.jpg')}}" alt="">
                    </div>
                    <div class="col-md-3 col-6 px-2 pb-2">
                        <img class="img-fluid w-100" src="{{asset('img/banner-image-1-1920x300.jpg')}}" alt="">
                    </div>
                    <div class="col-md-3 col-6 px-2 pb-2">
                        <img class="img-fluid w-100" src="{{asset('img/banner-image-1-1920x300.jpg')}}" alt="">
                    </div>
                </div>
                <h4>Brève description</h4>
                <p>{{$car->description}}</p>
                <div class="row pt-2">
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-car text-primary mr-2"></i>
                        <span>Model: 2015</span>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-cogs text-primary mr-2"></i>
                        <span>Automatic</span>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-road text-primary mr-2"></i>
                        <span>20km/liter</span>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-eye text-primary mr-2"></i>
                        <span>GPS Navigation</span>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-car text-primary mr-2"></i>
                        <span>Model: 2015</span>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-cogs text-primary mr-2"></i>
                        <span>Automatic</span>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-road text-primary mr-2"></i>
                        <span>20km/liter</span>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-eye text-primary mr-2"></i>
                        <span>GPS Navigation</span>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-car text-primary mr-2"></i>
                        <span>Model: 2015</span>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-cogs text-primary mr-2"></i>
                        <span>Automatic</span>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-road text-primary mr-2"></i>
                        <span>20km/liter</span>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-eye text-primary mr-2"></i>
                        <span>GPS Navigation</span>
                    </div>
                </div>
           </div>
            <div class="col-lg-4 mb-5" >
             <div class="bg-secondary p-5">
                    <h3 class="text-primary text-center mb-4">Faire ma demande pour louer cette voiture</h3>
                    <form action="{{route('detailPost',['id'=>$car->id])}}" method="post">
                        @csrf
                    <div class="form-group">
                        <div class="time" id="time1" data-target-input="nearest">
                            <input type="date" class="form-control p-4 datetimepicker-input" name="debut" placeholder="Date de début d'emprunt"
                                data-target="#time1" data-toggle="datetimepicker" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="time" id="time1" data-target-input="nearest">
                            <input type="date" class="form-control p-4 datetimepicker-input" name="fin" placeholder="Date de fin d'emprunt"
                                data-target="#time1" data-toggle="datetimepicker" />
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <button  class="btn btn-primary btn-block @if (!auth()->user()) disabled @endif" type="submit" style="height: 50px;">Louer</button>
                        @if (!auth()->user())
                        <p style="color: blue">Connectez vous pour louer cette voiture.</p>
                        @endif
                        @if($car->quantiteDispo == 0)
                        <p style="color: blue">Cette voiture n'est actuellement pas disponible.</p>
                        @endif
                    </div>
                </form>
                </div>

        </div>
    </div>
</div>
<!-- Detail End -->

</main>

@endsection
