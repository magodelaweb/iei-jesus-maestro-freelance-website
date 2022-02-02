<!doctype html>
<html lang="es">
  @include('snippets.head')
  <body>
    @csrf
    @include('snippets.pre')
    @includeWhen(isset($includeNavAdmin)&&$includeNavAdmin, 'snippets.top_admin')
    {{-- @includeWhen(!(isset($includeNavAdmin)&&$includeNavAdmin), 'snippets.top') --}}
    @includeWhen(!(isset($includeNavAdmin)&&$includeNavAdmin), 'snippets.top_edit')
    {{-- @includeWhen(!(isset($includeNavAdmin)&&$includeNavAdmin), 'snippets.navadmin') --}}
    @includeWhen(!(isset($includeNavAdmin)&&$includeNavAdmin), 'snippets.navadmin_edit')
    <div class="page-container">
      <div class="page-wrapper">
        <div id="sidebar" class="sidebar collapse in width">
          <div class="sidebar-content">
              @include('snippets.sidebar')
          </div>
        </div>
        <div class="content-wrapper">
          <a id="sidebarCollapse" href="javascript:;" onclick="toogleSidebar(this);" class="btn btn-default"><b><span class="cerrar"><i class="fa fa-angle-left"></i></span><span class="abrir"><i class="fa fa-angle-right"></i></span></b></a>
          @yield('body')
        </div>
      </div>
    </div>
    <div id="modalSubirImagen" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Seleccionar Imagen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerrarSubirImagen();">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="mb-3">Galería de imagenes previas. (Ordenadas: El que está en uso, luego, del mas reciente al mas antiguo por fecha de creación.)</p>
            <div id="ctnImgLogo" class="card-group py-3" style="overflow-x: scroll; flex-flow: row nowrap;">
              @foreach ($listaLayoutFinal as $key => $imgLayout)
                <a class="card{{($imgLayout->seleccionada?" confirm ctnSelect":"")}}" style="min-width: 12rem; flex: revert;" onclick="seleccionar(this);">
                  <img class="card-img-top p-3 text-center" src="{{asset('storage/layout')}}/{{$imgLayout->nombre}}" alt="Imagen de {{$imgLayout->nombre}}" style="width:12rem; margin: 0 auto;">
                  <div class="card-body" style="width:12rem; margin: 0 auto;">
                    <h5 class="card-title text-center text-truncate nameImg">{{$imgLayout->nombre}}</h5>
                    <p class="card-text text-center">{{$imgLayout->size}}</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Subido el {{$imgLayout->last_update}}</small>
                  </div>
                </a>
              @endforeach
            </div>
            <form id="frmSubirImagenLogo" class="form" action="{{route("subirImagenLogo")}}" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="mt-3 form-control-file btn btn-secondary transition-3d-hover file-attachment-btn mb-1 mb-sm-0 mr-1" for="nuevaImagenLogo">
                  Subir una nueva imagen
                  <input id="nuevaImagenLogo" name="fileLogo" type="file" class="file-attachment-btn__label" accept="image/jpeg,image/gif,image/x-png">
                </label>
                {{-- <label for="exampleFormControlFile1">Subir una nueva imagen</label>
                <input name="fileLogo" type="file" class="form-control-file" id="nuevaImagenLogo" accept="image/jpeg,image/gif,image/x-png"> --}}
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrarSubirImagen();">Cerrar</button>
            <button type="button" class="btn btn-primary" onclick="guardarImagen();">Guardar Cambios</button>
          </div>
        </div>
      </div>
    </div>
    @include('snippets.script')
    <script type="text/javascript">
    var token=$("[name=_token]").val();
    $(document).ready(function() {
      token=$("[name=_token]").val();
    });
    function seleccionar(ctr){
      $(ctr).siblings("a.card").removeClass("ctnSelect");
      $(ctr).addClass("ctnSelect");
    }
    $("#modalSubirImagen").on("hidden.bs.modal", function () {
      let confirm=$("a.card.confirm");
      confirm.siblings("a.card").removeClass("ctnSelect");
      confirm.addClass("ctnSelect");
    });
    function guardarImagen(){
      let contenedor=$("#ctnImgLogo");
      let select=$("a.card.ctnSelect");
      select.siblings("a.card").removeClass("confirm");
      select.addClass("confirm");
      let nameImg=select.find("h5.nameImg").html();
      enviarParamWebImg('logo',nameImg,"#imgLogo",contenedor,select);
      // debugger
      // console.log(nameImg);
    }
    function mostrarSubirImagen(){
      $("#modalSubirImagen").modal('show');
    }
    function cerrarSubirImagen(){
      $("#ctnImgLogo").scrollLeft(0);
      $("#modalSubirImagen").modal('hide');
    }
    function toogleSidebar(elem){
      $("#sidebar").toggleClass("active");
      $(elem).toggleClass("active");
    }
    $(".input-editable").on("keyup", function(e){
      if (event.code=="Enter" || event.code=="NumpadEnter") {
        let btnAceptar=$(this).siblings("a.nav-editable.editable-aceptar");
        saveNav(btnAceptar);
      }
      else if (event.code=="Escape") {
        let btnCancelar=$(this).siblings("a.nav-editable.editable-cancelar");
        cancelNav(btnCancelar);
      }
      else{
        return;
      }
    })
    function cambiarInput(ctrA,ctrInput){
      let origen = $(ctrA);
      origen.addClass("d-none");
      let destino=$(ctrInput);
      let navs=origen.siblings(".nav-editable");
      destino.removeClass("d-none");
      navs.removeClass("d-none");
      let destinoJs=destino[0];
      setTimeout(function(){
        destino.focus();
        setTimeout(function(){
          destinoJs.setSelectionRange(0, destinoJs.value.length)
        }, 20);
      }, 20);
    }
    function cancelNav(ctr){
      let origen = $(ctr);
      let ctrInput = origen.attr("data-txt");
      let ctrA = origen.attr("data-a");
      let reset = origen.attr("data-reset");
      origen.addClass("d-none");
      let hermanoAceptar = origen.siblings("a.nav-editable.editable-aceptar");
      hermanoAceptar.addClass("d-none");
      let origenInput=$(ctrInput);
      origenInput.addClass("d-none");
      origenInput.val(reset);
      let destino = $(ctrA);
      destino.removeClass("d-none");
    }
    function saveNav(ctr){
      let origen = $(ctr); //btn Aceptar
      let ctrInput = origen.attr("data-txt");
      let ctrA = origen.attr("data-a");
      let campo = origen.attr("data-campo");

      let hermanoCancelar = origen.siblings("a.nav-editable.editable-cancelar"); //btn Cancelar

      let origenInput=$(ctrInput);
      let valor=origenInput.val();
      hermanoCancelar.attr("data-reset",valor);
      let destino = $(ctrA);
      enviaParamWeb(campo,valor,destino,origenInput,origen,hermanoCancelar);
      destino.find(".span-value").html(valor);
    }
    function enviarParamWebImg(campo,valor,ctrImg,contenedor,select){
      $.ajax({
        method: "POST",
        url: "{{route("enviaParamWeb")}}",
        data: { campo: campo, valor: valor, _token:token }
      })
      .done(function( result ) {
        if (result) {
          let nuevoSrc="{{asset('storage/layout')}}/"+valor;
          $(ctrImg).attr("src",nuevoSrc);
          cerrarSubirImagen();
          contenedor.prepend(select);
          //cerrar
          //actualizar logo
          // animacionOk(aJq,inputJq,btnAceptar,btnCancelar);
        }
        else{
          location.reload();
        }
      });
    }
    function enviaParamWeb(campo,valor,aJq,inputJq,btnAceptar,btnCancelar){
      //ayax y consoleLog
      $.ajax({
        method: "POST",
        url: "{{route("enviaParamWeb")}}",
        data: { campo: campo, valor: valor, _token:token }
      })
      .done(function( result ) {
        if (result) {
          animacionOk(aJq,inputJq,btnAceptar,btnCancelar);
        }
        else{
          location.reload();
        }
      });
    }
    function animacionOk(aJq,inputJq,btnAceptar,btnCancelar) {
      aJq.addClass("ok");
      inputJq.addClass("d-none");
      btnAceptar.addClass("d-none");
      btnCancelar.addClass("d-none");
      aJq.removeClass("d-none");
      setTimeout(function(){
        aJq.removeClass("ok");
      }, 750);
    }
    $("#nuevaImagenLogo").on("change", function(){
      // alert("input file change");
      let form=this.parentElement.parentElement.parentElement;
      let contenedor=$("#ctnImgLogo");
      if (this.files.length > 0) {
        var file=this.files[0];
        var formData = new FormData(form);
        formData.append("_token", token);
        $.ajax({
          method: "POST",
          url: form.action,
          data: formData,
          cache: false,
          contentType: false,
          processData: false
        })
        .done(function( data ) {
          if (data.success) {
            // alert("success");
            cargarBase64EnElemento(file,data.result);
          }
          else{
            // alert("error");
            document.getElementById("frmSubirImagenLogo").reset();
            contenedor.addClass("ctnError");
            setTimeout(function(){
              contenedor.removeClass("ctnError");
            }, 750);
            console.log('Error: ', result);
            // location.reload(); error
          }
        });
      }
    });
    function cargarBase64EnElemento(file,imgLayout){
      var reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = function () {
        let component=componenteHtmlImgLogo(imgLayout);
        let contenedor=$("#ctnImgLogo");
        let cards=contenedor.find(".card");
        cards.removeClass("ctnSelect");
        contenedor.prepend(component);
        // let longCard=cards.first().width();
        // let nCard=cards.length;
        // let ancho=nCard*longCard+100;
        document.getElementById("frmSubirImagenLogo").reset();
        contenedor.animate({
            scrollLeft: 0
        }, 300);
        contenedor.addClass("ctnOk");
        setTimeout(function(){
          contenedor.removeClass("ctnOk");
        }, 750);
        //return reader.result;
        // $("#imgFotoEdit").attr("src",reader.result);
        // //console.log(reader.result);
        // ///Enviar foto por post
        // $("input[name=hdnBorrar]").first().val(0);
        // $("#frmFoto").submit();
      };
      reader.onerror = function (error) {
        console.log('Error: ', error);
        contenedor.addClass("ctnError");
        setTimeout(function(){
          contenedor.removeClass("ctnError");
        }, 750);
        //return "";
      };
    }
    function componenteHtmlImgLogo(imgLayout){
      let src="{{asset('storage/layout')}}/"+imgLayout.nombre;
      let component=`
      <a class="card ctnSelect" style="min-width: 12rem; flex: revert;" onclick="seleccionar(this);">
        <img class="card-img-top p-3 text-center" src="`+src+`" alt="Imagen de `+imgLayout.nombre+`" style="width:12rem; margin: 0 auto;">
        <div class="card-body" style="width:12rem; margin: 0 auto;">
          <h5 class="card-title text-center text-truncate nameImg">`+imgLayout.nombre+`</h5>
          <p class="card-text text-center">`+sizeToHuman(imgLayout.peso_bytes)+`</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Subido el `+fecha_es(imgLayout.ultimo_uso)+`</small>
        </div>
      </a>`
      return component;
    }

    function sizeToHuman(size){
      let fileSize = size;
      if (size >= 1073741824) {
        fileSize = Math.round(size*100 / 1024 / 1024 / 1024)/100 + ' GB';
      } else if (size >= 1048576) {
          fileSize = Math.round(size*100 / 1024 / 1024)/100 + ' MB';
      } else if(size >= 1024) {
          fileSize = Math.round(size*100 / 1024)/100 + ' KB';
      } else {
          fileSize = size + ' bytes';
      }
      return fileSize;
    }

    function fecha_es(iso){
      let date = new Date(iso);
      let day = date.getDate();
      let month = date.getMonth() + 1;
      let year = date.getFullYear();
      if(month < 10){
        return `${day}/0${month}/${year}`;
      }else{
        return `${day}/${month}/${year}`;
      }
    }

    </script>
  </body>
</html>
