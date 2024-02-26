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
                    <a href="{{ route('paciente.view') }}" class="btn btn-sm btn-success">
                        <i class="fas fa-chevron-left"> Regresar</i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="#" method="POST">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="entity_type_id">Tipo de entidad médica</label>
                    </div>

                    <select class="custom-select" name="entity_type_id">
                        @foreach ($em as $detail_id => $name)
                            <option value="{{ $detail_id }}"@if ($detail_id == $entity->entity_type_id) selected @endif>
                                {{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="business_name">Razón Social</label>
                    <input class="form-control" type="text" name="business_name" value="{{ $entity->business_name }}">
                </div>
                <div class="form-group">
                    <label for="nit">NIT</label>

                    <input class="form-control" type="text" name="nit" value="{{ old('nit') }}">
                </div>
                <div class="form-group">
                    <label for="number_phone">Número de contacto</label>
                    @error('number_phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="text" name="number_phone" value="{{ old('number_phone') }}">
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="text" name="email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="address">Dirección</label>
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="text" name="address" value="{{ old('address') }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="entity_type_id">Tipo de entidad médica</label>
                    </div>

                    <select class="custom-select" name="entity_type_id">
                        @foreach ($es as $detail_id => $name)
                            <option value="{{ $detail_id }}"@if ($detail_id == $entity->statu_type_id) selected @endif>
                                {{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Crear entidad médica</button>
            </form>
        </div>
    </div>
@endsection
