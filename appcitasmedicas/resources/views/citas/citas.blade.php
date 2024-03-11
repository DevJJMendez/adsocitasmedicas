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
                            <label for="id">Numero cita</label>
                            <input type="text" class="form-control" name="id" id="id"
                                aria-describedby="helpId" placeholder="" value="{{$n_cita}}" readonly="readonly">
                            <small id="helpId" class="form-text text-muted"> </small>
                        </div>

                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" name="id" id="id"
                                aria-describedby="helpId" placeholder="" value="{{ Auth::User()->thirdDataUser->data_id }}"
                                readonly="readonly">
                        </div>

                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="name" id="title"
                                aria-describedby="helpId" placeholder=""
                                value="{{ Auth::User()->thirdDataUser->first_name }}" readonly="readonly">
                        </div>
                            <div class="form-group">
                                <label for="id_specialty">Especialidad</label>
                                <select name="id_specialty" class="form-control" required>
                                    @forelse ($specialty as $specialtys)
                                        <option value="{{ $specialtys->specialty_id }}">
                                            {{ $specialtys->name }}
                                        </option>
                                    @empty
                                        <option value="">No data found</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="id_doctor">Doctor</label>
                                <select name="id_doctor" class="form-control" required>
                                    @forelse ($medicos as $medico)
                                        <option value="{{ $medico->thirdDataUser->first_name}}">
                                            {{ $medico->thirdDataUser->first_name}}
                                        </option>
                                    @empty
                                        <option value="">No data found</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="start">fecha / hora inicial </label>
                                <input type="datetime-local" class="form-control" name="start" id="start"
                                    aria-describedby="helpId" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="end">Observaciones</label>
                                <textarea name="observaciones" id="" cols="30" rows="10" placeholder="Escriba aqui las observaciones"></textarea>
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
