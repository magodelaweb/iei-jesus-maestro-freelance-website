@extends('layouts.admin')
@section('title')
  IEI Jesus Maestro - Solicitudes de Admisión
@endsection
@section('body')
  <div class="container container-fluid">
    <div class="row">
      <div class="card col-12" style="border:0;">
        <div class="card-body p-3">
          <h5 class="card-title">Solicitante: {{$registro->apoderado->apellido_paterno}} {{$registro->apoderado->apellido_materno}}, {{$registro->apoderado->nombres}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Fecha y hora de la solicitud: {{IEI::fecha_tabla_larga($registro->fecha)}}</h6>
          <p class="card-text mt-3">
            <b>Parentesco: </b>{{$registro->apoderado->parentesco}}<br/>
            <b>Documento: </b>{{$registro->apoderado->tipo_documento}} {{$registro->apoderado->documento}} <br/>
            <b>Correo Electrónico: </b>{{$registro->apoderado->correo_electronico}} <br/>
            <b>Celular: </b>{{$registro->apoderado->celular}} <br/>
            <b>Fijo: </b>{{$registro->apoderado->telefono_fijo}}
          </p>
          <h5 class="card-title">Dependientes: </h5>
          <div class="container container-fluid">
            <div class="row" style="display: flex; flex-wrap: wrap;">
              @if ($registro->apoderado->dependientes->count()==0)
                <div class="col-auto">
                  <div class="card py-3 m-3 box-3d" style="width: 36rem;">
                    <div class="card-body p-3">
                      <h5 class="card-title">No se han registrado dependientes en esta solicitud</h5>                      
                    </div>
                  </div>
                </div>
              @endif
              @foreach ($registro->apoderado->dependientes as $keyDep => $dependiente)
                <div class="col-auto">
                  <div class="card py-3 m-3 box-3d" style="width: 36rem;">
                    <div class="card-body p-3">
                      <h5 class="card-title">{{$dependiente->apellido_paterno}} {{$dependiente->apellido_materno}}, {{$dependiente->nombres}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Fecha de nacimiento: {{IEI::fecha_tabla($dependiente->fecha_nacimiento)}}</h6>
                      <p class="card-text mt-3">
                        <b>Documento: </b>{{$dependiente->tipo_documento}} {{$dependiente->documento}} <br/>
                        <b>Grado: </b>{{$dependiente->grado}} <br/>
                        <b>Sexo: </b>{{IEI::sexo_largo($dependiente->sexo)}}
                        {{-- <b>Correo Electrónico: </b>{{$dependiente->correo_electronico}} <br/> --}}
                        {{-- <b>Celular: </b>{{$dependiente->celular}} <br/> --}}
                        {{-- <b>Fijo: </b>{{$dependiente->telefono_fijo}} --}}
                      </p>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
