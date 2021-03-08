<!doctype html>
<html lang="es">
  @include('snippets.head')
  <body>
    @include('snippets.pre')
    @include('snippets.top')
    @include('snippets.navadmin')
    @yield('body')
    @include('snippets.script')
  </body>
</html>
