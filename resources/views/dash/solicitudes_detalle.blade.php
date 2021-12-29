@extends('layouts.admin')
@section('title')
  IEI Jesus Maestro - Solicitudes de Admisión
@endsection
@section('body')
  <div class="container container-fluid">
    <div class="row">
      <div class="card col-12" style="border:0;">
        <div class="card-body p-3">
          <h5 class="card-title">Apoderado: {{$registro->apoderado->apellido_paterno}} {{$registro->apoderado->apellido_materno}}, {{$registro->apoderado->nombres}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Fecha y hora de la solicitud: {{IEI::fecha_tabla_larga($registro->fecha)}}</h6>
          <p class="card-text mt-3">
            <b>Documento: </b>{{$registro->apoderado->tipo_documento}} {{$registro->apoderado->documento}} <br/>
            <b>Correo Electrónico: </b>{{$registro->apoderado->correo_electronico}} <br/>
            <b>Celular: </b>{{$registro->apoderado->celular}} <br/>
            <b>Fijo: </b>{{$registro->apoderado->telefono_fijo}}
          </p>
          <h5 class="card-title">Dependientes: </h5>
          <div class="container container-fluid">
            <div class="row" style="display: flex; flex-wrap: wrap;">
              <div class="col-auto">
                <div class="card py-3 m-3 box-3d" style="width: 36rem;">
                  <div class="card-body p-3">
                    <h5 class="card-title">Apoderado: {{$registro->apoderado->apellido_paterno}} {{$registro->apoderado->apellido_materno}}, {{$registro->apoderado->nombres}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Fecha y hora de la solicitud: {{IEI::fecha_tabla_larga($registro->fecha)}}</h6>
                    <p class="card-text mt-3">
                      <b>Documento: </b>{{$registro->apoderado->tipo_documento}} {{$registro->apoderado->documento}} <br/>
                      <b>Correo Electrónico: </b>{{$registro->apoderado->correo_electronico}} <br/>
                      <b>Celular: </b>{{$registro->apoderado->celular}} <br/>
                      <b>Fijo: </b>{{$registro->apoderado->telefono_fijo}}
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <div class="card py-3 m-3 box-3d" style="width: 36rem;">
                  <div class="card-body p-3">
                    <h5 class="card-title">Apoderado: {{$registro->apoderado->apellido_paterno}} {{$registro->apoderado->apellido_materno}}, {{$registro->apoderado->nombres}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Fecha y hora de la solicitud: {{IEI::fecha_tabla_larga($registro->fecha)}}</h6>
                    <p class="card-text mt-3">
                      <b>Documento: </b>{{$registro->apoderado->tipo_documento}} {{$registro->apoderado->documento}} <br/>
                      <b>Correo Electrónico: </b>{{$registro->apoderado->correo_electronico}} <br/>
                      <b>Celular: </b>{{$registro->apoderado->celular}} <br/>
                      <b>Fijo: </b>{{$registro->apoderado->telefono_fijo}}
                    </p>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
