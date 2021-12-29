@extends('layouts.base')
@section('title')
  IEI Jesus Maestro - Registro
@endsection
@section('body')
<section class="padT80 padB50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2 col-xs-offset-0">
              <form id="frmLogin" action="{{route('registrate')}}" method="post">
                @csrf
                <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                    <h4 class="title">Regístrate</h4>
                    <small class="">(Solo administradores de la institución)</small>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                    <input name="name" value="{{old("name")}}" id="name" type="text" placeholder="Nombre y Apellido" autocomplete="off" required>
                    @if ($errors->has('name'))
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->get('name') as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                    @endif
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                    <input name="email" value="{{old("email")}}" id="email" type="email" placeholder="Correo Electrónico" autocomplete="off" required>
                    @if ($errors->has('email'))
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->get('email') as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                    @endif
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                    <input name="password" id="password" type="password" placeholder="Clave" required>
                    @if ($errors->has('password'))
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->get('password') as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                    @endif
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                    <input name="confirm" id="confirm" type="password" placeholder="Vuelva a ingresar su clave" required>
                    @if ($errors->has('confirm'))
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->get('confirm') as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                    @endif
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                    <button type="submit" class="itg-button">Registrar Administrador</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</section>
<!--//================Register end==============//-->
<div class="clear"></div>
@endsection
