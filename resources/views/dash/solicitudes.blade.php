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
                  <th>Id</th>
                  <th>Fecha</th>
                  <th>Documento</th>
                  <th>Apellido P.</th>
                  <th>Apellido M.</th>
                  <th>Nombres</th>
                  <th>Parentesco</th>
                  <th>Dependientes</th>
                  <th>Estado</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($solicitudes as $key => $registro)
                  <tr>
                    <td>{{$registro->id}}</td>
                    <td>{{IEI::fecha_tabla($registro->fecha)}}</td>
                    <td>{{$registro->apoderado->tipo_documento}} {{$registro->apoderado->documento}}</td>
                    <td>{{$registro->apoderado->apellido_paterno}}</td>
                    <td>{{$registro->apoderado->apellido_materno}}</td>
                    <td>{{$registro->apoderado->nombres}}</td>
                    <td>{{$registro->apoderado->parentesco}}</td>
                    <td>{{$registro->apoderado->dependientes->count()}}</td>
                    <td>{{$registro->estado}}</td>
                    <td><a href="{{route("solicitudes_detalle",["id"=>$registro->id])}}"><i class="fa fa-list-alt"></i></a> </td>
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
