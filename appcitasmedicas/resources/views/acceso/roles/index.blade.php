@extends('layouts.panel')
@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Lista de Roles</h3>
                </div>
                <div class="col text-right">
                    <a href="" data-toggle="modal" data-target="#modal-form" class="btn btn-sm btn-primary">Nuevo Rol</a>
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
                    @forelse ($roles as $rol)
                        <tr>
                            <td>
                                {{ $rol->id }}
                            </td>
                            <td>
                                {{ $rol->name }}
                            </td>
                            <td>

                                <form action="{{ route('delete.rol', ['rol' => $rol->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('edit.rol.view', ['rol' => $rol->id]) }}"
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
            {{-- MODAL DE CREAR ROL --}}
            <div class="col-md-1">

                <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form"
                    aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">

                            <div class="modal-body p-0">

                                <div class="card bg-secondary border-0 mb-0">
                                    <div class="card-header bg-transparent pb-10">
                                        <div class="text-muted text-center ">
                                            <h2>Nuevo Rol</h2>
                                        </div>
                                        <form role="form" action="{{ route('create.new.rol') }}" method="POST">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <div class="input-group input-group-merge input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-user-tie"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="Aqui su Rol.." type="text"
                                                        name="name_role">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary my-4">Crear Rol</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endsection


                    </div>
                </div>
            </div>


        </div>
