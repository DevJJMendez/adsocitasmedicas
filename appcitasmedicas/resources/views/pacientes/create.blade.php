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
                <label for="cedula">Cedula</label>
                @error('cedula')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input class="form-control" type="text" name="cedula" value="{{old('cedula')}}">
            </div>
            <div class="form-group">
                <label for="name">Nombre del paciente</label>
                @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input class="form-control" type="text" name="name" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input class="form-control" type="text" name="email" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label for="address">Dirección</label>
                @error('address')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input class="form-control" type="text" name="address" value="{{old('address')}}">
            </div>
            <div class="form-group">
                <label for="number_phone">Teléfono / Móvil</label>
                @error('number_phone')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input class="form-control" type="text" name="number_phone" value="{{old('number_phone')}}">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                @error('password')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input class="form-control" type="text" name="password" value="{{old('password',Str::random(8))}}">
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Crear paciente</button>
        </form>
    </div>
</div>
@endsection
