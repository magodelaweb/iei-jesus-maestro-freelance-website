<!doctype html>
<html lang="es">
  @include('snippets.head')
  <body>
    @include('snippets.pre')
    @includeWhen(isset($includeNavAdmin)&&$includeNavAdmin, 'snippets.top_admin')
    {{-- @includeWhen(!(isset($includeNavAdmin)&&$includeNavAdmin), 'snippets.top') --}}
    @includeWhen(!(isset($includeNavAdmin)&&$includeNavAdmin), 'snippets.top_edit')
    @includeWhen(!(isset($includeNavAdmin)&&$includeNavAdmin), 'snippets.navadmin')
    <div class="page-container">
      <div class="page-wrapper">
        <div id="sidebar" class="sidebar collapse in width">
          <div class="sidebar-content">
              @include('snippets.sidebar')
          </div>
        </div>
        <div class="content-wrapper">
          <a id="sidebarCollapse" href="javascript:;" onclick="toogleSidebar(this);" class="btn btn-default"><b><span class="cerrar"><i class="fa fa-angle-left"></i></span><span class="abrir"><i class="fa fa-angle-right"></i></span></b></a>
          @yield('body')
        </div>
      </div>
    </div>
    @include('snippets.script')
    <script type="text/javascript">
    $(document).ready(function() {

    });
    function toogleSidebar(elem){
      $("#sidebar").toggleClass("active");
      $(elem).toggleClass("active");
    }
    $(".input-editable").on("keyup", function(e){
      if (event.code=="Enter" || event.code=="NumpadEnter") {
        let btnAceptar=$(this).siblings("a.nav-editable.editable-aceptar");
        saveNav(btnAceptar);
      }
      else if (event.code=="Escape") {
        let btnCancelar=$(this).siblings("a.nav-editable.editable-cancelar");
        cancelNav(btnCancelar);
      }
      else{
        return;
      }
    })
    function cambiarInput(ctrA,ctrInput){
      let origen = $(ctrA);
      origen.addClass("d-none");
      let destino=$(ctrInput);
      let navs=origen.siblings(".nav-editable");
      destino.removeClass("d-none");
      navs.removeClass("d-none");
      let destinoJs=destino[0];
      setTimeout(function(){
        destino.focus();
        setTimeout(function(){
          destinoJs.setSelectionRange(0, destinoJs.value.length)
        }, 20);
      }, 20);
    }
    function cancelNav(ctr){
      let origen = $(ctr);
      let ctrInput = origen.attr("data-txt");
      let ctrA = origen.attr("data-a");
      let reset = origen.attr("data-reset");
      origen.addClass("d-none");
      let hermanoAceptar = origen.siblings("a.nav-editable.editable-aceptar");
      hermanoAceptar.addClass("d-none");
      let origenInput=$(ctrInput);
      origenInput.addClass("d-none");
      origenInput.val(reset);
      let destino = $(ctrA);
      destino.removeClass("d-none");
    }
    function saveNav(ctr){
      let origen = $(ctr); //btn Aceptar
      let ctrInput = origen.attr("data-txt");
      let ctrA = origen.attr("data-a");
      let campo = origen.attr("data-campo");

      let hermanoCancelar = origen.siblings("a.nav-editable.editable-cancelar"); //btn Cancelar

      let origenInput=$(ctrInput);
      let valor = origenInput.val();
      hermanoCancelar.attr("data-reset",valor);
      let destino = $(ctrA);
      enviaParamWeb(campo,valor,destino,origenInput,origen,hermanoCancelar);
      destino.find(".span-value").html(valor);
    }
    function enviaParamWeb(campo,valor,aJq,inputJq,btnAceptar,btnCancelar){
      //ayax y consoleLog
      var token = '{{csrf_token()}}';
      $.ajax({
        method: "POST",
        url: "{{route("enviaParamWeb")}}",
        data: { campo: campo, valor: valor, _token:token }
      })
      .done(function( result ) {
        if (result) {
          animacionOk(aJq,inputJq,btnAceptar,btnCancelar);
        }
        else{
          location.reload();
        }
      });
    }
    function animacionOk(aJq,inputJq,btnAceptar,btnCancelar) {
      aJq.addClass("ok");
      inputJq.addClass("d-none");
      btnAceptar.addClass("d-none");
      btnCancelar.addClass("d-none");
      aJq.removeClass("d-none");
      setTimeout(function(){
        aJq.removeClass("ok");
      }, 750);
    }
    </script>
  </body>
</html>
