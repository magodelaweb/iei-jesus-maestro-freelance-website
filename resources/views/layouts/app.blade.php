<!doctype html>
<html lang="es">
  @include('snippets.head')
  <body>
    @include('snippets.pre')
    @include('snippets.top')
    @include('snippets.nav')
    @yield('body')
    @include('snippets.footer')
    @include('snippets.script')
  </body>
</html>
