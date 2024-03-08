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
                    <a href="{{ route('paciente.view') }}" class="btn btn-sm btn-success">
                        <i class="fas fa-chevron-left"> Regresar</i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('create.new.paciente') }}" method="POST">
                @csrf
                <div class="form-group">
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
                <div class="form-row">
                    <div class="form-group col-md-6">
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
                    <div class="form-group col-md-6">
                        <label for="identification_number">Número de Identificación</label>

                        <input type="text" name="identification_number" class="form-control"
                            placeholder="Ingrese su número de identificación"  value="{{ old('identification_number') }}">
                            @error('identification_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                </div>
                {{-- ----------------------------------------- --}}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="first_name">Primer Nombre</label>

                        <input type="text" id="first_name" name="first_name" class="form-control"
                            placeholder="Ingrese su primer nombre" value="{{ old('first_name' ) }}">
                        @error('first_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    {{-- segundo nombre --}}
                    <div class="form-group col-md-6">
                        <label for="second_name">Segundo Nombre</label>

                        <input type="text" id="second_name" name="second_name" class="form-control"
                            placeholder="Ingrese su segundo nombre" value="{{ old('second_name') }}">
                            @error('second_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                </div>


                {{-- -------------------------------------------- --}}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="sur_name">Primer Apellido</label>

                        <input type="text" id="sur_name" name="sur_name" class="form-control"
                            placeholder="Ingrese su primer apellido" value="{{ old('sur_name') }}">
                            @error('sur_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    {{-- segundo apellido --}}
                    <div class="form-group col-md-6">
                        <label for="second_sur_name">Segundo Apellido</label>

                        <input type="text" id="second_sur_name" name="second_sur_name" class="form-control"
                            placeholder="Ingrese su segundo apellido" value="{{ old('second_sur_name') }}">
                            @error('second_sur_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                </div>


                {{-- ----------------------------------------- --}}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="number_phone">Número de Teléfono</label>

                        <input type="tel" id="number_phone" name="number_phone" class="form-control"
                            placeholder="Ingrese su número de teléfono" value="{{ old('number_phone') }}">
                            @error('number_phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
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
                    <div class="form-group col-md-6">
                        <label for="birth_date">Fecha de Nacimiento</label>

                        <input type="date" id="birth_date" name="birth_date" class="form-control"
                            value="{{ old('birth_date') }}">
                            @error('birth_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    <div class="form-group col-md-6">
                        <label for="gender_type_id">Género</label>

                        <select id="gender_type_id" name="gender_type_id" class="form-control">
                            @forelse ($genderType as $gender_id => $name)
                                <option value="{{ $gender_id }}">
                                    {{ $name }}
                                </option>
                            @empty
                                <option value="#">No data found</option>
                            @endforelse
                        </select>
                        @error('gender_type_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                </div>

                {{-- Géneros --}}

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Correo Electronico</label>

                        <input type="text" id="email" name="email" class="form-control"
                            placeholder="Ingrese un correo electrónico" value="{{ old('email') }}">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

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

                <button type="submit" class="btn btn-sm btn-primary">Crear paciente</button>

        </div>






        </form>
    </div>
    </div>
@endsection
