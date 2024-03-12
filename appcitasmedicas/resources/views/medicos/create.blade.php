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
                    <a href="{{ route('medico.view') }}" class="btn btn-sm btn-success">
                        <i class="fas fa-chevron-left"> Regresar</i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('create.new.medico') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group  col-md-6">
                        <label for="document_type_id">Tipo de Documento</label>
                        <select name="document_type_id" class="form-control" required>
                            @forelse ($documentType as $detail_id => $name)
                                <option value="{{ $detail_id }}">
                                    {{ $name }}
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
                            placeholder="Ingrese su número de identificación" value="{{ old('identification_number') }}">
                    </div>
                </div>

                <div class="form-row">
                    {{-- NOMBRE --}}
                    <div class="form-group col-md-6">
                        <label for="first_name">Nombre del medico</label>
                        @error('first_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" id="first_name" name="first_name" class="form-control"
                            placeholder="Ingrese su primer nombre" value="{{ old('first_name') }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sur_name">Apellidos</label>
                        @error('sur_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" id="sur_name" name="sur_name" class="form-control"
                            placeholder="Ingrese su primer apellido" value="{{ old('sur_name') }}">
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
                            placeholder="Ingrese un correo electrónico" value="{{ old('email') }}">
                    </div>


                    <div class="form-group col-md-6">
                        <label for="id_medical_entity">Entidad Médica</label>
                        <select name="id_medical_entity" class="form-control" required>
                            @forelse ($medicalEntity as $medicalEntities)
                                <option value="{{ $medicalEntities->medical_entity_id }}">
                                    {{ $medicalEntities->business_name }}
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
                        <label for="gender_type_id">Género</label>
                        @error('gender_type_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <select id="gender_type_id" name="gender_type_id" class="form-control">
                            @forelse ($genderType as $detaild_id => $name)
                                <option value="{{ $detail_id }}">{{ $name }}</option>
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
                            placeholder="Ingrese su dirección" value="{{ old('address') }}">
                    </div>
                </div>

                <div class="form-row">

                    {{-- FECHA DE NACIMIENTO --}}
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
                            placeholder="Ingrese su número de teléfono" value="{{ old('number_phone') }}">
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
                            placeholder="Ingrese su una contraseña" value="{{ old('password') }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="id_specialty">Especialidad</label>
                        @error('id_specialty')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <select id="id_specialty" name="id_specialty" class="form-control">
                            @forelse ($specialties as $specialtie)
                                <option value="{{ $specialtie-> id_specialty }}">{{$specialtie-> name }}</option>
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
