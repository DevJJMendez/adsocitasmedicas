@extends('layouts.panel')
@section('content')
    {{-- @dd($patients) --}}
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Pacientes</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ route('patients.create') }}" class="btn btn-sm btn-primary">Agregar nuevo paciente</a>
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
                        <th>telefono</th>
                        <th>Email</th>
                        <th>Genero</th>
                        <th>Entidad Médica</th>
                        <th>Tipo Entidad Médica</th>
                        <th>Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($patients as $patient)
                        <tr>
                            <td colspan="2">
                                {{ $patient->thirdData->name }}
                                {{ $patient->thirdData->last_name }}
                            </td>
                            <td>
                                {{ $patient->thirdData->number_phone }}
                            </td>
                            <td>
                                {{ $patient->email }}
                            </td>
                            <td>
                                {{ $patient->thirdData->gender->commonAttribute->name }}
                            </td>
                            <td>
                                {{ $patient->thirdData->medicalEntity ? $patient->thirdData->medicalEntity->business_name : 'null' }}
                            </td>
                            <td>
                                {{ $patient->thirdData->medicalEntity ? $patient->thirdData->medicalEntity->EntityType->commonAttribute->name : 'null' }}
                            </td>
                            <td>
                                @if ($patient->thirdData->id_status == 1)
                                    <span class="fw-bolder rounded bg-success text-white p-2">
                                        {{ $patient->thirdData->status->commonAttribute->name }}
                                    </span>
                                @else
                                    <span class="fw-bolder rounded bg-danger text-white p-2">
                                        {{ $patient->thirdData->status->commonAttribute->name }}
                                    </span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('patients.destroy', ['patient' => $patient->third_data_id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('patients.edit', ['patient' => $patient->third_data_id]) }}"
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
            {{ $patients->links() }}
        </div>
    </div>
@endsection
