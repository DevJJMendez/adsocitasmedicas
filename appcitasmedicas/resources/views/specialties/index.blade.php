@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Especialidades</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('createSpecialty') }}" class="btn btn-sm btn-primary">Agregar nueva especialidad</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush" style="text-transform: uppercase">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($specialties as $specialty)
                <tr>

                    <th scope="row">
                        {{ $specialty->specialty_id }}
                    </th>
                    <th scope="row">
                        {{ $specialty->name }}
                    </th>
                    <td>

                        {{-- <form action="{{ route('specialty.delete', ['specialty'=>$specialty->id]) }}" method="POST"> --}}
                            @csrf
                            @method('DELETE')
                            {{-- <a href="{{ route('specialty.edit', ['specialty'=>$specialty->id]) }}" --}}
                                class="btn btn-sm btn-primary">
                                Editar
                            </a>
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>

                    </td>
                </tr>
                @empty
                <tr>
                    <th>
                        <span>
                            No data found
                        </span>
                    </th>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection