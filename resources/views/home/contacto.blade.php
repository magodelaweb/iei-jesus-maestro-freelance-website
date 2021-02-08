@extends('layouts.app')
@section('title')
  IEI Jesus Maestro - Contacto
@endsection
@section('body')
  @include('snippets.nav')
  <div class="container container-fluid mt-5">
    <div class="row">
      <div class="card col-12">
        <div class="card-body">
          <h5 class="card-title">Contacto</h5>
          <h6 class="card-subtitle mb-2 text-muted">Contacto subtitle</h6>
          <p class="card-text" style="text-align: justify;">
              <li>Datos de contacto</li>
              <li>Formulario de contacto (Con Google Captcha)</li>
              <li>Mapa</li>
            </ul></p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
  </div>
@endsection
