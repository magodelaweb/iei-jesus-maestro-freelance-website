<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
</nav>
