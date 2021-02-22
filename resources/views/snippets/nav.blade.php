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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#barra" aria-controls="barra" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="sr-only">Desplegar menú</span>
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- Navbar Collapse -->
                        <div id="barra" class="collapse navbar-collapse justify-content-end">
                            <!-- nav -->
                            <ul class="navbar-nav nav">
                                <li class="nav-item"><a href="{{route("home")}}" class="nav-link {{$menu=="home"?"active":""}}">Inicio{!!$menu=="home"?"<span class=\"sr-only\">(página actual)</span>":""!!}</a></li>
                                <li class="nav-item"><a href="{{route("infraestructura")}}" class="nav-link {{$menu=="infraestructura"?"active":""}}">Infraestructura{!!$menu=="infraestructura"?"<span class=\"sr-only\">(página actual)</span>":""!!}</a></li>
                                <li class="nav-item"><a href="{{route("horarios")}}" class="nav-link {{$menu=="horarios"?"active":""}}">Horarios{!!$menu=="horarios"?"<span class=\"sr-only\">(página actual)</span>":""!!}</a></li>
                                <li class="nav-item"><a href="{{route("propuesta")}}" class="nav-link {{$menu=="propuesta"?"active":""}}">Propuesta Pedagógica{!!$menu=="propuesta"?"<span class=\"sr-only\">(página actual)</span>":""!!}</a></li>
                                <li class="nav-item"><a href="{{route("admision")}}" class="nav-link {{$menu=="admision"?"active":""}}">Admisión{!!$menu=="admision"?"<span class=\"sr-only\">(página actual)</span>":""!!}</a></li>
                                <li class="nav-item"><a href="{{route("noticias")}}" class="nav-link {{$menu=="noticias"?"active":""}}">Noticias{!!$menu=="noticias"?"<span class=\"sr-only\">(página actual)</span>":""!!}</a></li>
                                <li class="nav-item"><a href="{{route("contacto")}}" class="nav-link {{$menu=="contacto"?"active":""}}">Contacto{!!$menu=="contacto"?"<span class=\"sr-only\">(página actual)</span>":""!!}</a></li>
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
