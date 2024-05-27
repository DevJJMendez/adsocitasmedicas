@extends('layouts.panel')
@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Entidades Médicas</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ route('medical-entities.create') }}" class="btn btn-sm btn-primary">Agregar nueva entidad
                        médica</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush" style="text-transform: uppercase">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Nit</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Estado</th>

                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($medicalEntities as $medicalEntity)
                            <td>
                                {{ $medicalEntity->nit }}
                            </td>
                            <td>
                                {{ $medicalEntity->business_name }}
                            </td>
                            <td>
                                {{ $medicalEntity->email }}
                            </td>
                            <td>
                                {{ $medicalEntity->number_phone }}
                            </td>
                            <td>
                                {{ $medicalEntity->address }}
                            </td>
                            <td>
                                @if ($medicalEntity->id_entity_type == 1)
                                    {{ $medicalEntity->entityType->commonAttribute->name }}
                                @else
                                    {{ $medicalEntity->entityType->commonAttribute->name }}
                                @endif
                            </td>
                            <td>
                                @if ($medicalEntity->id_status == 1)
                                    <span class="fw-bolder rounded bg-success text-white p-2">
                                        {{ $medicalEntity->status->commonAttribute->name }}
                                    </span>
                                @else
                                    <span class="fw-bolder rounded bg-danger text-white p-2">
                                        {{ $medicalEntity->status->commonAttribute->name }}
                                    </span>
                                @endif
                            </td>
                            <td>
                                <form
                                    action="{{ route('medical-entities.destroy', ['medical_entity' => $medicalEntity->medical_entity_id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('medical-entities.edit', ['medical_entity' => $medicalEntity->medical_entity_id]) }}"
                                        class="btn btn-sm btn-primary">
                                        Editar
                                    </a>
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-body">
            {{ $medicalEntities->links() }}
        </div>
    </div>
@endsection
