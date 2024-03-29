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
            <table class="table align-items-center table-flush" style="text-transform: uppercase">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Nit</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Estado</th>

                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                            @foreach ($medicalEntity as $medicalEntities)
                            <td>
                                {{ $medicalEntities->nit }}
                            </td>
                            <td>
                                {{ $medicalEntities->number_phone }}
                            </td>
                            <td>
                                {{ $medicalEntities->medicalentitytype ? $medicalEntities->medicalentitytype->name : 'N/A' }}
                            </td>
                            <td>
                                {{ $medicalEntities->email }}
                            </td>
                            <td>
                                {{ $medicalEntities->business_name }}
                            </td>
                            <td>
                                {{ $medicalEntities->address }}
                            </td>
                            <td>
                                {{ $medicalEntities->statutype ? $medicalEntities->statutype->name : 'N/A' }}
                            </td>
                            <td>

                                <form
                                    action="{{ route('delete', ['medicalEntity' => $medicalEntities->medical_entity_id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <a href="{{ route('edit.view', $medicalEntities->medical_entity_id) }}"
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
            {{ $medicalEntity->links() }}
        </div>
    </div>
@endsection
