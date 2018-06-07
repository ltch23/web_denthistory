<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>DentHistory</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>
<body>

<!-- #header -->
<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="{{'/'}}" class="app_name">DentHistory</a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    @if( \Illuminate\Support\Facades\Auth::user()->tipo == false)
                        <li><a href="{{'/inicio'}}">Inicio</a></li>
                        <li><a href="{{'/perfil'}}">Perfil</a></li>
                        <li><a href="{{'/historial'}}">Historial</a></li>
                        <li><a href="{{'/odontograma'}}">Odontograma</a></li>
                        <li><a href="{{'/autorizar'}}">Autorizar a Doctor</a></li>
                    @else
                        <li><a href="{{'/inicio_doc'}}">Inicio</a></li>
                        <li><a href="{{'/perfil_doc'}}">Perfil</a></li>
                        <li><a href="{{'/pacientes'}}">Pacientes</a></li>
                    @endif

                    <li><a href="{{url('/logout')}}">Cerrar Sesión</a></li>
                </ul>

            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header>

@yield('content')

<!-- start footer Area
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            </p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
-->
<!-- End footer Area -->
<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA')}}"></script>
<script src="{{asset('js/easing.min.js')}}"></script>
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/parallax.min.js')}}"></script>
<script src="{{asset('js/superfish.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>



