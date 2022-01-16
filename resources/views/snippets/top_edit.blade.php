<!--//================Header start==============//-->
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <ul>
                  <li class="position-relative">
                    <a id="aEmail" class="editable" href="#" onclick="event.preventDefault();cambiarInput(this,'#txtEmail');"><i class="fa fa-envelope" aria-hidden="true"></i><span class="span-value">{{IEI::ctc($web,'email')}}</span></a>
                    <input type="text" class="form-control d-none input-editable" id="txtEmail" name="email"  aria-describedby="Modificar Correo Electrónico"
                      value="{{IEI::ctc($web,'email')}}" placeholder="Ingrese Correo Electrónico" style="min-width: 18em;">
                    </input>
                    <a class="btn btn-primary position-absolute nav-editable editable-aceptar d-none" role="button"
                    data-a="#aEmail" data-txt="#txtEmail" data-campo='email'
                    onclick="event.preventDefault();saveNav(this);">
                      <i class="fa fa-check" aria-hidden="true" style="cursor:pointer;"></i>
                    </a>
                    <a  href="#" class="btn btn-danger position-absolute nav-editable editable-cancelar d-none" role="button"
                    data-reset="{{IEI::ctc($web,'email')}}" data-a="#aEmail" data-txt="#txtEmail"
                    onclick="event.preventDefault();cancelNav(this);">
                      <i class="fa fa-times" aria-hidden="true" style="cursor:pointer;"></i>
                    </a>
                  </li>
                  <li class="position-relative">
                    <a id="aWhatsApp" class="editable" href="#" onclick="event.preventDefault();cambiarInput(this,'#txtWhatsApp');"><i class="fa fa-whatsapp" aria-hidden="true"></i><span class="span-value">{{IEI::ctc($web,'whatsapp')}}</span></a>
                    <input type="text" class="form-control d-none input-editable" id="txtWhatsApp" name="whatsapp"  aria-describedby="Modificar WhatsApp"
                      value="{{IEI::ctc($web,'whatsapp')}}" placeholder="Ingrese WhatsApp" style="min-width: 18em;">
                    </input>
                    <a class="btn btn-primary position-absolute nav-editable editable-aceptar d-none" role="button"
                    data-a="#aWhatsApp" data-txt="#txtWhatsApp" data-campo='whatsapp'
                    onclick="event.preventDefault();saveNav(this);">
                      <i class="fa fa-check" aria-hidden="true" style="cursor:pointer;"></i>
                    </a>
                    <a  href="#" class="btn btn-danger position-absolute nav-editable editable-cancelar d-none" role="button"
                    data-reset="{{IEI::ctc($web,'whatsapp')}}" data-a="#aWhatsApp" data-txt="#txtWhatsApp"
                    onclick="event.preventDefault();cancelNav(this);">
                      <i class="fa fa-times" aria-hidden="true" style="cursor:pointer;"></i>
                    </a>
                  </li>
                  {{-- <li>
                    <input type="email" class="form-control" id="txtEmail" name="email"  aria-describedby="Modificar Correo Electrónico"
                    value="{{IEI::ctc($web,'email')}}" placeholder="Ingrese Correo Electrónico"> --}}
                    {{-- <a href="#" onclick="event.preventDefault();"><i class="fa fa-envelope" aria-hidden="true"></i>{{IEI::ctc($web,'email')}}</a></li> --}}
                  {{-- <li>
                    <input type="text" class="form-control" id="txtCelular" name="celular"  aria-describedby="Modificar WhatsApp"
                    value="{{IEI::ctc($web,'whatsapp')}}" placeholder="Ingrese WhatsApp"> --}}
                    {{-- <a href="https://api.whatsapp.com/send?phone=51{{IEI::sti(IEI::ctc($web,'whatsapp'))}}&text=Hola,%20tengo%20una%20consulta" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i>{{IEI::ctc($web,'whatsapp')}}</a></li> --}}
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
