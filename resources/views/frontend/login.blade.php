<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Site de location de voiture | Login</title>

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
        <style>
            @import url(https://fonts.googleapis.com/css?family=Calibri:400,300,700);

body {

    font-family: 'Calibri', sans-serif !important;
    font-size: 14px;
}
a{
    text-decoration: none;
}
.card {
    margin: auto;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    width: 450px;
}

.alert {
    padding: .5rem .5rem !important;
}

@media(max-width:768px) {
    .card {
        width: 90% !important;
    }


}

.upper {
    padding: 6vh 6vh 3vh 6vh;
}

.lower {
    padding: 3vh 0 3vh;
    text-align: center;
}

.heading {
    display: flex;
    align-items: center;
    vertical-align: middle;
}

.heading p {
    margin-bottom: 0;
}

input {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 0.75rem;
    outline: none;
    width: 100%;
    min-width: unset;
    background: rgba(151, 151, 151, 0.212) !important;
}
.eye{
    background: rgba(151, 151, 151, 0.212) !important;
    padding: 1rem;

}
.row>*{
    padding-right: 0 !important;
    padding-left: 0 !important;

}
.form-element {
    margin: 3vh 0;
}

form .col-3,
.col-9,
.col-1,
.col--11 {
    padding: 0;
    width: min-content;
}

form .col-11 {
    padding-left: 10px;
}

form .col-1 {
    display: flex;
    align-items: center;
    color: red;
    font-size: 3vh;
    justify-content: center;
}

#code {
    text-align: center;
}

form .row {
    margin: 0;
}

hr {
    margin: 0;
    border-top: 2px solid rgba(0, 0, 0, .1);
}

#input-header {
    color: grey;
}

.invalid {
    color: grey;
    line-height: 1.2;
}

.btn {
    width: 50%;
    color: white;
    padding: 1.5vh 0;
}

.btn:focus {
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none;
}

.btn:hover {
    color: white;
}

input:focus::-webkit-input-placeholder {
    color: transparent;
}

input:focus:-moz-placeholder {
    color: transparent;
}

/* FF 4-18 */
input:focus::-moz-placeholder {
    color: transparent;
}

/* FF 19+ */
input:focus:-ms-input-placeholder {
    color: transparent;
}

input{
    border: none;
}
/* IE 10+ */
        </style>

    </head>

<body>
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="{{asset('frontend/pages/index.html')}}"><div class="logo">
                            <img src="{{asset('frontend/img/logo.png')}}" alt="Venue Logo">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li><a href="{{route('index')}} ">Accueil</a></li>
                                <li><a href="{{route('offers')}}">Offres</a></li>
                                <li><a href="{{route('about')}} ">A Propos</a></li>
                                <li><a href="{{route('team')}} ">Team</a></li>
                                <li><a href="{{route('testimonial')}} ">Témoignages</a></li>
                                <li><a href="{{route('contact')}} ">Contact</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>



<div class="Container ">


    <div class="card mt-5" style="background-color: #fff !important; border:solid 0px !important;">
        <div class="upper">
            <div class="row">
                <div class="col-8 heading">
                    <h4><b>Connectez - Vous</b></h4>
                </div>

            </div>
            <form id="formL" method="post" action="{{route('loginPost')}}">
                @csrf
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p style="text-align: center; color:red">{{$error}}</p>
                    @endforeach
                @endif
                <div id="alert" class="mt-1" role="alert">

                </div>
                <div class="form-element">
                    <span id="input-header">E-mail*</span>
                    <input type="email" id="order_id" name="email"
                    placeholder="email@gmail.com">
                </div>
                <div class="form-element ">
                    <span id="input-header">Mot de pase</span>
                    <div class="row p-0">
                        <div class="d-flex align-items-center">
                            <input type="password" name="password" id="phone"
                             placeholder="pass*****">
                        </div>

                    </div>
                </div>
                <div class="form-element">
                    <div class="row invalid">

                        <div class="col-11">
                            <h6 class="text-secondary mb-3 text-center">
                                <p class="mb-0">Je n'est pas de compte</p><a href="{{route('register')}}" class="text-info">Créer un
                                    compte </a>

                        </div>
                    </div>
                </div>

                <div class="lower">
                    <button class="btn btn-warning" type="submit" id="loader">Se connecter</button>
                </div>

            </form>

        </div>


    </div>

    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="{{asset('frontend/img/footer_logo.png')}}" alt="Venue Logo">
                        </div>
                        <p>Faites nous confiance pour la location de voiture de tout genre.</p>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Liens utiles</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="{{asset('frontend/pages/inde.html')}}"><i class="fa fa-stop"></i>Accueil</a></li>
                                    <li><a href="{{asset('frontend/pages/about.html')}}"><i class="fa fa-stop"></i>A propos</a></li>
                                    <li><a href="{{asset('frontend/pages/team.html')}}"><i class="fa fa-stop"></i>Team</a></li>
                                    <li><a href="{{asset('frontend/pages/contact.html')}}"><i class="fa fa-stop"></i>Nous contacter</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="{{asset('frontend/pages/testimonials.html')}}"><i class="fa fa-stop"></i>Témoignages</a></li>
                                    <li><a href="{{asset('frontend/pages/blog.html')}}"><i class="fa fa-stop"></i>Blog</a></li>
                                    <li><a href="{{asset('frontend/pages/terms.html')}}"><i class="fa fa-stop"></i>Conditions d'utilisations</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Où sommes-nous?</h4>
                        </div>
                        <p><i class="fa fa-map-marker"></i>Calavi Zogbadjè</p>
                        <ul>
                            <li><span>Tél:</span><a href="#">+229 99 52 86 05</a></li>
                            <li><span>Email:</span><a href="#">DorianeNouvivi@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <p>- Copyright © 2023 Doriane's Services -</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="{{asset('frontend/js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>

    <script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>

    <script src="{{asset('frontend/js/datepicker.js')}}"></script>
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    </body>
    </html>
