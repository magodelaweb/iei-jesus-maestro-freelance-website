@extends('layouts.app')
@section('title')
  IEI Jesus Maestro - Inicio
@endsection
@section('body')
  @include('snippets.nav')
  <!--//================Slider start==============//-->
  <section id="slider-section">
      <div id="main-slider" class="owl-carousel owl-theme slider positionR">
          <div class="item positionR">
              <figure class="slider-image positionR">
                  <img src="{{asset("assets/img/slider/main-iei-1.jpg")}}" alt="" class="d-none d-sm-block"/>
                  <img src="{{asset("assets/img/slider/main-iei-xs-1.jpg")}}" alt="" class="d-sm-none"/>
              </figure>
              <div class="slider-text positionA text-center">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-md-8 col-sm-8 col-xs-10 col-md-offset-2 col-sm-offset-2 col-xs-offset-1 text-center">
                            <h1>IEI Jesús Maestro</h1>
                            <h2>Calidad Educativa</h2>
                            <p>Educamos con gran amor al niño, procurando la formación integral, puntualidad al ingreso,
                              la dedicación de las docentes , el involucramiento de los padres y el horario de clases.
                            </p>
                            <a href="{{route("admision")}}" class="itg-button">Admisión</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="item positionR">
              <figure class="slider-image positionR">
                  <img src="{{asset("assets/img/slider/main-iei-2.jpg")}}" alt="" class="d-none d-sm-block"/>
                  <img src="{{asset("assets/img/slider/main-iei-xs-2.jpg")}}" alt="" class="d-sm-none"/>
              </figure>
              <div class="slider-text positionA text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-sm-8 col-xs-10 col-md-offset-2 col-sm-offset-2 col-xs-offset-1 text-center">
                            <h1>IEI Jesús Maestro</h1>
                            <h2>Educación en valores</h2>
                            <p>Educamos en valores como la amistad, la comprensión, la tolerancia, la paciencia, la solidaridad y el respeto,
                              los cuales son esenciales para un sano desarrollo de los niños.
                            </p>
                            <a href="{{route("admision")}}" class="itg-button">Admisión</a>
                        </div>
                    </div>
                </div>
              </div>
          </div>
          <div class="item positionR">
              <figure class="slider-image positionR">
                  <img src="{{asset("assets/img/slider/main-iei-3.jpg")}}" alt="" class="d-none d-sm-block"/>
                  <img src="{{asset("assets/img/slider/main-iei-xs-3.jpg")}}" alt="" class="d-sm-none"/>
              </figure>
              <div class="slider-text positionA text-center">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-md-8 col-sm-8 col-xs-10 col-md-offset-2 col-sm-offset-2 col-xs-offset-1 text-center">
                              <h1>IEI Jesús Maestro</h1>
                              <h2>Los niños primero</h2>
                              <p>Nuestras profesoras son profesionales con muchos años de experiencia y siempre atentas a las necesidades de los niños.
                              </p>
                              <a href="{{route("admision")}}" class="itg-button">Admisión</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--//================Slider end==============//-->
  <div class="container container-fluid mt-5">
    <div class="row">
      <div class="card col-12">
        <div class="card-body">
          <h5 class="card-title">Inicio</h5>
          <h6 class="card-subtitle mb-2 text-muted">Inicio subtitle</h6>
          <p class="card-text" style="text-align: justify;">Esta pantalla debe mostrar el diferencial del colegio, desde un aspecto de marketing:
            <ul>
              <li>Contener un resumen de todas las otras secciones</li>
              <li>Definir un contenido específico para esta sección (diferencial)</li>
              <li>Botón CTO</li>
            </ul></p>
          <a href="{{route("login")}}" class="card-link">Login</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
  </div>
@endsection
