<!--//================Header start==============//-->
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <ul>
                    <li><a href="#" onclick="event.preventDefault();"><i class="fa fa-envelope" aria-hidden="true"></i>ieijesusmaestro@hotmail.com</a></li>
                    <li><a href="#" onclick="event.preventDefault();"><i class="fa fa-phone" aria-hidden="true"></i>01 2585427</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <ul class="float-sm-end float-xs-center">
                    <li><a href="{{route("login")}}"><i class="fa fa-sign-in" aria-hidden="true"></i>Zona Admin</a></li>
                    {{-- <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li> --}}
                    {{-- <li><a href="#" class="cart-box"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>
<header>
  <div id="main-menu" class="wa-main-menu">
    <!-- Menu -->
    <div class="wathemes-menu relative">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                    <div class="right-pink-shape">
                      <!-- navbar -->
                      <nav class="navbar navbar-light navbar-expand-lg navbar-default theme-bg mar0" role="navigation">
                        <!-- Logo -->
                        {{-- <a class="navbar-brand" href="{{route("home")}}">
                          <img class="site_logo" alt="IEI Jesús Maestro"  src="{{asset("assets/img/site-logo.png")}}"/>
                        </a> --}}
                        <span class="navbar-brand mb-0 h1"></span>
                        <!-- Button For Responsive toggle -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra" aria-controls="barra" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="sr-only">Desplegar menú</span>
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- Navbar Collapse -->
                        <div id="barra" class="collapse navbar-collapse justify-content-end">
                            <!-- nav -->
                            <ul class="navbar-nav nav mr-auto">
                                <li class="nav-item"><a href="#" class="nav-link">Inicio</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Infraestructura</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Horarios</a></li>
                                {{-- <li class="nav-item"><a href="#" class="nav-link active">Propuesta Pedagógica <span class="sr-only">(página actual)</span></a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Admisión</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Noticias</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li> --}}
                            </ul>
                        </div>
                        <!-- navbar-collapse -->
                      </nav>
                      <!-- navbar -->
                  </div>
              </div>
              <!-- col-md-12 -->
          </div>
          <!-- row -->
      </div>
      <!-- container -->

    </div>
    <!--  Menu -->
  </div>
</header>
<!--//================Header end==============//-->



{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route("home")}}">IEI Jesus Maestro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="col-4"></div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{$menu=="home"?"active":""}}" {{$menu=="home"?"aria-current=\"page\"":""}} href="{{route("home")}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{$menu=="infraestructura"?"active":""}}" {{$menu=="infraestructura"?"aria-current=\"page\"":""}} href="{{route("infraestructura")}}">Infraestructura</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{$menu=="horarios"?"active":""}}" {{$menu=="horarios"?"aria-current=\"page\"":""}} href="{{route("horarios")}}">Horarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{$menu=="propuesta"?"active":""}}" {{$menu=="propuesta"?"aria-current=\"page\"":""}} href="{{route("propuesta")}}">Propuesta Pedagógica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{$menu=="admision"?"active":""}}" {{$menu=="admision"?"aria-current=\"page\"":""}} href="{{route("admision")}}">Admisión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{$menu=="noticias"?"active":""}}" {{$menu=="noticias"?"aria-current=\"page\"":""}} href="{{route("noticias")}}">Noticias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{$menu=="contacto"?"active":""}}" {{$menu=="contacto"?"aria-current=\"page\"":""}} href="{{route("contacto")}}">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav> --}}
