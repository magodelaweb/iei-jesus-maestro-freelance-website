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
                            <h2>Calidad educativa</h2>
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
  <div class="clear"></div>
  <!--//================services starts==============//-->
  <section class="padT50 padB20 theme-border-bottom">
      <div class="container">
          <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12 padB30">
                  <div class="service-icon theme-icon color-pink">
                      <i class="fa fa-clock-o" aria-hidden="true"></i>
                  </div>
                  <div class="service-text">
                      <h4>Horario de Atención</h4>
                      <p>8:00 am - 2:00 pm</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 padB30">
                  <div class="service-icon theme-icon color-orange">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                  </div>
                  <div class="service-text">
                      <h4>Correo Electrónico</h4>
                      <p>ieijesusmaestro@hotmail.com</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 padB30">
                  <div class="service-icon theme-icon color-green">
                      <i class="fa fa-coffee" aria-hidden="true"></i>
                  </div>
                  <div class="service-text">
                      <h4>Desayuno</h4>
                      <p>8.00 am</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 padB30">
                  <div class="service-icon theme-icon color-purple">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="service-text">
                      <h4>Teléfono</h4>
                      <p>(01) 2585427</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--//================services end==============//-->
  <div class="clear"></div>
  <!--//================About starts==============//-->
  <section class="padT80 padB80">
      <div class="container marB50">
          <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-color green pad30 marB30">
                      <div class="service-icon">
                          <i class="fa fa-coffee" aria-hidden="true"></i>
                      </div>
                      <div class="service-text">
                          <h4 class="title"><a href="#" onclick="event.preventDefault();">DESAYUNO</a></h4>
                          <p>El consumo de desayuno
                              garantiza una mejora
                              en el rendimiento escolar.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-color theme-bg pad30 marB30">
                      <div class="service-icon">
                          <i class="fa fa-futbol-o" aria-hidden="true"></i>
                      </div>
                      <div class="service-text">
                          <h4 class="title"><a href="#" onclick="event.preventDefault();">DEPORTES</a></h4>
                          <p>El deporte ayuda a socializar,
                            al sentimiento de pertenencia
                            y al trabajo en equipo.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-color yellow pad30 marB30">
                      <div class="service-icon">
                          <i class="fa fa-headphones" aria-hidden="true"></i>
                      </div>
                      <div class="service-text">
                          <h4 class="title"><a href="#" onclick="event.preventDefault();">Tecnología</a></h4>
                          <p>Aprendizaje más interactivo y participativo,
                            favoreciendo el trabajo colaborativo.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-color orange pad30 marB30">
                      <div class="service-icon">
                          <i class="fa fa-heart-o" aria-hidden="true"></i>
                      </div>
                      <div class="service-text">
                          <h4 class="title"><a href="#" onclick="event.preventDefault();">VALORES</a></h4>
                          <p>Promueve la tolerancia y el entendimiento
                            por encima de nuestras diferencias.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-color purple pad30 marB30">
                      <div class="service-icon">
                          <i class="fa fa-music" aria-hidden="true"></i>
                      </div>
                      <div class="service-text">
                          <h4 class="title"><a href="#" onclick="event.preventDefault();">MUSICA</a></h4>
                          <p> Fomenta la autoestima y
                            promueve el desarrollo social,
                            emocional e intelectual.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-color pink pad30 marB30">
                      <div class="service-icon">
                          <i class="fa fa-language" aria-hidden="true"></i>
                      </div>
                      <div class="service-text text-left">
                          <h4 class="title"><a href="#" onclick="event.preventDefault();">IDIOMAS</a></h4>
                          <p>Desarrolla la creatividad,
                            capacidad multitareas,
                            pensamiento crítico y memoria.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="clear"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                  <div id="about-us-slider" class="owl-carousel owl-theme slider positionR marB30">
                      <div class="item">
                          <figure class="slider-margin">
                              <img src="{{asset("assets/img/slider/main-iei-xs-1.jpg")}}" alt=""/>
                          </figure>
                      </div>
                      <div class="item">
                          <figure class="slider-margin">
                              <img src="{{asset("assets/img/slider/main-iei-xs-2.jpg")}}" alt=""/>
                          </figure>
                      </div>
                      <div class="item">
                          <figure class="slider-margin">
                              <img src="{{asset("assets/img/slider/main-iei-xs-3.jpg")}}" alt=""/>
                          </figure>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="about-us marB0">
                      <h3 class="marB10">¿Por qué elegirnos?</h3>
                      <p class="text-left">Educamos con gran amor al niño, procurando la formación integral, puntualidad al ingreso,
                        la dedicación de las docentes , el involucramiento de los padres y el horario de clases.
                      </p>
                      <p class="text-left marB30">Educamos en valores como la amistad, la comprensión, la tolerancia, la paciencia, la solidaridad y el respeto,
                        los cuales son esenciales para un sano desarrollo de los niños. Nuestras profesoras son profesionales con muchos años de experiencia y
                        siempre atentas a las necesidades de los niños.
                      </p>
                      <a href="{{route("admision")}}" class="itg-button">Admisión</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--//================About end==============//-->
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
