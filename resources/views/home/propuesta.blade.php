@extends('layouts.app')
@section('title')
  IEI Jesus Maestro - Propuesta Pedagógica
@endsection
@section('body')
  <!--//================Breadcrumb starts==============//-->
  <section>
      <div class="bredcrumb-section padTB100 positionR">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="theme-heading text-center">
                          <h3 class="text-center theme-color">Propuesta Pedagógica</h3>
                          <span class="colorW marB10"> <i class="fa fa-child" aria-hidden="true"></i> </span>
                      </div>
                      <div class="breadcrumb-box">
                          <ul class="breadcrumb text-center colorW marB0">
                              <li>
                                  <a href="{{route("home")}}">Inicio</a>
                              </li>
                              <li class="active">Propuesta Pedagógica</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--//================Breadcrumb end==============//-->
  <div class="clear"></div>
  <!--//================Blogs starts==============//-->
  <section class="padT80 padB80">
      <div class="container">
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="blog-detail marB50">
                      <h4 class="colorB marB10 title text-left">Misión</h4>
                      <p class="marB20 text-left">La MISION de la  Institución Educativa Inicial Parroquial
                        “JESÚS MAESTRO” es educar, formar a niños y niñas desde una visión humanista
                        cristiana y  que la enseñanza sea un dialogo entre la fe, la cultura y la vida
                         dentro de los  valores cristianos.
                      </p>
                      <p class="marB20 text-left">La  Institución Educativa tiene como  ENTIDAD PROMOTORA
                        a la CONGREGACIÓN HERMANAS DE LA CARIDAD DE SAN VICENTE DE PAUL, la cual  tiene la
                        responsabilidad de velar por una buena organización y funcionamiento  de la Institución,
                        destaca en primer lugar;  el valor de la persona,  considera la tarea educativa como un
                        servicio y atención a los alumnos, privilegiando el valor del amor y la solidaridad.
                      </p>
                      <p class="marB20 text-left">	Somos una comunidad educativa innovadora y con vocación de servicio,
                        esta misión incluye el compromiso y el esfuerzo por parte de la Entidad Promotora,  la dirección
                        y de todo el personal de formar y mejorar como agente directo de la Nueva Evangelización a través
                        de la docencia; teniendo como sujetos directos: al niño y la familia,
                        preparándolos como agentes activos de la sociedad y de la Iglesia.
                      </p>
                      <h4 class="colorB marB10 title text-left">Visión</h4>
                      <p class="marB20 text-left">Nuestra Institución Educativa tiene como visión:</p>
                      <ul class="justify">
                        <li>Lograr un buen  nivel académico, hábitos de estudio,
                          disciplina y motivación para realizar un buen trabajo,
                          basada en los nuevos enfoques pedagógicos, tecnológicos e innovadores.</li>
                        <li>Cultivar los valores humanos y la apertura
                          de la experiencia cristiana.</li>
                        <li>La convivencia, la disciplina y la buena organización,
                          es un clima adecuado para la enseñanza del aprendizaje
                          de los niños y niñas.</li>
                        <li>La colaboración y la participación de las familias
                           en el proyecto educativo del centro.</li>
                        <li>Un equipo humano que desarrolle al máximo sus
                          competencias; innovador, motivador y capaz de
                          trabajar en equipo.</li>
                        <li>Un sistema de gestión de calidad
                          eficiente y de mejora continúa.</li>
                      </ul>
                      <div class="pb-3 blog-img col-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                          <figure>
                              <img src="img/valores.jpg" alt=""/>
                          </figure>
                      </div>
                  </div>

                  {{-- <div class="blog-img marB30">
                      <figure>
                          <img src="assets/img/blog/11.jpg" alt=""/>
                      </figure>
                  </div> --}}
              </div>
          </div>
      </div>
  </section>
  <!--//================Blogs end==============//-->
  <div class="clear"></div>

@endsection
