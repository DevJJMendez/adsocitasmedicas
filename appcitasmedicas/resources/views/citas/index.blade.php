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
                    @forelse ($userAppointments as $userAppointment)
                        <tr>
                            <td>
                                {{ $userAppointment->doctor->thirdData->name }}
                                {{ $userAppointment->doctor->thirdData->last_name }}
                            </td>
                            <td>
                                {{ $userAppointment->specialty->name }}
                            </td>
                            <td>
                                {{ $userAppointment->appointment_date }}
                            </td>
                            <td>
                                {{ $userAppointment->status->commonAttribute->name }}
                            </td>
                            <td>
                                <form
                                    action="{{ route('appointments.destroy', ['appointment' => $userAppointment->appointment_id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Cancelar cita</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th>
                                <span>
                                    USTED NO TIENE CITAS MEDICAS AGENDADAS - <a
                                        href="{{ route('appointments.create') }}">¿DESEA
                                        AGENDAR UNA CITA?</a>
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
