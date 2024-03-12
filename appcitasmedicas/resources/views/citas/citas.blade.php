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
                    <form action="{{ route('crear.cita') }}" method="POST">
                        @csrf
                        {{-- <div class="form-group">
                            <label for="appointment_id">Numero cita</label>
                            <input type="text" class="form-control" name="appointment_id" id="id"
                                aria-describedby="helpId" placeholder="" value="{{$n_cita}}" readonly="readonly">
                            <small id="helpId" class="form-text text-muted"> </small>
                        </div> --}}

                        <div class="form-group">
                            <label for="id_patient">ID</label>
                            <input type="text" class="form-control" name="id_patient" id="id"
                                aria-describedby="helpId" placeholder="" value="{{ Auth::User()->thirdDataUser->data_id }}"
                                readonly="readonly">
                        </div>

                        {{-- <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="name" id="title"
                                aria-describedby="helpId" placeholder=""
                                value="{{ Auth::User()->thirdDataUser->first_name }}" readonly="readonly">
                        </div> --}}

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
                                    <option value="{{ $medico->thirdDataUser->data_id }}">
                                        {{ $medico->thirdDataUser->first_name }}
                                    </option>
                                @empty
                                    <option value="">No data found</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="appointment_date">fecha / hora inicial </label>
                            <input type="datetime-local" class="form-control" name="appointment_date" id="appointment_date"
                                aria-describedby="helpId" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" id="btn_modify">Modificar</button>
                            <button type="button" class="btn btn-danger" id="btn_delete">Eliminar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection



@section('scripts')
    <script src="{{ asset('js/calendario.js') }}"></script>
@endsection
