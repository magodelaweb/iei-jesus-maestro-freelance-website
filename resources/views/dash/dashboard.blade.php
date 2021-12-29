@extends('layouts.admin')
@section('title')
  IEI Jesus Maestro - Administrador
@endsection
@section('body')
  <div class="container container-fluid">
    <div class="row">
      <div class="card col-12">
        <div class="card-body p-3">
          <h5 class="card-title">Zona administrativa privada</h5>
          <h6 class="card-subtitle mb-2 text-muted">Administrador {{Auth::user()->name}}</h6>
          <p class="card-text mt-3" style="text-align: justify;">Las secciones son la concepción inicial,
            pero pueden ser modificadas mientras se define cada sección si se encuentra
            más conveniente para el colegio y ambas partes están de acuerdo con el cambio.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="{{route("cerrar_sesion")}}" class="card-link">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </div>
@endsection
