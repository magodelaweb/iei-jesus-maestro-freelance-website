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
  <div class="clear"></div>
  <!--//================Register starts==============//-->
  <section>
    @include('home.fragment.admision_step')
    <form id="frm1" class="" action="{{route("solicitud_store")}}" method="post">
      @csrf
      <div id="pantalla1" class="container vh-100">
        @include('home.fragment.admision1')
      </div>
      <input type="hidden" name="doc_1_" value="">
      <input type="hidden" name="num_doc_1_" value="">
      <input type="hidden" name="ape_pat_1_" value="">
      <input type="hidden" name="ape_mat_1_" value="">
      <input type="hidden" name="nom_1_" value="">
      <input type="hidden" name="grado_1_" value="">
      <input type="hidden" name="fec_nac_1_" value="">
      <input type="hidden" name="sex_1_" value="">
    </form>

      <div id="pantalla2" class="container vh-100" style="display:none;">
        <form id="frm2" class="" action="" method="post">
          @include('home.fragment.admision2')
        </form>
        <div class="table-responsive">
          <table class="table table-hover mt-1">
            <thead>
              <tr>
                <th>Apellidos y Nombres</th>
                <th>Documento</th>
                <th>Grado</th>
                <th>Fecha de Nacimiento</th>
                <th>Sexo</th>
              </tr>
            </thead>
            <tbody id="tbRegistros"></tbody>
          </table>
        </div>
      </div>
  </section>

  <!--//================Register end==============//-->
  <div class="clear"></div>

@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
  <script type="text/javascript">

    var step1=$('ul.setup-panel li:eq(0)');
    var step2=$('ul.setup-panel li:eq(1)');
    var step3=$('ul.setup-panel li:eq(2)');
    var tablaHijos=$("#tbRegistros");
    var grados={
      3:"3 años",
      4:"4 años",
      5:"5 años"
    }
    var sexo={
      1:"Femenino",
      2:"Masculino"
    }
    var btnGuardar=$("#btn3");
    var form1=$("#frm1");
    var enviar=false;

    form1.on("submit", function(event) {
      if (!enviar) {
        event.preventDefault();
        step_siguiente(step1, step2);
        $("#pantalla1").hide();
        $("#pantalla2").show();
      }
    })
    function step_siguiente(step_prev, step_act){
      step_prev.removeClass('active');
      step_prev.addClass('bg-light text-muted');
      step_prev.find("h4").addClass('text-muted');
      step_act.addClass('active text-white');
      step_act.find("h4").addClass('text-white');
    }
    $("#frm2").on("submit", function(event) {
      event.preventDefault();
      var nom=$("[name=nom_1]").val();
      var ape_p=$("[name=ape_pat_1]").val();
      var ape_m=$("[name=ape_mat_1]").val();
      var nom_=nom+" "+ape_p+" "+ape_m;
      var ndoc=$("[name=num_doc_1]").val();
      var gra_=$("[name=grado_1]").val();
      var gra=grados[gra_];
      var nac_=$("[name=fec_nac_1]").val();
      var nac=moment(nac_, "YYYY-MM-DD")
        .format("DD/MM/YYYY");
      var sex_=$("[name=sex_1]").val();
      var sex=sexo[sex_];
      var fila="<tr><td>"+nom_+"</td><td>"
      +ndoc+"</td><td>"+gra+"</td><td>"
      +nac+"</td><td>"+sex+"</td></tr>";
      tablaHijos.append(fila);
      this.reset();
      var _doc=$("[name=doc_1_]");
      var _ndoc=$("[name=num_doc_1_]");
      var _ape_p=$("[name=ape_pat_1_]");
      var _ape_m=$("[name=ape_mat_1_]");
      var _nom=$("[name=nom_1_]");
      var _gra=$("[name=grado_1_]");
      var _nac=$("[name=fec_nac_1_]");
      var _sex=$("[name=sex_1_]");
      if (_doc.val()=="") {
        _doc.val($("[name=doc_1]").val());
        _ndoc.val(ndoc);
        _ape_p.val(ape_p);
        _ape_m.val(ape_m);
        _nom.val(nom);
        _gra.val(gra_);
        _nac.val(nac_);
        _sex.val(sex_);
      }
      else{
        _doc.val(_doc.val()+":|°|:"+$("[name=doc_1]").val());
        _ndoc.val(_ndoc.val()+":|°|:"+ndoc);
        _ape_p.val(_ape_p.val()+":|°|:"+ape_p);
        _ape_m.val(_ape_m.val()+":|°|:"+ape_m);
        _nom.val(_nom.val()+":|°|:"+nom);
        _gra.val(_gra.val()+":|°|:"+gra_);
        _nac.val(_nac.val()+":|°|:"+nac_);
        _sex.val(_sex.val()+":|°|:"+sex_);
      }
      btnGuardar.removeClass("disabled");
      window.scrollTo(0,100);
    });
    btnGuardar.on("click", function(){
      enviar=true;
      form1[0].submit();
    })
  </script>
@endsection
