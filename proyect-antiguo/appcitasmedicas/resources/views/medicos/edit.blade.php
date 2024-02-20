{{-- <?php 
use Illuminate\Support\Str;
?> --}}
@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Editar médico</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('medico.view') }}" class="btn btn-sm btn-success">
                    <i class="fas fa-chevron-left"> Regresar</i>
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="cedula">Cedula</label>
                @error('cedula')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input class="form-control" type="text" name="cedula" value="">
            </div>
            <div class="form-group">
                <label for="name">Nombre del médico</label>
                @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input class="form-control" type="text" name="name" value="">
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input class="form-control" type="text" name="email" value="">
            </div>
            <div class="form-group">
                <label for="address">Dirección</label>
                @error('address')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input class="form-control" type="text" name="address" value="">
            </div>
            <div class="form-group">
                <label for="cedula">Teléfono / Móvil</label>
                @error('number_phone')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input class="form-control" type="text" name="number_phone" value="">
            </div>
            <div class="form-group">
                <label for="cedula">Contraseña</label>
                @error('password')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input class="form-control" type="text" name="password">
                <small class="text-warning">Solo llena el campo si quiere cambiar la contraseña</small>
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Guardar cambios</button>
        </form>
    </div>
</div>
@endsection
