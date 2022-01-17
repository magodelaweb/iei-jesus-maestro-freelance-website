<!doctype html>
<html lang="es">
  @include('snippets.head')
  <body>
    @include('snippets.pre')
    @includeWhen(isset($includeNavAdmin)&&$includeNavAdmin, 'snippets.top_admin')
    {{-- @includeWhen(!(isset($includeNavAdmin)&&$includeNavAdmin), 'snippets.top') --}}
    @includeWhen(!(isset($includeNavAdmin)&&$includeNavAdmin), 'snippets.top_edit')
    {{-- @includeWhen(!(isset($includeNavAdmin)&&$includeNavAdmin), 'snippets.navadmin') --}}
    @includeWhen(!(isset($includeNavAdmin)&&$includeNavAdmin), 'snippets.navadmin_edit')
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
    <div id="modalSubirImagen" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Seleccionar Imagen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerrarSubirImagen();">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="mb-3">Galería de imagenes previas. (Ordenadas: El que está en uso, luego, del mas reciente al mas antiguo por fecha de creación.)</p>
            <div class="card-group py-3" style="overflow-x: scroll; flex-flow: row nowrap;">
              @foreach ($listaLayoutFinal as $key => $imgLayout)
                <div class="card" style="min-width: 12rem; flex: revert;">
                  <img class="card-img-top p-3 text-center" src="{{asset('storage/layout')}}/{{$imgLayout->nombre}}" alt="Imagen de {{$imgLayout->nombre}}" style="width:12rem; margin: 0 auto;">
                  <div class="card-body">
                    <h5 class="card-title text-center">{{$imgLayout->nombre}}</h5>
                    <p class="card-text text-center">{{$imgLayout->size}}</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Subido el {{$imgLayout->last_update}}</small>
                  </div>
                </div>
              @endforeach
            </div>
            <p class="mt-3">Subir nuevo archivo</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrarSubirImagen();">Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar Cambios</button>
          </div>
        </div>
      </div>
    </div>
    @include('snippets.script')
    <script type="text/javascript">
    $(document).ready(function() {

    });
    function mostrarSubirImagen(){
      $("#modalSubirImagen").modal('show');
    }
    function cerrarSubirImagen(){
      $("#modalSubirImagen").modal('hide');
    }
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
