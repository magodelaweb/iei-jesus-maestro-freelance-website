@extends('layouts.app')
@section('title')
  IEI Jesus Maestro - Horarios
@endsection
@section('body')
  @include('snippets.nav')
  <div class="container container-fluid mt-5">
    <div class="row">
      <div class="card col-12">
        <div class="card-body">
          <h5 class="card-title">Horarios</h5>
          <h6 class="card-subtitle mb-2 text-muted">Horarios subtitle</h6>
          <p class="card-text" style="text-align: justify;">Muestra los horarios (Parcialmente editable, se requieren formatos para adaptar el diseño a los formatos de la institución).</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
  </div>
@endsection
