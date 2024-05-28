<?php
use Illuminate\Support\Str;
?>
@extends('layouts.panel')
@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Nuevo paciente</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ route('patients.index') }}" class="btn btn-sm btn-success">
                        <i class="fas fa-chevron-left">Regresar</i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('patients.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    {{-- entidad medica --}}
                    <label for="id_medical_entity">Entidad Médica</label>
                    <select name="id_medical_entity" class="form-control" required>
                        @forelse ($medicalEntities as $medicalEntity)
                            <option value="{{ $medicalEntity->medical_entity_id }}">
                                {{ $medicalEntity->business_name }}
                            </option>
                        @empty
                            <option value="">No hay entidades médicas disponibles</option>
                        @endforelse
                    </select>
                </div>

                <div class="form-row">
                    {{-- tipo de documento --}}
                    <div class="form-group col-md-6">
                        <label for="id_document_type">Tipo de Documento</label>
                        <select name="id_document_type" class="form-control" required>
                            @forelse ($documentTypes as $documentType)
                                <option value="{{ $documentType->document_type_id }}">
                                    {{ $documentType->commonAttribute->name }}
                                </option>
                            @empty
                                <option value="">No data found</option>
                            @endforelse
                        </select>
                    </div>

                    {{-- numero de identificacion --}}
                    <div class="form-group col-md-6">
                        <label for="identification_number">Número de Identificación</label>
                        <input type="text" name="identification_number" class="form-control"
                            placeholder="Ingrese su número de identificación" value="{{ old('identification_number') }}">
                        @error('identification_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    {{-- nombre --}}
                    <div class="form-group col-md-6">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" name="name" class="form-control"
                            placeholder="Ingrese su primer nombre" value="{{ old('name') }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- apellido --}}
                    <div class="form-group col-md-6">
                        <label for="last_name">Apellido</label>
                        <input type="text" id="last_name" name="last_name" class="form-control"
                            placeholder="Ingrese su segundo nombre" value="{{ old('last_name') }}">
                        @error('last_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    {{-- numero de telefono --}}
                    <div class="form-group col-md-6">
                        <label for="number_phone">Teléfono</label>
                        <input type="tel" id="number_phone" name="number_phone" class="form-control"
                            placeholder="Ingrese su número de teléfono" value="{{ old('number_phone') }}">
                        @error('number_phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Direccion --}}
                    <div class="form-group col-md-6">
                        <label for="address">Dirección</label>
                        <input type="text" id="address" name="address" class="form-control"
                            placeholder="Ingrese su dirección" value="{{ old('address') }}">
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    {{-- fecha de nacimiento --}}
                    <div class="form-group col-md-6">
                        <label for="birth_date">Fecha de Nacimiento</label>
                        <input type="date" id="birth_date" name="birth_date" class="form-control"
                            value="{{ old('birth_date') }}">
                        @error('birth_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Género --}}
                    <div class="form-group col-md-6">
                        <label for="id_gender">Género</label>
                        <select id="id_gender" name="id_gender" class="form-control">
                            @forelse ($genderTypes as $genderType)
                                <option value="{{ $genderType->gender_id }}">
                                    {{ $genderType->commonAttribute->name }}
                                </option>
                            @empty
                                <option value="#">No data found</option>
                            @endforelse
                        </select>
                        @error('id_gender')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    {{-- email --}}
                    <div class="form-group col-md-6">
                        <label for="email">Correo Electronico</label>
                        <input type="text" id="email" name="email" class="form-control"
                            placeholder="Ingrese un correo electrónico" value="{{ old('email') }}">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- contraseña --}}
                    @if (!isset($user))
                        <div class="form-group col-md-6">
                            <label for="password">Contraseña</label>
                            <input type="text" id="password" name="password" class="form-control"
                                placeholder="Ingrese su una contraseña" value="{{ old('password') }}">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Crear paciente</button>
        </div>
        </form>
    </div>
    </div>
@endsection
