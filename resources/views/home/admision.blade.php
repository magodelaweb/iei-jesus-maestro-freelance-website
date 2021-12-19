@extends('layouts.app')
@section('title')
  IEI Jesus Maestro - Admisión
@endsection
@section('css')
  <!--Bootstrap 5 Custom Adapter-->
  <link href="{{asset('css/b5adapter.css')}}" rel="stylesheet">
  <style type="text/css">
  input[type=text], input[type=email], input[type=search], input[type=password], input[type=number], select {
    border-radius: 4px;
  }
  .nav-pills>li>a {
    border-radius: 0px;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
}
  </style>
@endsection
@section('body')
  <section>
      <div class="bredcrumb-section padTB100 positionR">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="theme-heading text-center">
                          <h3 class="text-center theme-color">Admisión</h3>
                          <span class="colorW marB10"> <i class="fa fa-child" aria-hidden="true"></i> </span>
                      </div>
                      <div class="breadcrumb-box">
                          <ul class="breadcrumb text-center colorW marB0">
                              <li>
                                  <a href="{{route("home")}}">Inicio</a>
                              </li>
                              <li class="active">Admisión</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--//================Breadcrumb end==============//-->
  <div class="clear"></div>
  <!--//================Register starts==============//-->
  <section class="padT80 padB80">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="blog-detail marB50">
                    <h4 class="colorB marB10 title text-left">Proceso de Admisión</h4>
                    <p class="marB20 text-left">Inicie una solicitud virtual desde el botón que se encuentra a continuación.
                      Su solicitud será revisada y de proceder nos pondremos en contacto con usted.
                    </p>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="button" class="itg-button" onclick="location.href = '{{route('solicitud')}}';">Inicia Solicitud de Admisión</button>
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

  <!--//================Register end==============//-->
  <div class="clear"></div>

@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
  <script type="text/javascript">
    // var btnGuardar=$("#btn3");
    // var form1=$("#frm1");
    // btnGuardar.on("click", function(){
    //   form1[0].submit();
    // })
  </script>
@endsection
