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
        <link rel="stylesheet" href="{{asset('second/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('second/css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('second/css/fontAwesome.css')}}">
        <link rel="stylesheet" href="{{asset('second/css/hero-slider.css')}}">
        <link rel="stylesheet" href="{{asset('second/css/owl-carousel.css')}}">
        <link rel="stylesheet" href="{{asset('second/css/style.css')}}">
        <link rel="preconnect" href="{{asset('second/https://fonts.gstatic.com')}}">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
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
                                <li>
                                @if(Auth()->user())
                                <li><a href="">Déconnexion</a></li>
                                @else
                                <li><a href="{{route('login')}}">Connexion</a></li>
                                @endif
                            </li>

                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>




    <section class="banner banner-secondary" id="top" style="background-image: url(img/banner-image-1-1920x300.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>

    <!-- Detail Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase mb-5">Mercedes Benz R3</h1>
            <div class="row align-items-center pb-2">
                <div class="col-lg-6 mb-4">
                    <img class="img-fluid" src="img/bg-banner.jpg" alt="">
                </div>
                <div class="col-lg-6 mb-4">
                    <h4 class="mb-2">$99.00/Day</h4>
                    <div class="d-flex mb-3">
                        <h6 class="mr-2">Rating:</h6>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>(250)</small>
                        </div>
                    </div>
                    <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt</p>
                    <div class="d-flex pt-1">
                        <h6>Share on:</h6>
                        <div class="d-inline-flex">
                            <a class="px-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="px-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="px-2" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="px-2" href=""><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-n3 mt-lg-0 pb-4">
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
    </div>
    <!-- Detail End -->


    <!-- Car Booking Start -->
    <div class="container-fluid pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mb-4">Personal Detail</h2>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" placeholder="First Name" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" placeholder="Last Name" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="email" class="form-control p-4" placeholder="Your Email" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" placeholder="Mobile Number" required="required">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="bg-secondary p-5 mb-5">
                        <h2 class="text-primary mb-4">Payment</h2>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal">
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Direct Check</label>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                            </div>
                        </div>
                        <button class="btn btn-block btn-primary py-3">Reserve Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Car Booking End -->

    </main>

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
                            <li><span>Email:</span><a href="#">dorianeNouvivi@gmail.com</a></li>
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
