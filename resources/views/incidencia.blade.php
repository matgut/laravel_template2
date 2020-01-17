
@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-md-12 grid-margin-custom-cgm">
          <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex flex-wrap">
              <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">Incidencia</p>
              </div>
            </div>
       </div>
    </div>
</div>
<div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Registro de incidencias</h4>
            <form class="forms-sample">
                <div class="form-group">
                    <label for="severidad">Categoria</label>
                    <select class="form-control" id="severidad">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="severidad">Severidad</label>
                    <select class="form-control" id="severidad">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
              <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" placeholder="Titulo">
              </div>
              <div class="form-group">
                <label for="decrip">Descripción</label>
                <textarea class="form-control" id="decrip" rows="6"></textarea>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Registrar</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
@endsection
