@extends('layouts.app')
@section('title')
  IEI Jesus Maestro - Inicio
@endsection
@section('body')
  @include('snippets.nav')
  {{-- <div class="container container-fluid mt-5">
    <div class="row">
      <div class="card col-12">
        <div class="card-body">
          <h5 class="card-title">Inicio</h5>
          <h6 class="card-subtitle mb-2 text-muted">Inicio subtitle</h6>
          <p class="card-text" style="text-align: justify;">Esta pantalla debe mostrar el diferencial del colegio, desde un aspecto de marketing:
            <ul>
              <li>Contener un resumen de todas las otras secciones</li>
              <li>Definir un contenido específico para esta sección (diferencial)</li>
              <li>Botón CTO</li>
            </ul></p>
          <a href="{{route("login")}}" class="card-link">Login</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
  </div> --}}
@endsection
