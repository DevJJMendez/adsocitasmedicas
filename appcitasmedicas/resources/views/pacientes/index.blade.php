@extends('layouts.panel')
@section('content')
    {{-- @dd($pacientes) --}}
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Pacientes</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ route('create.paciente') }}" class="btn btn-sm btn-primary">Agregar nuevo paciente</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush" style="text-transform: uppercase">
                <thead class="thead-light">
                    <tr>
                        <th>N. Identificación</th>
                        <th scope="col">Nombres</th>
                        <th scope="col"></th>
                        <th scope="col">Apellidos</th>
                        <th scope="col"></th>
                        <th>telefono</th>
                        <th>Email</th>
                        <th>Genero</th>
                        <th>Dirección</th>
                        <th>Entidad Médica</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr>
                            <td>
                                {{ $paciente->thirdDataUSer->identification_number }}
                            </td>
                            <td colspan="2">
                                {{ $paciente->thirdDataUSer->first_name }}
                                {{ $paciente->thirdDataUSer->second_name }}
                            </td>
                            <td colspan="2">
                                {{ $paciente->thirdDataUSer->sur_name }}
                                {{ $paciente->thirdDataUSer->second_sur_name }}
                            </td>
                            <td>
                                {{ $paciente->thirdDataUSer->number_phone }}
                            </td>
                            <td>
                                {{ $paciente->email }}
                            </td>
                            <td>
                                {{ $paciente->thirdDataUSer->gender->name }}
                            </td>
                            <td>
                                {{ $paciente->thirdDataUSer->address }}
                            </td>
                            <td>
                                {{ $paciente->thirdDataUSer->medicalEntity->business_name }}
                            </td>
                            <td>

                                <form action="{{ route('delete.paciente', ['paciente' => $paciente->id]) }}"
                                    method="POST">
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
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-body">
            {{-- {{ $pacientes->links() }} --}}
        </div>
    </div>
@endsection
