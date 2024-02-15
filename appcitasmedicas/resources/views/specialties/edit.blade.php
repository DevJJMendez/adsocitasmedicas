@extends('layouts.panel')

@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Editar Especialidad</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ route('specialtyView') }}" class="btn btn-sm btn-success">
                        <i class="fas fa-chevron-left"> Regresar</i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">

            <form action="{{ route('specialty.update', ['specialty'=>$specialty->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">

                    <label for="name">Nombre de la especialidad</label>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="text" name="name" value="{{ old('name', $specialty->name) }}">

                </div>

                <div class="form-group">

                    <label for="description">Descripcion</label>

                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input class="form-control" type="text" name="description"
                        value="{{ old('description', $specialty->description) }}">

                </div>

                <button type="submit" class="btn btn-sm btn-primary">Editar especialidad</button>
            </form>

        </div>
    </div>
@endsection
