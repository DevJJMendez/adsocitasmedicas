<?php
use Illuminate\Support\Str;
?>
@extends('layouts.panel')
@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Nuevo médico</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ route('medicos.index') }}" class="btn btn-sm btn-success">
                        <i class="fas fa-chevron-left">Regresar</i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('medicos.store') }}" method="POST">
                @csrf

                <div class="form-row">
                    {{-- tipo de documento --}}
                    <div class="form-group  col-md-6">
                        <label for="id_document_type">Tipo de Documento</label>
                        <select name="id_document_type" class="form-control">
                            @forelse ($documentTypes as $documentType)
                                <option value="{{ $documentType->document_type_id }}"
                                    {{ old('id_document_type') == $documentType->document_type_id ? 'selected' : '' }}>
                                    {{ $documentType->commonAttribute->name }}
                                </option>
                            @empty
                                <option value="">No data found</option>
                            @endforelse
                        </select>
                    </div>

                    {{-- numero de identificación --}}
                    <div class="form-group  col-md-6 ">
                        <label for="identification_number">Número de Identificación</label>
                        @error('identification_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" name="identification_number" class="form-control" placeholder="10022727"
                            value="{{ old('identification_number') }}">
                    </div>
                </div>

                <div class="form-row">
                    {{-- nombre --}}
                    <div class="form-group col-md-6">
                        <label for="name">Nombre</label>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" id="name" name="name" class="form-control"
                            placeholder="Nombre del médico" value="{{ old('name') }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="last_name">Apellido</label>
                        @error('last_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" id="last_name" name="last_name" class="form-control"
                            placeholder="Apellido del médico" value="{{ old('last_name') }}">
                    </div>

                </div>

                <div class="form-row">

                    {{-- email --}}
                    <div class="form-group col-md-6">
                        <label for="email">Correo Electronico</label>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" id="email" name="email" class="form-control"
                            placeholder="Correo electrónico" value="{{ old('email') }}">
                    </div>


                    <div class="form-group col-md-6">
                        {{-- password --}}
                        <label for="password">Contraseña</label>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" id="password" name="password" class="form-control" placeholder="Contraseña"
                            value="{{ old('password') }}">
                    </div>

                </div>

                <div class="form-row">
                    {{-- genero --}}
                    <div class="form-group col-md-6">
                        <label for="id_gender">Género</label>
                        @error('id_gender')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <select id="id_gender" name="id_gender" class="form-control">
                            @forelse ($genderTypes as $genderType)
                                <option value="{{ $genderType->gender_id }}"
                                    {{ old('id_gender') == $genderType->gender_id ? 'selected' : '' }}>
                                    {{ $genderType->commonAttribute->name }}
                                </option>
                            @empty
                                <option value="#">No data found</option>
                            @endforelse
                        </select>
                    </div>


                    {{-- direccion --}}
                    <div class="form-group col-md-6">
                        <label for="address">Dirección</label>
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" id="address" name="address" class="form-control" placeholder="Dirección"
                            value="{{ old('address') }}">
                    </div>
                </div>

                <div class="form-row">
                    {{-- fecha de nacimiento --}}
                    <div class="form-group col-md-6">
                        <label for="birth_date">Fecha de Nacimiento</label>
                        @error('birth_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="date" id="birth_date" name="birth_date" class="form-control"
                            value="{{ old('birth_date') }}">
                    </div>

                    {{-- TELEFONO --}}
                    <div class="form-group col-md-6">
                        <label for="number_phone">Número de Teléfono</label>
                        @error('number_phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="tel" id="number_phone" name="number_phone" class="form-control"
                            placeholder="Número de teléfono" value="{{ old('number_phone') }}">
                    </div>
                </div>

                <div class="form-row">
                    {{-- Especialidad --}}
                    <div class="form-group col-md-6">
                        <label for="id_specialty">Especialidad</label>
                        @error('id_specialty')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <select id="id_specialty" name="id_specialty" class="form-control">
                            @forelse ($specialties as $specialty)
                                <option value="{{ $specialty->specialty_id }}"
                                    {{ old('id_specialty') == $specialty->specialty_id ? 'selected' : '' }}>
                                    {{ $specialty->name }}
                                </option>
                            @empty
                                <option value="#">No data found</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Crear Médico</button>
            </form>
        </div>
    </div>
@endsection
