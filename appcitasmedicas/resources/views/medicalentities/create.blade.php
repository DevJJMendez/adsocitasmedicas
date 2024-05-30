<?php
use Illuminate\Support\Str;
?>
@extends('layouts.panel')
@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Nuevo entidad médica</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ route('medical-entities.index') }}" class="btn btn-sm btn-success">
                        <i class="fas fa-chevron-left"> Regresar</i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('medical-entities.store') }}" method="POST">
                @csrf

                {{-- Tipo de entidad medica --}}
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="id_entity_type">Tipo de entidad médica</label>
                    </div>
                    <select class="custom-select" name="id_entity_type">
                        @foreach ($entityType as $entityTypes)
                            <option value="{{ $entityTypes->entity_type_id }}"
                                {{ old('id_entity_type') == $entityTypes->entity_type_id ? 'selected' : '' }}>
                                {{ $entityTypes->commonAttribute->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Nombre de la entidad --}}
                <div class="form-group">
                    <label for="business_name">Razón Social</label>
                    @error('business_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="text" name="business_name" value="{{ old('business_name') }}">
                </div>

                {{-- Nit de la entidad --}}
                <div class="form-group">
                    <label for="nit">NIT</label>
                    @error('nit')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="number" name="nit" value="{{ old('nit') }}" maxlength="9">
                </div>

                {{-- Numero de contacto --}}
                <div class="form-group">
                    <label for="number_phone">Número de contacto</label>
                    @error('number_phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="number" name="number_phone" value="{{ old('number_phone') }}"
                        maxlength="9">
                </div>

                {{-- Correo electronico --}}
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="text" name="email" value="{{ old('email') }}">
                </div>

                {{-- Direccion de la entidad medica --}}
                <div class="form-group">
                    <label for="address">Dirección</label>
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="text" name="address" value="{{ old('address') }}">
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Crear entidad médica</button>

            </form>
        </div>
    </div>
    </div>
@endsection
