<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="about-veno">
                    <div class="logo">
                        <img src="{{asset('frontend/img/logo.png')}}" alt="Venue Logo" style="width:140px; margin-top:10px;">
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
