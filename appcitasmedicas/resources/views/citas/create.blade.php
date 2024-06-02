<?php
use Illuminate\Support\Str;
?>
@extends('layouts.panel')
@section('content')
    <div class="card shadow">

    </div>
    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf
        <div class="form-group" hidden>
            <label for="id_patient">ID</label>
            <input type="text" class="form-control" name="id_patient" id="id" aria-describedby="helpId" placeholder=""
                value="{{ Auth::User()->thirdData->third_data_id }}" readonly="readonly">
        </div>
        <div class="form-group">
            <label for="specialtySelect">Especialidad</label>
            @error('id_specialty')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <select name="id_specialty" class="form-control" required id="specialtySelect">
                <option value="">Seleccione una especialidad</option>
                @forelse ($specialties as $specialty)
                    <option value="{{ $specialty->specialty_id }}">
                        {{ $specialty->specialty_id }}
                        {{ $specialty->name }}
                    </option>
                @empty
                    <option value="">No data found</option>
                @endforelse
            </select>
        </div>
        <div class="form-group">
            <label for="doctorSelect">Doctor disponibles</label>
            <select name="id_doctor" class="form-control" required id="doctorSelect">
                <option value="">
                    Seleccione un doctor
                </option>
            </select>
        </div>
        <div class="form-group">
            <label for="appointment_date">fecha / hora inicial </label>
            @error('appointment_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="datetime-local" class="form-control" name="appointment_date" id="appointment_date"
                aria-describedby="helpId" placeholder="">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        {{-- <button type="button" class="btn btn-warning" id="btn_modify">Modificar</button>
        <button type="button" class="btn btn-danger" id="btn_delete">Eliminar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> --}}
        <div class="modal-footer">
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#specialtySelect').change(function() {
                var specialtyId = $(this).val();
                if (specialtyId) {
                    $.ajax({
                        url: '/get-doctors-by-specialty/' + specialtyId,
                        type: 'GET',
                        success: function(data) {
                            $('#doctorSelect').empty().append(
                                '<option value="">Elige un doctor</option>');
                            $.each(data, function(key, value) {
                                $('#doctorSelect').append('<option value="' + value
                                    .third_data_id + '">' + value.name + ' ' + value
                                    .last_name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#doctorSelect').empty().append('<option value="">Elige un doctor</option>');
                }
            });
        });
    </script>
@endsection
