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
            <div class="col-md-6 col-sm-6 col-xs-12 text-right small-left">
                <ul>
                    {{-- <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                    <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li> --}}
                    <li><a href="{{route("login")}}"><i class="fa fa-sign-in" aria-hidden="true"></i>Zona Admin</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<header>
  <div id="main-menu" class="wa-main-menu">
    <!-- Menu -->
    <div class="wathemes-menu relative">
      <!-- navbar -->
      <div class="navbar navbar-default theme-bg mar0" role="navigation">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="right-pink-shape">
                          <div class="navbar-header">
                              <!-- Button For Responsive toggle -->
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                              <span class="sr-only">Desplegar menú</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              </button>
                              <!-- Logo -->
                              <a class="navbar-brand" href="{{route("home")}}">
                                <img class="site_logo" alt="Site Logo"  src="{{asset('assets/img/logos/logo2.png')}}" />
                              </a>
                          </div>
                          <!-- Navbar Collapse -->
                          <div class="navbar-collapse collapse">
                              <!-- nav -->
                              <ul class="nav navbar-nav">
                                  <li class=""><a href="{{route("home")}}" class="nav-link {{$menu=="home"?"active":""}}">Inicio{!!$menu=="home"?"<span class=\"sr-only\">(página actual)</span>":""!!}</a></li>
                                  <li class=""><a href="{{route("infraestructura")}}" class="nav-link {{$menu=="infraestructura"?"active":""}}">Infraestructura{!!$menu=="infraestructura"?"<span class=\"sr-only\">(página actual)</span>":""!!}</a></li>
                                  {{-- <li class=""><a href="{{route("horarios")}}" class="nav-link {{$menu=="horarios"?"active":""}}">Horarios{!!$menu=="horarios"?"<span class=\"sr-only\">(página actual)</span>":""!!}</a></li> --}}
                                  <li class=""><a href="{{route("propuesta")}}" class="nav-link {{$menu=="propuesta"?"active":""}}">Propuesta Pedagógica{!!$menu=="propuesta"?"<span class=\"sr-only\">(página actual)</span>":""!!}</a></li>
                                  <li class=""><a href="{{route("admision")}}" class="nav-link {{$menu=="admision"?"active":""}}">Admisión{!!$menu=="admision"?"<span class=\"sr-only\">(página actual)</span>":""!!}</a></li>
                                  <li class=""><a href="{{route("noticias")}}" class="nav-link {{$menu=="noticias"?"active":""}}">Noticias{!!$menu=="noticias"?"<span class=\"sr-only\">(página actual)</span>":""!!}</a></li>
                                  <li class=""><a href="{{route("contacto")}}" class="nav-link {{$menu=="contacto"?"active":""}}">Contacto{!!$menu=="contacto"?"<span class=\"sr-only\">(página actual)</span>":""!!}</a></li>
                              </ul>
                          </div>
                          <!-- navbar-collapse -->
                      </div>
                  </div>
                  <!-- col-md-12 -->
              </div>
              <!-- row -->
          </div>
          <!-- container -->
      </div>
      <!-- navbar -->
    </div>
    <!--  Menu -->
  </div>
</header>
<!--//================Header end==============//-->
