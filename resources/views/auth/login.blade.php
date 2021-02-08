@extends('layouts.app')
@section('title')
  IEI Jesus Maestro - Login
@endsection
@section('body')
<body class="">
  <div class="container container-fluid mt-5">
    <div class="row">
      <div class="card col-12">
        <form id="frmLogin" action="{{route('authenticate')}}" method="post">
          @csrf
          <div class="form-group mt-3">
            <div class="input-group">
              <div class="input-group-prepend"><i class="icon s7-user"></i></div>
              <input parsley-trigger="change" data-parsley-errors-container="#email-errors" data-parsley-required-message="Es necesario ingresar un correo." data-parsley-type-message="Es necesario ingresar un correo válido." class="form-control pl-3" name="email" value="{{old("email")}}" id="username" type="email" placeholder="Username" autocomplete="off" required>
            </div>
            <div id="email-errors">
            </div>
            @if ($errors->any())
              <div id="login-errors">
                <ul id="lstError" class="parsley-errors-list filled">
                @foreach ($errors->all() as $error)
                  <li id="msgError" class="parsley-required">{{ $error }}</li>
                @endforeach
                </ul>
              </div>
            @endif
            @if (session('status'))
                <div id="msg" class="alert alert-success pl-2 py-3">
                    {{ session('status') }}
                </div>
            @endif
          </div>
          <div class="form-group mt-3">
            <div class="input-group">
              <div class="input-group-prepend"><i class="icon s7-lock"></i></div>
              <input parsley-trigger="change" data-parsley-errors-container="#password-errors" data-parsley-required-message="Es necesario ingresar una clave." class="form-control pl-3" name="password_060120211043" id="password" type="password" placeholder="Password" required>
            </div>
            <div id="password-errors"></div>
          </div>
          <div class="form-group login-submit mt-3">
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnSubmit" id="btnSubmit">Iniciar Sesión</button>
          </div>
          <div class="form-group row login-tools mt-3">
            <div class="col-sm-6 login-remember">
              <label class="custom-control custom-checkbox mt-2">
                <input class="custom-control-input" name="remember" type="checkbox"><span class="custom-control-label">Recordarme en este equipo</span>
              </label>
            </div>
            <div class="col-sm-6 pt-2 text-sm-right login-forgot-password"><a href="{{route("password.request")}}">¿Haz olvidado tu password?</a></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
@endsection
