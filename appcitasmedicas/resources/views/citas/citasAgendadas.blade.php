@extends('layouts.panel')
@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Citas Agendadas</h3>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush" style="text-transform: uppercase">
                <thead class="thead-light">
                    <tr>
                      <th scope="col">Medico</th>
                      <th scope="col">Especialidad</th>
                        <th scope="col">Fecha y Hora</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($citas as $cita)
                        <tr>
                            <td>
                                {{$cita->doctor->tercero->first_name}} {{$cita->doctor->tercero->second_name}} 
                            </td>
                            <td>
                                {{ $cita->specialty->name }}
                            </td>
                            <td>
                                {{ $cita->appointment_date }}
                            </td>
                            <td>
                                {{ $cita->statuType->name }}
                            </td>
                            <td>
                                <form action="{{ route('cancelar.cita',$cita->appointment_id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-sm btn-danger">Cancelar cita</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th>
                                <span>
                                    USTED NO TIENE CITAS MEDICAS AGENDADAS - <a href="{{ route('crear.cita') }}">¿DESEA AGENDAR UNA CITA?</a>
                                </span>
                            </th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{-- {{$medicos->links()}} --}}
        </div>
    </div>
@endsection
