@extends('layouts.app')
@section('title')
  IEI Jesus Maestro - Administrador
@endsection
@section('body')
  @include('snippets.nav')
  <div class="container container-fluid mt-5">
    <div class="row">
      <div class="card col-12">
        <div class="card-body">
          <h5 class="card-title">Zona administrativa privada</h5>
          <h6 class="card-subtitle mb-2 text-muted">Administrador {{Auth::user()->name}}</h6>
          <p class="card-text" style="text-align: justify;">Las secciones son la concepción inicial,
            pero pueden ser modificadas mientras se define cada sección si se encuentra
            más conveniente para el colegio y ambas partes están de acuerdo con el cambio.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="{{route("cerrar_sesion")}}" class="card-link">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </div>
@endsection
