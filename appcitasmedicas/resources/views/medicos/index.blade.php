@extends('layouts.panel')
@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Medicos</h3>
                </div>

                <div class="col text-right">
                    <a href="{{ route('medical-entities.create') }}" class="btn btn-sm btn-primary">Agregar nuevo médico</a>
                </div>

            </div>
        </div>
        <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush" style="text-transform: uppercase">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Nombres</th>
                        <th scope="col"></th>
                        <th scope="col">Correo</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Especialidad</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($medicos as $medico)
                        <tr>
                            <td colspan="2">
                                {{ $medico->thirdData->name }}
                                {{ $medico->thirdData->last_name }}
                            </td>
                            <td>
                                {{ $medico->email }}
                            </td>
                            <td>
                                {{ $medico->thirdData->number_phone }}
                            </td>
                            <td>
                                {{ $medico->thirdData->specialty ? $medico->thirdData->specialty->name : 'No Specialty' }}
                            </td>
                            <td>
                                {{ $medico->thirdData->status ? $medico->thirdData->status->commonAttribute->name : 'No Status' }}
                            </td>
                            <td>
                                <form action="{{ route('medicos.destroy', ['medico' => $medico->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('medicos.edit', ['medico' => $medico->id]) }}"
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
            {{-- {{ $medicos->links() }} --}}
        </div>
    </div>
@endsection
