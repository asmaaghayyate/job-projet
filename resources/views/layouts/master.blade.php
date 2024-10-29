<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Work Scout</title>
<link href="{{ asset('assets/images/logo1.png')}}" rel="icon">
<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS de Bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMjB4cH1/4r15W9n2m30v3Re/Tq7w4v3H0Z4H20" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<!-- Optionnel : JavaScript de Bootstrap -->

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/colors/green.css')}}" id="colors">


{{-- <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }} "> --}}










<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<style>

    .icon-color {
        color: #53b427; /* Change ici pour la couleur souhaitée */
        font-size: 24px; /* Ajuste la taille si nécessaire */
    }

</style>

<style>


.manage-table td {
   /* Limiter la largeur des cellules */
   /* Empêche le texte de s'enrouler */
     /* Cache le texte qui dépasse */
  /* Affiche "..." pour le texte trop long */
    padding: 5px 10px; /* Ajouter du padding pour espacer le texte */
    margin: 0; /* Pas de marge externe pour les cellules */
    font-size: 0.85em; /* Réduire légèrement la taille de la police */
}

.manage-table th {
   /* Limiter la largeur des cellules */
   /* Empêche le texte de s'enrouler */
     /* Cache le texte qui dépasse */
  /* Affiche "..." pour le texte trop long */
    padding: 5px 10px; /* Ajouter du padding pour espacer le texte */
    margin: 0; /* Pas de marge externe pour les cellules */
    font-size: 0.85em; /* Réduire légèrement la taille de la police */
}

.btn-google {
    display: inline-flex;
    align-items: center;
    padding: 10px 20px;
    color: white;
    background-color: #4285F4; /* Couleur de Google */
    border-radius: 5px;
    text-decoration: none;
}

.btn-google i {
    margin-right: 8px; /* Espacement entre l'icône et le texte */
}

.btn-google:hover {
    background-color: #357AE8; /* Couleur au survol */
}






.css-ylydhb{
    color: rgb(89, 89, 89);
font-family: "Indeed Sans", "Noto Sans", "Helvetica Neue", Helvetica, Arial, "Liberation Sans", Roboto, Noto, sans-serif;
font-size: 1rem;
font-weight: 400;
line-height: 1.5;
box-sizing: border-box;
margin-block: 0px;
margin-inline: 0px;
min-inline-size: 0px;
grid-area: header;
flex-flow: column;
gap: 0px;
inline-size: 100%;
display: flex;
-webkit-box-pack: justify;
justify-content: space-between;
min-block-size: 10.5rem;
background-color: rgb(250, 249, 248);
overflow: hidden;
border-bottom-color: rgb(212, 210, 208);
block-size: 12.5rem;
flex-direction: row;
-webkit-box-align: center;
align-items: center;
border-radius: 1rem;
padding-block-start: 0px;
padding-inline: 0px;
border-block-end: 0px;
margin-block-end: 1rem;
}
.css-1mredmc svg {
color: rgb(89, 89, 89);
    font-family: "Indeed Sans", "Noto Sans", "Helvetica Neue", Helvetica, Arial, "Liberation Sans", Roboto, Noto, sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    fill: none;
    box-sizing: inherit;
    block-size: auto;
    inline-size: 100%;
    max-block-size: 100%;
    max-inline-size: 100%;
}

.css-hqwg8u > div {
color: rgb(89, 89, 89);
    font-family: "Indeed Sans", "Noto Sans", "Helvetica Neue", Helvetica, Arial, "Liberation Sans", Roboto, Noto, sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    box-sizing: border-box;
    margin-block: 0px;
    margin-inline: 0px;
    min-inline-size: 0px;
    inline-size: 100%;
    max-block-size: 100%;
    max-inline-size: 12.5rem;
    align-items: flex-end;
    display: flex;
    block-size: 100%;
}
.css-1hnys4y:not(:empty) {
color: rgb(89, 89, 89);
    font-family: "Indeed Sans", "Noto Sans", "Helvetica Neue", Helvetica, Arial, "Liberation Sans", Roboto, Noto, sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    display: flex;
    box-sizing: border-box;
    margin-block: 0px;
    margin-inline: 0px;
    min-inline-size: 0px;
    grid-area: content;
    flex-direction: column;
    gap: 0px;
    margin-block-end: 1rem;

}

.css-ig5878 {
box-sizing: inherit;
    font-family: "Indeed Sans", "Noto Sans", "Helvetica Neue", Helvetica, Arial, "Liberation Sans", Roboto, Noto, sans-serif;
    font-weight: inherit;
    color: rgb(89, 89, 89);
    font-size: 1rem;
    line-height: 1.5;
}
.css-1z07c37 {
box-sizing: inherit;
    margin: 0px;
    margin-block: 0px 0.5rem;
    margin-inline: 0px;
    color: rgb(45, 45, 45);
    font-weight: 700;
    font-family: "Indeed Sans", "Noto Sans", "Helvetica Neue", Helvetica, Arial, "Liberation Sans", Roboto, Noto, sans-serif;
    font-size: 1.25rem;
    line-height: 1.5;
}


.css-r3yea6 {
box-sizing: inherit;
    margin-block: 0px 1rem;
    margin-inline: 0px;
    color: rgb(45, 45, 45);
    font-weight: 700;
    font-family: "Indeed Sans", "Noto Sans", "Helvetica Neue", Helvetica, Arial, "Liberation Sans", Roboto, Noto, sans-serif;
    font-size: 1.75rem;
    line-height: 1.25;
    margin: 0px;
    max-inline-size: 350px;
    text-shadow: rgb(250, 249, 248) 0px 0px 16px, rgb(250, 249, 248) 0px 0px 8px, rgb(250, 249, 248) 0px 0px 4px;

}
.css-ig5878 {
box-sizing: inherit;
    font-family: "Indeed Sans", "Noto Sans", "Helvetica Neue", Helvetica, Arial, "Liberation Sans", Roboto, Noto, sans-serif;
    font-weight: inherit;
    color: rgb(89, 89, 89);
    font-size: 1rem;
    line-height: 1.5;
}
.css-ylydhb:not(:empty) {
color: rgb(89, 89, 89);
    font-family: "Indeed Sans", "Noto Sans", "Helvetica Neue", Helvetica, Arial, "Liberation Sans", Roboto, Noto, sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    box-sizing: border-box;
    margin-block: 0px;
    margin-inline: 0px;
    min-inline-size: 0px;
    grid-area: header;
    flex-flow: column;
    gap: 0px;
    inline-size: 100%;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    min-block-size: 10.5rem;
    background-color: rgb(250, 249, 248);
    overflow: hidden;
    border-bottom-color: rgb(212, 210, 208);
    block-size: 12.5rem;
    flex-direction: row;
    -webkit-box-align: center;
    align-items: center;
    border-radius: 1rem;
    padding-block-start: 0px;
    padding-inline: 0px;
    border-block-end: 0px;
    margin-block-end: 1rem;

}

.css-1hnys4y:not(:empty) {
color: rgb(89, 89, 89);
    font-family: "Indeed Sans", "Noto Sans", "Helvetica Neue", Helvetica, Arial, "Liberation Sans", Roboto, Noto, sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    display: flex;
    box-sizing: border-box;
    margin-block: 0px;
    margin-inline: 0px;
    min-inline-size: 0px;
    grid-area: content;
    flex-direction: column;
    gap: 0px;
    margin-block-end: 1rem;
}

.css-wyce5m {
color: rgb(89, 89, 89);
    font-family: "Indeed Sans", "Noto Sans", "Helvetica Neue", Helvetica, Arial, "Liberation Sans", Roboto, Noto, sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    box-sizing: border-box;
    margin-block: 0px;
    margin-inline: 0px;
    min-inline-size: 0px;
    background-color: rgb(255, 255, 255);
    display: grid;
    -webkit-box-pack: center;
    justify-content: center;
    padding: 3rem;
    grid-template-columns: 48rem auto;
    grid-template-areas: "topAlert ." "aboveHeader ." "header topSidebar" "content sidebar" "errorSummary sidebar" "footer sidebar" "underFooter sidebar";
}
    </style>

<body>


<div id="wrapper">


<!-- Header
================================================== -->
<header style="">
<div class="container">



    <div class="sixteen columns">

        <!-- Logo -->
        <div id="logo">
            <h1><a href="{{route('index')}}">
                <img src="{{ asset('assets/images/logo.png')}}" alt="Work Scout" /></a></h1>
        </div>

        <!-- Menu -->
        <nav id="navigation" class="menu">

            <ul id="responsive">

                <li>
                    <a href="{{ route('index') }}">{{ __('navbar.home') }}</a></li>
                </li>

                <li>
                                           <a href="#">Pages</a>

                    @if(Auth::check())
                    <ul>
                        <li><a href="{{route('lescandidatures')}}">Les candidatures</a></li>

                    </ul>
                     @endif
                </li>



                <li>

                <a href="{{route('publierannance')}}" id="current">Publier une offre d'emploi</a>

                </li>


            </ul>



            <ul class="float-right">

                @if(!Auth::check())
                <li><a href="{{route('formregister')}}"><i class="fa fa-user"></i>S'inscrire</a></li>
                <li><a href="{{route('formlogin')}}"><i class="fa fa-lock"></i>Se connecter</a></li>
                @endif


                {{-- @if(Auth::check())
                <li>
                 <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                </i> Deconnexion</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf

                  </form>

                </li>
                @endif
 --}}
    @if(Auth::check())
 <li>
<a>
    <div class="notification-icon">
        <i class="fas fa-bell"></i>

    </div>
</a>
 </li>
   @endif


                @if(Auth::check())
                <li><a href=""><i class="fa fa-user"></i> {{auth()->user()->name}}</a>
                    <ul>
                        <li><a href="{{route('monprofile')}}"><i class="fa fa-user"></i>Profile</a></li>


                        <li>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out-alt"></i> Deconnexion</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf

                                </form>
                        </li>


                    </ul>
                </li>
                @endif

            </ul>

        </nav>

        <!-- Navigation -->
        <div id="mobile-navigation">
            <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
        </div>

    </div>
</div>
</header>



<!-- Banner
================================================== -->


<!-- Content
================================================== -->

<!-- Categories -->
<div class="container">

    @yield('content')
</div>


<!-- Testimonials -->


<!-- Infobox -->

<!-- Recent Posts -->












<!-- Footer
================================================== -->


<div id="footer">
    <!-- Main -->
    <div class="container">

        <div class="seven columns">
            <h4>About</h4>
            <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
            <a href="#" class="button">Get Started</a>
        </div>

        <div class="three columns">
            <h4>Company</h4>
            <ul class="footer-links">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Our Blog</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Hiring Hub</a></li>
            </ul>
        </div>

        <div class="three columns">
            <h4>Press</h4>
            <ul class="footer-links">
                <li><a href="#">In the News</a></li>
                <li><a href="#">Press Releases</a></li>
                <li><a href="#">Awards</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Timeline</a></li>
            </ul>
        </div>

        <div class="three columns">
            <h4>Browse</h4>
            <ul class="footer-links">
                <li><a href="#">Freelancers by Category</a></li>
                <li><a href="#">Freelancers in USA</a></li>
                <li><a href="#">Freelancers in UK</a></li>
                <li><a href="#">Freelancers in Canada</a></li>
                <li><a href="#">Freelancers in Australia</a></li>
                <li><a href="#">Find Jobs</a></li>

            </ul>
        </div>

    </div>

    <!-- Bottom -->
    <div class="container">
        <div class="footer-bottom">
            <div class="sixteen columns">
                <h4>Follow Us</h4>
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                    <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                </ul>
                <div class="copyrights">©  Copyright 2015 by <a href="#">Work Scout</a>. All Rights Reserved.</div>
            </div>
        </div>
    </div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="{{ asset('assets/scripts/jquery-2.1.3.min.js')}}"></script>
<script src="{{ asset('assets/scripts/custom.js')}}"></script>
<script src="{{ asset('assets/scripts/jquery.superfish.js')}}"></script>
<script src="{{ asset('assets/scripts/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('assets/scripts/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{ asset('assets/scripts/jquery.themepunch.showbizpro.min.js')}}"></script>
<script src="{{ asset('assets/scripts/jquery.flexslider-min.js')}}"></script>
<script src="{{ asset('assets/scripts/chosen.jquery.min.js')}}"></script>
<script src="{{ asset('assets/scripts/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/scripts/waypoints.min.js')}}"></script>
<script src="{{ asset('assets/scripts/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('assets/scripts/jquery.jpanelmenu.js')}}"></script>
<script src="{{ asset('assets/scripts/stacktable.js')}}"></script>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        CKEDITOR.replace('description');
    });

 document.addEventListener("DOMContentLoaded", function() {
        CKEDITOR.replace('lettre_motivation');
    });

</script>

</body>
</html>
