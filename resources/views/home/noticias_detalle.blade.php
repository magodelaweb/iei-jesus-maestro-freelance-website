@extends('layouts.app')
@section('title')
  Lanzamiento Oficial de nuestro sitio web
@endsection
@section('body')
  <!--//================Breadcrumb starts==============//-->
  <section>
      <div class="bredcrumb-section padTB100 positionR">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="theme-heading text-center">
                          <h3 class="text-center theme-color">Noticias</h3>
                          <span class="colorW marB10"> <i class="fa fa-child" aria-hidden="true"></i> </span>
                      </div>
                      <div class="breadcrumb-box">
                          <ul class="breadcrumb text-center colorW marB0">
                              <li>
                                  <a href="{{route("home")}}">Inicio</a>
                              </li>
                              <li>
                                  <a href="{{route("noticias")}}">Noticias</a>
                              </li>
                              <li class="active">Lanzamiento oficial de nuestro sitio web</li>
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
                  <div class="blog-img marB30">
                      <figure>
                          <img src="assets/img/blog/web-11.png" alt=""/>
                      </figure>
                  </div>
                  <div class="blog-detail marB50">
                      <h4 class="colorB marB10 title text-left"><a href="#" onclick="event.preventDefault();">Lanzamiento oficial de nuestro sitio web</a></h4>
                      <p class="marB10 text-left">
                          <a href="#" onclick="event.preventDefault();"><span class="marR10"><i class="fa fa-calendar marR5" aria-hidden="true"></i>28 de marzo del 2021</span></a>
                          {{-- <a href="#"><span class="marR10"><i class="fa fa-comment marR5" aria-hidden="true"></i>12 Comments</span></a> --}}
                      </p>
                      <p class="marB20 text-left">En abril lanzamos nuestro nuevo sitio web. Información, Contacto, Matrícula Virtual y mucho más, muy pronto desde nuestro portal institucional.
                      </p>
                      <p class="marB20 text-left">Encuentra más sobre nuestros valores, beneficios y servicios en la sección "inicio".
                        Observa nuestra galería de fotos y conoce más de nuestra infraestructura en la sección "infraestructura".
                        Conoce más de nuestra misión y visión, y revisa nuestra propuesta en la sección "propuesta pedagógica".
                        Inicia el proceso de matrícula virtual en la sección "admisión".
                        Entérate de nuestras últimas publicaciones en "noticias".
                        Revisa nuestro teléfono, correo y dirección, encuentranos en el mapa o envíanos un mensaje desde "contacto".
                        En la sección inferior puedes encontrar enlaces de interés como el reglamento interno o nuestras redes sociales, tal como un enlace a nuestra cuenta de facebook.
                      </p>
                      <p class="marB20 text-left">	Estamos en constante mejora para brindarle un mejor servicio y hacer que la educación a distancia, así como los procesos administrativos educativos remotos,
                        sean más eficientes y fáciles de utilizar, algo muy necesario en estos tiempos por prevención y en cumplimiento por las medidas sanitarias dispuesto por las autoridades.
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--//================Blogs end==============//-->
  <div class="clear"></div>

@endsection
