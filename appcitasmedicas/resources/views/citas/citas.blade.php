@extends('layouts.panel')
@section('content')

<div id="calendar" style="width: 50%; display: inline-block">
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#evento">
    Launch
  </button>

  <!-- Modal -->
  <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Informacion cita</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
              </div>
              <div class="modal-body">
                  <form action="">

                    <div class="form-group">
                      <label for="id">ID</label>
                      <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="" value="{{Auth::User()->thirdDataUser->data_id}}" readonly="readonly">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                      <label for="">Nombre</label>
                      <input type="text" class="form-control" name="name" id="title" aria-describedby="helpId" placeholder="" value="{{Auth::User()->thirdDataUser->first_name}}" readonly="readonly">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                      <label for="">Especialidad/ informacion</label>
                      <textarea class="form-control" name="" id="" rows="3"></textarea>
                    </div>

                    b4-input

                    <div class="form-group">
                      <label for="start">fecha / hora inicial </label>
                      <input type="text"
                        class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                      <label for="end">Fecha/hora final</label>
                      <input type="text" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn_save">Guardar</button>
                <button type="button" class="btn btn-warning" id="btn_modify">Modificar</button>
                  <button type="button" class="btn btn-danger" id="btn_delete">Eliminar</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
          </div>
      </div>
  </div>

@endsection



@section('scripts')
<script src="{{ asset('js/calendario.js') }}"></script>

@endsection
