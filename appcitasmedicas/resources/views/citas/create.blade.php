<?php
use Illuminate\Support\Str;
?>
@extends('layouts.panel')
@section('content')
    <div class="card shadow">

    </div>
    <form action="{{ route('crear.cita') }}" method="POST">
    @csrf
    {{-- <div class="form-group">
          <label for="appointment_id">Numero cita</label>
          <input type="text" class="form-control" name="appointment_id" id="id"
              aria-describedby="helpId" placeholder="" value="{{$n_cita}}" readonly="readonly">
          <small id="helpId" class="form-text text-muted"> </small>
      </div> --}}
    <div class="form-group" hidden>
        <label for="id_patient">ID</label>
        <input type="text" class="form-control" name="id_patient" id="id" aria-describedby="helpId" placeholder=""
            value="{{ Auth::User()->thirdDataUser->data_id }}" readonly="readonly">
    </div>
    {{-- <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" class="form-control" name="name" id="title"
              aria-describedby="helpId" placeholder=""
              value="{{ Auth::User()->thirdDataUser->first_name }}" readonly="readonly">
      </div> --}}
    <div class="form-group">
        <label for="id_specialty">Especialidad</label>
                @error('id_specialty')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
        <select name="id_specialty" class="form-control" required id="specialtySelect">
            <option value="">Seleccione una especialidad</option>
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
        <select name="id_doctor" class="form-control" required id="doctorSelect">
            @forelse ($medicos as $medico)
                <option value="{{ $medico->thirdDataUser->data_id }}">
                    {{ $medico->thirdDataUser->first_name }} {{ $medico->thirdDataUser->second_name }} / {{ $medico->thirdDataUser->specialty->name }}
                </option>
            @empty
                <option value="">No data found</option>
            @endforelse
        </select>
    </div> 
    <div class="form-group">
        <label for="appointment_date">fecha / hora inicial </label>
                @error('appointment_date')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
        <input type="datetime-local" class="form-control" name="appointment_date" id="appointment_date"
            aria-describedby="helpId" placeholder="">
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    {{-- <button type="button" class="btn btn-warning" id="btn_modify">Modificar</button> --}}
    {{-- <button type="button" class="btn btn-danger" id="btn_delete">Eliminar</button> --}}
    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> --}}
    <div class="modal-footer">
    </div>
    </form>
@endsection