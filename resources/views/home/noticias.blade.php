@extends('layouts.app')
@section('title')
  IEI Jesus Maestro - Noticias
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
                              <li class="active">Noticias</li>
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
  <section class="padT80 padB30">
      <div class="container">
          <div class="row">
              <div class="col-md-9 col-sm-8 col-xs-12 pull-right">
                  <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="blog-img marB30">
                              <figure>
                                  <img src="assets/img/blog/web-11.png" alt=""/>
                              </figure>
                          </div>
                          <div class="blog-detail marB50">
                              <h4 class="colorB marB10 title text-left"><a href="{{route("noticias_detalle",["slug"=>"lanzamiento-oficial-de-nuestro-sitio-web"])}}">
                                Lanzamiento oficial de nuestro sitio web</a></h4>
                              <p class="marB10 text-left">
                                  <a href="#" onclick="event.preventDefault();"><span class="marR10"><i class="fa fa-calendar marR5" aria-hidden="true"></i>28 de marzo del 2021</span></a>
                                  {{-- <a href="#"><span class="marR10"><i class="fa fa-comment marR5" aria-hidden="true"></i>12 Comments</span></a> --}}
                              </p>
                              <p class="marB10 text-left">En abril lanzamos nuestro nuevo sitio web. Información, Contacto, Matrícula Virtual y mucho más, muy pronto desde nuestro portal institucional.
                              </p>
                              <p class="marB10 text-left"><a href="{{route("noticias_detalle",["slug"=>"lanzamiento-oficial-de-nuestro-sitio-web"])}}">
                                Más información<i class="fa fa-angle-double-right marL10" aria-hidden="true"></i></a></p>
                          </div>
                      </div>
                      {{-- <coment>En este bloque van hasta 4 noticias incluyendo la de arriba</coment> --}}
                  </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12 pull-left">
                  <div class="row">
                      <div class="sidebar padB50">
                          {{-- <div class="col-xs-12">
                              <div class="search_bar marB30">
                                  <input type="text" name="search" placeholder="Search..">
                                  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                              </div>
                          </div> --}}
                          <div class="col-md-12">
                              <h4 class="marB20 title">Noticias Recientes</h4>
                              <div class="row">
                                  <div class="recent-posts marB20">
                                      <div class="blog-recent-post">
                                          <div class="col-md-4 col-sm-4 col-xs-4">
                                              <figure>
                                                  <img src="assets/img/blog/web-side-1.png" alt="">
                                              </figure>
                                          </div>
                                          <div class="col-md-8 col-sm-8 col-xs-8 padL0 text-left">
                                              <h5><a href="{{route("noticias_detalle",["slug"=>"lanzamiento-oficial-de-nuestro-sitio-web"])}}">
                                                Lanzamiento oficial de nuestro sitio web</a></h5>
                                              <p class="mar0 text-left">En abril lanzamos nuestro nuevo sitio web</p>
                                              <a href="{{route("noticias_detalle",["slug"=>"lanzamiento-oficial-de-nuestro-sitio-web"])}}"
                                                class="theme-color"> Más información</a>
                                          </div>
                                      </div>
                                      {{-- <div class="blog-recent-post">
                                          <div class="col-md-4 col-sm-4 col-xs-4">
                                              <figure>
                                                  <img src="assets/img/blog/side-2.jpg" alt="">
                                              </figure>
                                          </div>
                                          <div class="col-md-8 col-sm-8 col-xs-8 padL0 text-left">
                                              <h5><a href="#">Baby House</a></h5>
                                              <p class="mar0 text-left">Lorem Ipsum dummy text printing andtext printing.</p>
                                              <a href="#" class="theme-color"> Read More</a>
                                          </div>
                                      </div>
                                      <div class="blog-recent-post">
                                          <div class="col-md-4 col-sm-4 col-xs-4">
                                              <figure>
                                                  <img src="assets/img/blog/side-3.jpg" alt="">
                                              </figure>
                                          </div>
                                          <div class="col-md-8 col-sm-8 col-xs-8 padL0 text-left">
                                              <h5><a href="#">Baby House</a></h5>
                                              <p class="mar0 text-left">Lorem Ipsum dummy text printing andtext printing.</p>
                                              <a href="#" class="theme-color"> Read More</a>
                                          </div>
                                      </div>
                                      <div class="blog-recent-post">
                                          <div class="col-md-4 col-sm-4 col-xs-4">
                                              <figure>
                                                  <img src="assets/img/blog/side-4.jpg" alt="">
                                              </figure>
                                          </div>
                                          <div class="col-md-8 col-sm-8 col-xs-8 padL0 text-left">
                                              <h5><a href="#">Baby House</a></h5>
                                              <p class="mar0 text-left">Lorem Ipsum dummy text printing andtext printing.</p>
                                              <a href="#" class="theme-color"> Read More</a>
                                          </div>
                                      </div> --}}
                                      {{-- <coment>En este bloque van hasta 4 noticias recientes incluyendo la de arriba</coment> --}}
                                      {{-- <coment>Considerar una función para habilitar noticias más antiguas</coment> --}}
                                  </div>
                              </div>
                          </div>
                          {{-- <div class="col-xs-12">
                              <h4 class="marB10 title">Mailing List</h4>
                              <p class="marB20 text-left">Sign up for our mailing list to get latest updates and offers.</p>
                              <div class="search_bar marB30">
                                  <input type="text" name="search" placeholder="Search..">
                                  <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                              </div>
                          </div> --}}
                          {{-- <div class="col-xs-12">
                              <h4 class="marB10 title">Social Widgets</h4>
                              <p class="marB30">
                                  <a href="#" class="square-box"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a>
                              </p>
                          </div> --}}
                          {{-- <div class="col-xs-12">
                              <h4 class="marB10 title">Categories</h4>
                              <ul class="meta-link marB30">
                                  <li><a href="#"><i class="fa fa-angle-double-right marR10" aria-hidden="true"></i>Blog</a></li>
                                  <li><a href="#"><i class="fa fa-angle-double-right marR10" aria-hidden="true"></i>Gallery</a></li>
                                  <li><a href="#"><i class="fa fa-angle-double-right marR10" aria-hidden="true"></i>Service</a></li>
                                  <li><a href="#"><i class="fa fa-angle-double-right marR10" aria-hidden="true"></i>Site Map</a></li>
                                  <li><a href="#"><i class="fa fa-angle-double-right marR10" aria-hidden="true"></i>About us</a></li>
                                  <li><a href="#"><i class="fa fa-angle-double-right marR10" aria-hidden="true"></i>Contact us</a></li>
                              </ul>
                          </div> --}}
                          {{-- <div class="col-xs-12">
                              <div class="blog-meta-tags marB30">
                                  <h4 class="marB10 title">Popular Tags </h4>
                                  <div class="tag-list">
                                      <a href="#">Baby</a>
                                      <a href="#">Gallery</a>
                                      <a href="#">top</a>
                                      <a href="#">Service</a>
                                      <a href="#">House</a>
                                      <a href="#">Gallery</a>
                                      <a href="#">Teachers</a>
                                      <a href="#">SEO</a>
                                      <a href="#">Baby</a>
                                  </div>
                              </div>
                          </div> --}}
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--//================Blogs end==============//-->
  <div class="clear"></div>
  {{-- <div class="container container-fluid mt-5">
    <div class="row">
      <div class="card col-12">
        <div class="card-body">
          <h5 class="card-title">Noticias</h5>
          <h6 class="card-subtitle mb-2 text-muted">Noticias subtitle</h6>
          <p class="card-text" style="text-align: justify;">
            Estilo blog.
            <ul>Listado de Noticias (Editables)
              <li>Foto de la Noticia, título, autor, fecha, resumen, y noticia completa (En su propia página). (Editable)</li>
            </ul>
            <ul>Barra lateral (Solo vista de PC) o Final (Vista Celular)
              <li>Plugin de Facebook, muestra fragmento de la actividad en Facebook de la institución. (Link de Facebook Editable)</li>
            </ul>
            <ul>Noticias Recientes
              <li>Listado de recientes: Foto pequeña, titulo y fecha.</li>
            </ul>
          </p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
  </div> --}}
@endsection
