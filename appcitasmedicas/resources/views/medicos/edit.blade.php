<?php
use Illuminate\Support\Str;
?>
@extends('layouts.panel')
@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Actualizar médico</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ route('medicos.index') }}" class="btn btn-sm btn-success">
                        <i class="fas fa-chevron-left"> Regresar</i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('medicos.update', ['medico' => $medico->third_data_id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group  col-md-6">
                        <label for="id_document_type">Tipo de Documento</label>
                        <select name="id_document_type" class="form-control" required>
                            @forelse ($documentTypes as $documentType)
                                <option value="{{ $documentType->document_type_id }}"
                                    {{ $medico->id_document_type == $documentType->document_type_id ? 'selected' : '' }}>
                                    {{ $documentType->commonAttribute->name }}
                                </option>
                            @empty
                                <option value="">No data found</option>
                            @endforelse
                        </select>
                    </div>

                    {{-- IDENTIFICACION --}}
                    <div class="form-group  col-md-6 ">
                        <label for="identification_number">Número de Identificación</label>
                        @error('identification_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" name="identification_number" class="form-control"
                            placeholder="Ingrese su número de identificación" value="{{ old('identification_number', $medico->identification_number) }}">
                    </div>
                </div>

                <div class="form-row">
                    {{-- NOMBRE --}}
                    <div class="form-group col-md-6">
                        <label for="name">Nombre del medico</label>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" id="name" name="name" class="form-control"
                            placeholder="Nombre del medico" value="{{ old('name', $medico->name) }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="last_name">Apellido</label>
                        @error('last_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" id="last_name" name="last_name" class="form-control"
                            placeholder="Ingrese su primer apellido" value="{{ old('last_name', $medico->last_name) }}">
                    </div>

                </div>

                <div class="form-row">

                    {{-- CORREO ELECTRONICO --}}
                    <div class="form-group col-md-6">
                        <label for="email">Correo Electronico</label>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" id="email" name="email" class="form-control"
                            placeholder="Ingrese un correo electrónico" value="{{ old('email', $medico->user->email) }}">
                    </div>


                    <div class="form-group col-md-6">
                        <label for="id_status">Estado</label>
                        <select name="id_status" class="form-control" required>
                            @forelse ($statuses as $status)
                                <option value="{{ $status->status_id }}"
                                    {{ $medico->id_status == $status->status_id ? 'selected' : '' }}>
                                    {{ $status->commonAttribute->name }}    
                                </option>
                            @empty
                                <option value="">No data found</option>
                            @endforelse
                        </select>
                    </div>

                </div>

                <div class="form-row">
                    {{-- GENERO --}}
                    <div class="form-group col-md-6">
                        <label for="id_gender">Género</label>
                        @error('id_gender')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <select id="id_gender" name="id_gender" class="form-control">
                            @forelse ($genders as $gender)
                                <option value="{{ $gender->gender_id }}"
                                    {{ $medico->gender_type_id == $gender->gender_id ? 'selected' : '' }}>
                                    {{ $gender->commonAttribute->name }}
                                </option>
                            @empty
                                <option value="#">No data found</option>
                            @endforelse
                        </select>
                    </div>


                    {{-- DIRECCION --}}
                    <div class="form-group col-md-6">
                        <label for="address">Dirección</label>
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" id="address" name="address" class="form-control"
                            placeholder="Ingrese su dirección" value="{{ old('address', $medico->address) }}">
                    </div>
                </div>

                <div class="form-row">

                    {{-- FECHA DE NACIMIENTO --}}
                    <div class="form-group col-md-6">
                        <label for="birth_date">Fecha de Nacimiento</label>
                        @error('birth_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="datetime" id="birth_date" name="birth_date" class="form-control"
                            value="{{ old('birth_date', $medico->birth_date) }}">
                    </div>

                    {{-- TELEFONO --}}
                    <div class="form-group col-md-6">
                        <label for="number_phone">Número de Teléfono</label>
                        @error('number_phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="tel" id="number_phone" name="number_phone" class="form-control"
                            placeholder="Ingrese su número de teléfono" value="{{ old('number_phone', $medico->number_phone) }}">
                    </div>
                </div>
                <div class="form-row">
                    {{-- CONTRASEÑA --}}
                    <div class="form-group col-md-6">
                        <label for="password">Contraseña</label>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" id="password" name="password" class="form-control"
                            placeholder="Nueva contraseña" value="{{ old('password') }}">
                    </div>
                    {{-- ESPECIALIDAD --}}
                    <div class="form-group col-md-6">
                        <label for="id_specialty">Especialidad</label>
                        @error('id_specialty')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <select id="id_specialty" name="id_specialty" class="form-control">
                            @forelse ($specialties as $specialty)
                                <option value="{{ $specialty->specialty_id }}"
                                    {{ $medico->id_specialty == $specialty->specialty_id ? 'selected' : '' }}>
                                    {{ $specialty->name }}
                                </option>
                            @empty
                                <option value="#">No data found</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Editar Médico</button>
            </form>
        </div>
    </div>
@endsection
