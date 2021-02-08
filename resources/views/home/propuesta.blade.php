@extends('layouts.app')
@section('title')
  IEI Jesus Maestro - Propuesta Pedagógica
@endsection
@section('body')
  @include('snippets.nav')
  <div class="container container-fluid mt-5">
    <div class="row">
      <div class="card col-12">
        <div class="card-body">
          <h5 class="card-title">Propuesta Pedagógica</h5>
          <h6 class="card-subtitle mb-2 text-muted">Propuesta Pedagógica subtitle</h6>
          <p class="card-text" style="text-align: justify;">Párrafos, título y contenido. (Editables, HTML visual, WYSIWYG).</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
  </div>
@endsection
