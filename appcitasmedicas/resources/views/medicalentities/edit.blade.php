{{--
<?php
use Illuminate\Support\Str;
?> --}}
@extends('layouts.panel')
@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Actualizar entidad médica</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ route('medical-entities.index') }}" class="btn btn-sm btn-success">
                        <i class="fas fa-chevron-left"> Regresar</i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('medical-entities.update', ['medical_entity' => $medical_entity->medical_entity_id]) }}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="id_entity_type">Tipo de entidad médica</label>
                        @error('id_entity_type')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <select class="custom-select" name="id_entity_type">
                        @foreach ($entityTypes as $entityType)
                            <option value="{{ $entityType->entity_type_id }}"
                                {{ $medical_entity->id_entity_type == $entityType->entity_type_id ? 'selected' : '' }}>
                                {{ $entityType->commonAttribute->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="business_name">Razón Social</label>
                    @error('business_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="text" name="business_name"
                        value="{{ old('business_name', $medical_entity->business_name) }}">
                </div>
                <div class="form-group">
                    <label for="nit">NIT</label>
                    @error('nit')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="text" name="nit" value="{{ $medical_entity->nit }}"
                        maxlength="9">
                </div>
                <div class="form-group">
                    <label for="number_phone">Número de contacto</label>
                    @error('number_phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="number" name="number_phone"
                        value="{{ $medical_entity->number_phone }}">
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="text" name="email" value="{{ $medical_entity->email }}">
                </div>
                <div class="form-group">
                    <label for="address">Dirección</label>
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="text" name="address" value="{{ $medical_entity->address }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="id_status">Estado</label>
                    </div>
                    <select class="custom-select" name="id_status">
                        @foreach ($statuses as $status)
                            <option value="{{ $status->status_id }}"
                                {{ $medical_entity->id_status == $status->status_id ? 'selected' : '' }}>
                                {{ $status->commonAttribute->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Actualizar entidad médica</button>
            </form>
        </div>
    </div>
@endsection
