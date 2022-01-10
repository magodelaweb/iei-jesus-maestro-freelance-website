<!doctype html>
<html lang="es">
  @include('snippets.head')
  <body>
    @include('snippets.pre')
    @includeWhen(isset($includeNavAdmin)&&$includeNavAdmin, 'snippets.top_admin')
    @includeWhen(!(isset($includeNavAdmin)&&$includeNavAdmin), 'snippets.top')
    {{-- @includeWhen(!(isset($includeNavAdmin)&&$includeNavAdmin), 'snippets.top_edit') --}}
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
    </script>
  </body>
</html>
