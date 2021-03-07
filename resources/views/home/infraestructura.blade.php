@extends('layouts.app')
@section('title')
  IEI Jesus Maestro - Infraestructura
@endsection
@section('body')
  <!--//================Breadcrumb starts==============//-->
  <section>
      <div class="bredcrumb-section padTB100 positionR">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="theme-heading text-center">
                          <h3 class="text-center theme-color">Infraestructura</h3>
                          <span class="colorW marB10"> <i class="fa fa-child" aria-hidden="true"></i> </span>
                      </div>
                      <div class="breadcrumb-box">
                          <ul class="breadcrumb text-center colorW marB0">
                              <li>
                                  <a href="{{route("home")}}">Inicio</a>
                              </li>
                              <li class="active">Infraestructura</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--//================Breadcrumb end==============//-->
  <div class="clear"></div>
  <!--//================Gallery starts==============//-->
  <div class="padT80 padB30">
      <div class="container">
          <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="theme-hover theme-hover-pink marB30">
                      <figure>
                          <img src="assets/img/gallery/iei1g.jpg" alt="">
                          <figcaption><a href="assets/img/fancy-box/iei1f.jpg" class="fancybox" data-fancybox-group="group"><span class="icon arrows-expand"></span></a></figcaption>
                      </figure>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="theme-hover theme-color-hover marB30">
                      <figure>
                          <img src="assets/img/gallery/iei2g.jpg" alt="">
                          <figcaption><a href="assets/img/fancy-box/iei2f.jpg" class="fancybox" data-fancybox-group="group"><span class="icon arrows-expand"></span></a></figcaption>
                      </figure>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="theme-hover theme-orange-hover marB30">
                      <figure>
                          <img src="assets/img/gallery/iei3g.jpg" alt="">
                          <figcaption><a href="assets/img/fancy-box/iei3f.jpg" class="fancybox" data-fancybox-group="group"><span class="icon arrows-expand"></span></a></figcaption>
                      </figure>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="theme-hover theme-color-purple marB30">
                      <figure>
                          <img src="assets/img/gallery/iei4g.jpg" alt="">
                          <figcaption><a href="assets/img/fancy-box/iei4f.jpg" class="fancybox" data-fancybox-group="group"><span class="icon arrows-expand"></span></a></figcaption>
                      </figure>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="theme-hover theme-color-yellow marB30">
                      <figure>
                          <img src="assets/img/gallery/iei5g.jpg" alt="">
                          <figcaption><a href="assets/img/fancy-box/iei5f.jpg" class="fancybox" data-fancybox-group="group"><span class="icon arrows-expand"></span></a></figcaption>
                      </figure>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="theme-hover theme-color-green marB30">
                      <figure>
                          <img src="assets/img/gallery/iei6g.jpg" alt="">
                          <figcaption><a href="assets/img/fancy-box/iei6f.jpg" class="fancybox" data-fancybox-group="group"><span class="icon arrows-expand"></span></a></figcaption>
                      </figure>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="theme-hover theme-red-hover marB30">
                      <figure>
                          <img src="assets/img/gallery/iei7g.jpg" alt="">
                          <figcaption><a href="assets/img/fancy-box/iei7f.jpg" class="fancybox" data-fancybox-group="group"><span class="icon arrows-expand"></span></a></figcaption>
                      </figure>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="theme-hover theme-sky-blue-hover marB30">
                      <figure>
                          <img src="assets/img/gallery/iei8g.jpg" alt="">
                          <figcaption><a href="assets/img/fancy-box/iei8f.jpg" class="fancybox" data-fancybox-group="group"><span class="icon arrows-expand"></span></a></figcaption>
                      </figure>
                  </div>
              </div>
              {{-- <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="theme-hover theme-orange-hover marB30">
                      <figure>
                          <img src="assets/img/gallery/iei1g.jpg" alt="">
                          <figcaption><a href="assets/img/fancy-box/iei1f.jpg" class="fancybox" data-fancybox-group="group"><span class="icon arrows-expand"></span></a></figcaption>
                      </figure>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="theme-hover theme-color-purple marB30">
                      <figure>
                          <img src="assets/img/gallery/iei2g.jpg" alt="">
                          <figcaption><a href="assets/img/fancy-box/iei2f.jpg" class="fancybox" data-fancybox-group="group"><span class="icon arrows-expand"></span></a></figcaption>
                      </figure>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="theme-hover theme-color-yellow marB30">
                      <figure>
                          <img src="assets/img/gallery/iei3g.jpg" alt="">
                          <figcaption><a href="assets/img/fancy-box/iei3f.jpg" class="fancybox" data-fancybox-group="group"><span class="icon arrows-expand"></span></a></figcaption>
                      </figure>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="theme-hover theme-hover-pink marB30">
                      <figure>
                          <img src="assets/img/gallery/iei4g.jpg" alt="">
                          <figcaption><a href="assets/img/fancy-box/iei4f.jpg" class="fancybox" data-fancybox-group="group"><span class="icon arrows-expand"></span></a></figcaption>
                      </figure>
                  </div>
              </div> --}}
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="pagination-box text-center marB50">
                      <a href="#" onclick="event.preventDefault()"><span><i class="fa fa-angle-left" aria-hidden="true"></i></span></a>
                      <a href="#" onclick="event.preventDefault()"><span class="pg-active-orange">1</span></a>
                      {{-- <a href="#"><span>2</span></a>
                      <a href="#"><span>3</span></a>
                      <a href="#"><span>4</span></a> --}}
                      <a href="#" onclick="event.preventDefault()"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--//================Gallery end==============//-->
  <div class="clear"></div>
@endsection
