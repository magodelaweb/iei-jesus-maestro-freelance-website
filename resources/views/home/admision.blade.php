@extends('layouts.app')
@section('title')
  IEI Jesus Maestro - Admisión
@endsection
@section('body')
  <div class="clear"></div>
        <!--//================Register starts==============//-->
        <section class="padT80 padB50">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2 col-xs-offset-0">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h4 class="marB30 title">MATRICULA {{now()->year}}</h4>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                            <input type="text" placeholder="Apellidos y nombres del alumno">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 marB30">
                            <input type="text" placeholder="DNI del alumno">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 marB30">
                          <label class="radio-inline cbRadio"><input type="radio" name="sexo" value="M"><i class="fa fa-circle-o" aria-hidden="true"></i> <span>Masculino</span></label>
                          <label class="radio-inline cbRadio"><input type="radio" name="sexo" value="F" checked><i class="fa fa-circle" aria-hidden="true"></i> <span>Femenino</span></label>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                            <input type="text" placeholder="Domicilio">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 marB30">
                            <input type="text" placeholder="Fecha de nacimiento">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 marB30">
                            <input type="text" placeholder="Lugar de nacimiento">
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                            <button type="submit" class="itg-button">Enviar Matrícula</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//================Register end==============//-->
        <div class="clear"></div>
  {{-- <div class="container container-fluid mt-5">
    <div class="row">
      <div class="card col-12">
        <div class="card-body">
          <h5 class="card-title">Admisión</h5>
          <h6 class="card-subtitle mb-2 text-muted">Admisión subtitle</h6>
          <p class="card-text" style="text-align: justify;">
            <ul>
              <li>Párrafo, título y contenido. (Editables, HTML visual, WYSIWYG).</li>
              <li>Botón CTA para iniciar el proceso de matrícula virtual.</li>
              <li>Botón CTA para contactar por WhatsApp (Número Editable).</li>
              <li>Video de YouTube donde se explican los pasos. (Enlace editable).</li>
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
  $("input[type=radio]").on("change",function(){
    var controlRadio=$(this);
    if (controlRadio.is(':checked')) {
      var ctrI=controlRadio.siblings("i");
      ctrI.removeClass("fa-circle-o");
      ctrI.addClass("fa-circle");
      var colega=controlRadio.parent("label").siblings("label").find("i");
      colega.removeClass("fa-circle");
      colega.addClass("fa-circle-o");
    }
  })
  </script>
@endsection
