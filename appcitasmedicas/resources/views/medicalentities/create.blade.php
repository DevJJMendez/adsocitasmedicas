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
                    <a href="{{ route('medical.entities.view') }}" class="btn btn-sm btn-success">
                        <i class="fas fa-chevron-left"> Regresar</i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('create.new.medical.entity') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="entity_type_id">Tipo de entidad médica</label>
                    </div>
                    <select class="custom-select" name="entity_type_id">
                        @foreach ($em as $detail_id => $name)
                            <option value="{{ $detail_id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- --}}

                <div class="form-group">
                    <label for="business_name">Razón Social</label>
                    @error('business_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="text" name="business_name" value="{{ old('business_name') }}">
                </div>
                <div class="form-group">
                    <label for="nit">NIT</label>
                    @error('nit')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="number" name="nit" value="{{ old('nit') }}">
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
                        <label class="input-group-text" for="statu_type_id">Estado</label>
                    </div>

                    <select class="custom-select" name="statu_type_id">
                        @foreach ($es as $detail_id => $nombre)
                            <option value="{{ $detail_id }}">{{ $nombre }}
                            </option>
                        @endforeach
                        {{-- @forelse ($es as $statu)
                            <option value="{{ $status->detail_id }}">{{ $estatus->name }}
                            </option>
                        @empty
                            <option value="#">No data found</option>
                        @endforelse --}}
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Crear entidad médica</button>
            </form>
        </div>
    </div>
@endsection
