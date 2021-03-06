<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <![endif]-->
    <meta name="keywords" content="Educación Inicial, IEI Jesús Maestro, Colegio Inicial Chorrillos" />
    <meta name="description" content="Institución Educativa Inicial Jesús Maestro, Educación Inicial, Educación en Valores" />
    <meta name="author" content="Arturo Jesús Martínez Sáenz" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset("assets/img/favicon.ico")}}" type="image/x-icon">
    <link rel="icon" href="{{asset("assets/img/favicon.ico")}}" type="image/x-icon">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Master Css -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <title>@yield('title')</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--//================preloader  start==============//-->
        <div class="loader">
            <div class="rotating">
                <img src ="{{asset("assets/img/pin-preloader.png")}}" class="flip">
                <h3>IEI Jesús Maestro</h3>
            </div>
        </div>
        <!--//================preloader  end==============//-->
        @include('snippets.nav')
        @yield('body')
        @include('snippets.footer')
    <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery.min.js")}}"></script>
    <script src="{{asset("assets/plugin/megamenu/js/hover-dropdown-menu.js")}}"></script>
    <script src="{{asset("assets/plugin/megamenu/js/jquery.hover-dropdown-menu-addon.js")}}"></script>
    <script src="{{asset("assets/plugin/owl-carousel/js/owl.carousel.min.js")}}"></script>
    <script src="{{asset("assets/plugin/fancyBox/js/jquery.fancybox.pack.js")}}"></script>
    <script src="{{asset("assets/plugin/fancyBox/js/jquery.fancybox-media.js")}}"></script>
    <script src="{{asset("assets/js/main.js")}}"></script>
  </body>
</html>
