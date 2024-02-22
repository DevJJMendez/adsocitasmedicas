@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Entidades Médicas</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('create.new.medical.entity') }}" class="btn btn-sm btn-primary">Agregar nueva entidad
                    médica</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush" style="text-transform: uppercase">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Correo</th>
                    <th scope="col">Opciones</th>

                </tr>
            </thead>
            <tbody>
                {{-- @forelse ($pacientes as $paciente)
                <tr>
                    <td>
                        {{ $paciente->email }}
                    </td>
                    <td>

                        <form action="{{ route('delete.paciente', ['paciente'=>$paciente->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('edit.paciente.view', ['paciente' => $paciente->id]) }}"
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
                @endforelse --}}
            </tbody>
        </table>
    </div>
    <div class="card-body">
        {{-- {{$pacientes->links()}} --}}
    </div>
</div>
@endsection