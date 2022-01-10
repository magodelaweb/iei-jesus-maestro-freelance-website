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
    function cancelNav(ctr,ctrInput,ctrA,reset){
      let origen = $(ctr);
      origen.addClass("d-none");
      let hermanoAceptar = origen.siblings("a.nav-editable.editable-aceptar");
      hermanoAceptar.addClass("d-none");
      let origenInput=$(ctrInput);
      origenInput.addClass("d-none");
      origenInput.val(reset);
      let destino = $(ctrA);
      destino.removeClass("d-none");
    }
    </script>
  </body>
</html>
