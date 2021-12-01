<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>VademecumGeriaGT</title>
    <link rel="icon" href="{{ asset('img/icono.jpg') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



       <!-- Favicon -->
       <link href="img/favicon.ico" rel="icon">

       <!-- Google Web Fonts -->
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

       <!-- Icon Font Stylesheet -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

       <!-- Libraries Stylesheet -->
       <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
       <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

       <!-- Customized Bootstrap Stylesheet -->
       <link href="css/bootstrap.min.css" rel="stylesheet">

       <!-- Template Stylesheet -->
       <link href="css/style.css" rel="stylesheet">

</head>

<body>



    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="{{ route('inicio') }}" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><i class="fas fa-pills"></i> VademecumGeriaGT</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href=" {{ route('inicio') }} " class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}" >Inicio</a>
                        <a href="{{ route('guiaatc') }}" class="nav-item nav-link {{ (request()->is('guiaatc')) ? 'active' : '' }}" >Guia ATC</a>
                        <form method="get" action="{{ route('search') }}" style="position: relative; margin-left: 30px; margin-top: 25px;">
                            <div class="input-group">
                                @csrf
                                <input name="medicine" type="search" class="form-control border-primary w-50" placeholder="Buscar" aria-label="search">
                                <button type="submit" class="btn border-0 w-25" style="background-color: #13c5dd; color: white;"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->





        <main class="py-4">
            @yield('content')
        </main>




    {{-- POPUP DESARROLLADORES --}}

    <style>

        .modal-body iframe{
            height: auto;
            width: 100%;
        }

    </style>


    <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-body">
                <button data-dismiss="modal" class="close">&times;</button>

                <h4>Desarrolladores</h4>
                <div class="github-card" data-user="Fernatzoc"></div>
                <div class="github-card" data-user="RodrigoJuarezGT"></div>

                <h4>Repositorio del Proyecto</h4>
                <div class="text-center">
                    <a href="https://github.com/jo22al/Clasificacion_ATC_Web" target="_blank">
                        <i class="fab fa-github" style="font-size: 60px"></i>
                    </a>
                </div>

            </div>
        </div>
        </div>
    </div>


    {{--FIN POPUP DESARROLLADORES --}}

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5 text-center">
        Echo con <i class="fas fa-heart" style="color: white"></i> en Guatemala
        <img src="img/mapa_guate.webp" width="70px" height="auto" alt="">
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-primary" href="#">vademecumgeriagt.com</a> Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                        <a class="login-trigger" href="#" data-target="#login" data-toggle="modal">DESARROLLADORES</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://lab.lepture.com/github-cards/widget.js"></script>


</body>

</html>


