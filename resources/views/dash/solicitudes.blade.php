@extends('layouts.admin')
@section('title')
  IEI Jesus Maestro - Solicitudes de Admisión
@endsection
@section('body')
  <div class="container container-fluid">
    <div class="row">
      <div class="card col-12">
        <div class="card-body p-3">
          <h5 class="card-title">Zona administrativa privada</h5>
          <h6 class="card-subtitle mb-2 text-muted">Administrador {{Auth::user()->name}}</h6>
          <div class="table-responsive mt-3">
            <table class="table table-hover table-condensed">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($solicitudes as $key => $registro)
                  <tr>
                    <td>{{$key}}</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@@mdo</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
