@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Entidades Médicas</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('create.view') }}" class="btn btn-sm btn-primary">Agregar nueva entidad
                    médica</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush" style="text-transform: uppercase">
            <thead class="thead-light">
                <tr>
                    {{-- <th scope="col">ID</th> --}}
                    <th scope="col">Nit</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Estado</th>

                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($medicalEntities as $medicalEntity)
                <tr>
                    <td>
                        {{ $medicalEntity->nit }}
                    </td>
                    <td>
                        {{ $medicalEntity->tipo }}
                    </td>
                    <td>
                        {{ $medicalEntity->nombre }}
                    </td>
                    <td>
                        {{ $medicalEntity->email }}
                    </td>
                    <td>
                        {{ $medicalEntity->direccion }}
                    </td>
                    <td>
                        {{ $medicalEntity->telefono }}
                    </td>
                    <td>
                        {{ $medicalEntity->estado }}
                    </td>
                    <td>
                        {{-- {{ route('delete.paciente', ['paciente'=>$medicalEntity->id]) }} --}}
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            {{-- {{ route('edit.paciente.view', ['paciente' => $medicalEntity->id]) }} --}}
                            <a href="" class="btn btn-sm btn-primary">
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
    <div class="card-body">
        {{$medicalEntities->links()}}
    </div>
</div>
@endsection