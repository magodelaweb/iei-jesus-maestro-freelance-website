
<div class="row">
  <div class="col-12 col-lg-3">
      <h4 class="title">Datos del interesado</h4>
      <small>(Hijos)</small>
  </div>
  <button id="btn3" type="button" class="btn btn-primary disabled col-4 col-lg-3 offset-lg-6 float-lg-none mt-4 mb-5 float-right"><i class="fa fa-save"></i> Guardar</button>
</div>
<div class="row">
  <div class="input-group mb-3 col-12 col-lg-6">
    <span class="input-group-addon col-4" id="basic-addon1e">Documento</span>
    <select name="doc_1" class="form-control col-8 me-lg-3" placeholder="Documento" aria-describedby="basic-addon1e" style="color:#777;height: 40px;" required />
      <option value="1" selected>DNI</option>
      <option value="2">Carnet Extranjería</option>
      <option value="3">Pasaporte</option>
    </select>
  </div>
  <div class="input-group mb-3 col-12 col-lg-6 ps-lg-3">
    <span class="input-group-addon col-4" id="basic-addon2e">Número de documento <span class="text-danger">*</span></span>
    <input type="text" name="num_doc_1" class="form-control col-8" placeholder="Número de documento" aria-describedby="basic-addon2e" required />
  </div>
</div>
<div class="row">
  <div class="input-group mb-3 col-12 col-lg-6">
    <span class="input-group-addon col-4" id="basic-addon3e">Apellido Paterno</span>
    <input type="text" name="ape_pat_1" class="form-control col-8" placeholder="Apellido Paterno" aria-describedby="basic-addon3e" />
  </div>
  <div class="input-group mb-3 col-12 col-lg-6 ps-lg-3">
    <span class="input-group-addon col-4" id="basic-addon4e">Apellido Materno</span>
    <input type="text" name="ape_mat_1" class="form-control col-8" placeholder="Apellido Materno" aria-describedby="basic-addon4e" />
  </div>
</div>
<div class="row">
  <div class="input-group mb-3 col-12">
    <span class="input-group-addon col-4 col-lg-2 float-lg-none" id="basic-addon5e">Nombres</span>
    <input type="text" name="nom_1" class="form-control col-8 col-lg-10 ps-lg-3" placeholder="Nombres" aria-describedby="basic-addon5e" />
  </div>
</div>
<div class="row">
  <div class="input-group mb-3 col-12 col-lg-4">
    <span class="input-group-addon col-4" id="basic-addon6e">Grado de admisión</span>
    <select name="grado_1" class="form-control col-8 me-lg-3" placeholder="Grado de admisión" aria-describedby="basic-addon6e" style="color:#777;height: 40px;" required />
      <option value="3" selected>3 años</option>
      <option value="4">4 años</option>
      <option value="5">5 años</option>
    </select>
  </div>
  <div class="input-group mb-3 col-12 col-lg-4 ps-lg-3">
    <span class="input-group-addon col-4" id="basic-addon7e">Fecha de Nacimiento</span>
    <input type="date" value="2016-01-01" timezone="America/Lima" name="fec_nac_1" class="form-control col-8 col-lg-10 ps-lg-3" placeholder="Fecha de Nacimiento" aria-describedby="basic-addon7e" style="color:#777;height: 40px;" required pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}"/>
  </div>
  <div class="input-group mb-3 col-12 col-lg-4 ps-lg-3">
    <span class="input-group-addon col-4" id="basic-addon8e">Sexo</span>
    <select name="sex_1" class="form-control col-8 me-lg-3" placeholder="Sexo" aria-describedby="basic-addon8e" style="color:#777;height: 40px;" required />
      <option value="1" selected>Femenino</option>
      <option value="2">Masculino</option>
    </select>
  </div>
</div>
<div class="row">
  <button id="btn2" type="submit" class="btn btn-success col-6 col-lg-3 offset-lg-9 float-lg-none my-3 float-right"><i class="fa fa-plus"></i> Agregar interesado</button>
</div>
