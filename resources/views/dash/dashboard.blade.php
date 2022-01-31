@extends('layouts.admin')
@section('title')
  IEI Jesus Maestro - Administrador
@endsection
@section('css')
  <style type="text/css">
    .slider-text h1{
      padding-top: 20%;
    }
    .slider-text h1 a.nav-editable{
      top: 97%;
      left: 50%;
      font-family: revert;
      text-shadow: none;
    }
    .slider-text h1 input, .slider-text h2 input{
      font-family: revert;
      font-size: large;
    }
    #slider-section .owl-nav{
      height: 0 !important;
    }
  </style>
@endsection
@section('body')
  <div class="container container-fluid">
    <div class="row">
      <div class="card col-12 position-relative">
        <!--//================Slider start==============//-->
        <section id="slider-section">
            <div id="main-slider" class="owl-carousel owl-theme slider positionR">
                <div class="item positionR">
                    <figure class="slider-image positionR">
                        <img src="{{asset("assets/img/slider/main-iei-1.jpg")}}" alt="" class="hidden-xs"/>
                        <img src="{{asset("assets/img/slider/main-iei-xs-1.jpg")}}" alt="" class="hidden-sm hidden-lg hidden-md"/>
                    </figure>
                    <div class="slider-text positionA text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-xs-10 col-md-offset-2 col-sm-offset-2 col-xs-offset-1 text-center">
                                  <h1 class="position-relative">
                                    <span id="aSlider111" class="editable" style="font-size:revert;"
                                    onclick="event.preventDefault();cambiarInput(this,'#txtSlider111');">
                                      <span class="span-value" style="font-size:revert;">{{IEI::ctc($web,'slider111')}}</span>
                                    </span>
                                    <input type="text" class="form-control d-none input-editable text-center" id="txtSlider111" name="slider111"  aria-describedby="Modificar Texto"
                                      value="{{IEI::ctc($web,'slider111')}}" placeholder="Ingrese Texto" style="min-width: 18em;">
                                    </input>
                                    <a class="btn btn-primary position-absolute nav-editable editable-aceptar d-none" role="button"
                                    data-a="#aSlider111" data-txt="#txtSlider111" data-campo='slider111'
                                    onclick="event.preventDefault();saveNav(this);" style="left: 46%;">
                                      <i class="fa fa-check" aria-hidden="true" style="cursor:pointer;"></i>
                                    </a>
                                    <a  href="#" class="btn btn-danger position-absolute nav-editable editable-cancelar d-none" role="button"
                                    data-reset="{{IEI::ctc($web,'slider111')}}" data-a="#aSlider111" data-txt="#txtSlider111"
                                    onclick="event.preventDefault();cancelNav(this);">
                                      <i class="fa fa-times" aria-hidden="true" style="cursor:pointer;"></i>
                                    </a>
                                  </h1>
                                  {{-- <h1 id="aSlider111" class="editable span-value" onclick="event.preventDefault();cambiarInput(this,'#txtSlider111');">{{IEI::ctc($web,'slider111')}}</h1> --}}

                                  <h2 class="position-relative">
                                    <span id="aSlider112" class="editable" style="font-size:revert;"
                                    onclick="event.preventDefault();cambiarInput(this,'#txtSlider112');">
                                      <span class="span-value" style="font-size:revert;">{{IEI::ctc($web,'slider112')}}</span>
                                    </span>
                                    <input type="text" class="form-control d-none input-editable text-center" id="txtSlider112" name="slider112"  aria-describedby="Modificar Texto"
                                      value="{{IEI::ctc($web,'slider112')}}" placeholder="Ingrese Texto" style="min-width: 18em;">
                                    </input>
                                    <a class="btn btn-primary position-absolute nav-editable editable-aceptar d-none" role="button"
                                    data-a="#aSlider112" data-txt="#txtSlider112" data-campo='slider112'
                                    onclick="event.preventDefault();saveNav(this);" style="left: 46%;">
                                      <i class="fa fa-check" aria-hidden="true" style="cursor:pointer;"></i>
                                    </a>
                                    <a  href="#" class="btn btn-danger position-absolute nav-editable editable-cancelar d-none" role="button"
                                    data-reset="{{IEI::ctc($web,'slider112')}}" data-a="#aSlider112" data-txt="#txtSlider112"
                                    onclick="event.preventDefault();cancelNav(this);" style="left: 50%;">
                                      <i class="fa fa-times" aria-hidden="true" style="cursor:pointer;"></i>
                                    </a>
                                  </h2>
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
                        <img src="{{asset("assets/img/slider/main-iei-2.jpg")}}" alt="" class="hidden-xs"/>
                        <img src="{{asset("assets/img/slider/main-iei-xs-2.jpg")}}" alt="" class="hidden-sm hidden-lg hidden-md"/>
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
                        <img src="{{asset("assets/img/slider/main-iei-3.jpg")}}" alt="" class="hidden-xs"/>
                        <img src="{{asset("assets/img/slider/main-iei-xs-3.jpg")}}" alt="" class="hidden-sm hidden-lg hidden-md"/>
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
      </div>
    </div>
  </div>
@endsection
