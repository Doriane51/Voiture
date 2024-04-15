<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Site de location de voiture</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/css/fontAwesome.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/hero-slider.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/owl-carousel.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="{{asset('frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>

<body>
    <div class="wrap">
        <header id="header" style="background-color: belge;">
            <div class="container" >
                <div class="row" >
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="{{asset('frontend/pages/index.html')}}"><div class="logo">
                            <img src="{{asset('frontend/img/logo.png')}}" alt="Venue Logo" style="width:140px; margin-top:10px;">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li><a href="{{route('index')}} ">Accueil</a></li>
                                <li><a href="{{route('offers')}}">Offres</a></li>
                                <li><a href="{{route('about')}} ">A Propos</a></li>
                                <li><a href="{{route('team')}} ">Team</a></li>
                                <li><a href="{{route('contact')}} ">Contact</a></li>
                                <li>
                                @if(auth()->user())
                                <li><a href="{{route('deconnexion')}}">Déconnexion</a></li>
                                @else
                                <li><a href="{{route('login')}}">Connexion</a></li>
                                @endif</li>
                            <li>
                                @if (auth()->user())
                                    @if(auth()->user()->estAdmin)
                                    <li><a href="{{ route('indexAdmin') }}">Gestion des voitures</a></li>
                                    @else
                                    <li><a href="{{ route('listLocation') }}">Voir mes locations</a></li>
                                    @endif

                                @endif

                            </li>

                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>


