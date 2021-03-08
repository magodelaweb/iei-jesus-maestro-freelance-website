<!doctype html>
<html lang="es">
  @include('snippets.head')
  <body>
    @include('snippets.pre')
    @include('snippets.top')
    @yield('body')  
    @include('snippets.script')
  </body>
</html>
