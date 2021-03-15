@extends('layouts.mail')
@section('body')
  <div class="container">
    <div class="row">
      <h1>Consulta desde web</h1>
      <p>
        <strong>Nombre: </strong>{{$name}}
      </p>
      <p>
        <strong>Telefono: </strong>{{$phone}}
      </p>
      <p>
        <strong>Correo Electronico: </strong>{{$email}}
      </p>
      <h3>Consulta</h3>
      <p>
        {{$consulta}}
      </p>
    </div>
  </div>
@endsection
