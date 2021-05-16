<!--//================Header start==============//-->
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <ul>
                  <li><a href="#" onclick="event.preventDefault();"><i class="fa fa-envelope" aria-hidden="true"></i>ieijesusmaestro@hotmail.com</a></li>
                  <li><a href="https://api.whatsapp.com/send?phone=51952568995&text=Hola,%20tengo%20una%20consulta" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i>952 568 995</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-right small-left">
                <ul>
                    {{-- <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                    <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li> --}}
                    @if (isset($base))
                      <li><a href="{{route("home")}}"><i class="fa fa-home" aria-hidden="true"></i>Volver a la página principal</a></li>
                    @elseif (Auth::check())
                      <li><a href="{{route("logout")}}"><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar Sesión</a></li>
                    @else
                      <li><a href="{{route("login")}}"><i class="fa fa-sign-in" aria-hidden="true"></i>Zona Admin</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</div>
