@extends('layouts.app')
@section('title')
  IEI Jesus Maestro - Contacto
@endsection
@section('css')
  {!! htmlScriptTagJsApi(['lang' => 'es']) !!}
@endsection
@section('body')
  <!--//================Breadcrumb starts==============//-->
  <section>
      <div class="bredcrumb-section padTB100 positionR">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="theme-heading text-center">
                          <h3 class="text-center theme-color">Contáctanos</h3>
                          <span class="colorW marB10"> <i class="fa fa-child" aria-hidden="true"></i> </span>
                      </div>
                      <div class="breadcrumb-box">
                          <ul class="breadcrumb text-center colorW marB0">
                              <li>
                                  <a href="index.html">Inicio</a>
                              </li>
                              <li class="active">Contáctanos</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--//================Breadcrumb end==============//-->
  <div class="clear"></div>
  <!--//================Contact us starts==============//-->
  <section class="padT80 padB30">
      <!--- Theme heading start-->
      <div class="theme-heading marB30 positionR">
          @if (session('status'))
               <div class="msgSuccess alert alert-success p-3">
                 <span>{{ session('status') }}</span>
               </div>
          @endif
          <div class="container">
              <div class="row">
                  <div class="col-md-4 col-sm-6 col-xs-10  col-md-offset-4 col-sm-offset-3 col-xs-offset-1 heading-box text-center">
                      <h3 class="theme-color marB10">Detalles de dirección y ubicación</h3>
                      <span class="marB10"> <i class="fa fa-child" aria-hidden="true"></i> </span>
                      <p class="marB10">Ponemos a tu disposición todos los medios de contacto,
                        ya sea presencial o a distancia.
                      </p>
                  </div>
              </div>
          </div>
      </div>
      <!--- Theme heading end-->
      <div class="container">
          <div class="row">
              <div class="col-md-4 col-sm-5 col-xs-12">
                  <div class="address-details marB30">
                      <p class="text-left marB20">Nuestra misión es educar, formar a niños y niñas desde una visión humanista cristiana
                        y que la enseñanza sea un diálogo entre la fe, la cultura y la vida dentro de los  valores cristianos.
                      </p>
                      <p class="text-left marB30"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="pull-right">Jr. Carhuarazo Mz. G Lt. 3 Las Delicias, Chorrillos</span></p>
                      <p class="text-left marb20"><i class="fa fa-envelope" aria-hidden="true"></i><span class="pull-right">ieijesusmaestro@hotmail.com</span></p>
                      <p class="text-left marB20"><i class="fa fa-phone" aria-hidden="true"></i><span class="pull-right">952 568 995</span></p>
                      {{-- <p class="text-left marB20"><i class="fa fa-phone" aria-hidden="true"></i><span class="pull-right">Skype : itgeeks</span></p> --}}
                      {{-- <p class="text-left marB20"><i class="fa fa-phone" aria-hidden="true"></i><span class="pull-right">Www.itgeeksin.Com</span></p> --}}
                      <p class="text-left mar0">
                          {{-- <a href="#" class="square-box"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a> --}}
                          <a href="https://www.facebook.com/IEI-Jes%C3%BAs-Maestro-1530110030565071" class="square-box"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a>
                          {{-- <a href="#" class="square-box"><span><i class="fa fa-dribbble" aria-hidden="true"></i></span></a>
                          <a href="#" class="square-box"><span><i class="fa fa-instagram" aria-hidden="true"></i></span></a>
                          <a href="#" class="square-box"><span><i class="fa fa-pinterest" aria-hidden="true"></i></span></a> --}}
                      </p>
                  </div>
              </div>
              <div class="col-md-8 col-sm-7 col-xs-12">
                  <div class="address-details marB80">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.735678149294!2d-76.9948274858798!3d-12.198380091366444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b9ea2cea3b95%3A0x7b17b9bb63a87f1e!2sI.E.I.%20Jesus%20Maestro!5e0!3m2!1ses-419!2spe!4v1615737791026!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
                  </div>
              </div>
              <!--- Theme heading start-->
              <div class="theme-heading marB30 positionR">
                  <div class="container">
                      <div class="row">
                          <div id="frmContacto" class="col-md-4 col-sm-6 col-xs-10  col-md-offset-4 col-sm-offset-3 col-xs-offset-1 heading-box text-center">
                              <h3 class="theme-color marB10">Envíanos tu consulta</h3>
                              <span class="marB10"> <i class="fa fa-child" aria-hidden="true"></i> </span>
                              <p class="marB10">Nuestro personal recibira tu consulta y
                                te responderemos tan pronto como podamos.
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
              <!--- Theme heading end-->
              <div class="col-xs-12">
                  <div class="comment-review marB30">
                    <form class="needs-validation" action="{{route('contacto_store')}}" method="post">
                      @csrf
                      <div class="row">
                          {{-- @if ($errors->any())
                            <div class="col-md-4 col-sm-4 col-xs-12 marB30">
                                <div class="alert alert-danger" role="alert">
                                  @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                  @endforeach
                                </div>
                            </div>
                          @endif --}}
                          <div class="col-md-4 col-sm-4 col-xs-12 marB30 form-outline">
                              <input class="form-control @error('nombre') is-invalid @enderror" type="text" name=nombre placeholder="Nombre" required value="{{old('nombre')}}">
                              @error('nombre')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                              @enderror
                          </div>
                          <div class="col-md-4 col-sm-4 col-xs-12 marB30 form-outline">
                              <input class="form-control @error('correo') is-invalid @enderror" type="email" name=correo placeholder="Correo Electrónico" required value="{{old('correo')}}">
                              @error('correo')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                              @enderror
                          </div>
                          <div class="col-md-4 col-sm-4 col-xs-12 marB30 form-outline">
                              <input class="form-control @error('telefono') is-invalid @enderror" type="text" name=telefono placeholder="Teléfono" required value="{{old('telefono')}}">
                              @error('telefono')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                              @enderror
                          </div>
                          <div id="txaConsulta" class="col-md-12 col-sm-12 col-xs-12 marB20 form-outline">
                              <textarea class="form-control @error('consulta') is-invalid @enderror" name=consulta placeholder="Escribe tu consulta" rows="9" required>{{old('consulta')}}</textarea>
                              @error('consulta')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                              @enderror
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12 marB20 form-outline">
                            {!! htmlFormSnippet() !!}
                            @error('g-recaptcha-response')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                              <button type="submit" class="itg-button">Enviar Consulta</button>
                          </div>
                      </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--//================Contact us end==============//-->
  <div class="clear"></div>
  {{-- <div class="container container-fluid mt-5">
    <div class="row">
      <div class="card col-12">
        <div class="card-body">
          <h5 class="card-title">Contacto</h5>
          <h6 class="card-subtitle mb-2 text-muted">Contacto subtitle</h6>
          <p class="card-text" style="text-align: justify;">
              <li>Datos de contacto</li>
              <li>Formulario de contacto (Con Google Captcha)</li>
              <li>Mapa</li>
            </ul></p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
  </div> --}}
@endsection
@section('scripts')
  <script type="text/javascript">
  $(function() {
    $(".msgSuccess").fadeOut(1500);
    @if ($errors->any())
      top=$("#frmContacto").offset().top;
      @error('g-recaptcha-response')
        var top=$("#txaConsulta").offset().top;
      @enderror
      $('html, body').animate({
        scrollTop: top
      }, 700);
    @endif

  });
  </script>
@endsection
