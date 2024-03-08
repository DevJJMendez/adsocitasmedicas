{{-- <?php
use Illuminate\Support\Str;
?> --}}
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
        <form action="{{ route('update.paciente',[$user->id]) }}" method="POST">
            @csrf
            @method('PUT')
            @include('pacientes.form')
            <button type="submit" class="btn btn-sm btn-primary">Editar paciente</button>
        </form>
    </div>
</div>
@endsection
