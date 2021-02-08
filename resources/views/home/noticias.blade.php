@extends('layouts.app')
@section('title')
  IEI Jesus Maestro - Noticias
@endsection
@section('body')
  @include('snippets.nav')
  <div class="container container-fluid mt-5">
    <div class="row">
      <div class="card col-12">
        <div class="card-body">
          <h5 class="card-title">Noticias</h5>
          <h6 class="card-subtitle mb-2 text-muted">Noticias subtitle</h6>
          <p class="card-text" style="text-align: justify;">
            Estilo blog.
            <ul>Listado de Noticias (Editables)
              <li>Foto de la Noticia, título, autor, fecha, resumen, y noticia completa (En su propia página). (Editable)</li>
            </ul>
            <ul>Barra lateral (Solo vista de PC) o Final (Vista Celular)
              <li>Plugin de Facebook, muestra fragmento de la actividad en Facebook de la institución. (Link de Facebook Editable)</li>
            </ul>
            <ul>Noticias Recientes
              <li>Listado de recientes: Foto pequeña, titulo y fecha.</li>
            </ul>
          </p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
  </div>
@endsection
