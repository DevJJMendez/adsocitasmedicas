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
                        <th scope="col">Paciente</th>
                        <th scope="col">Fecha y Hora</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($doctorAppointments as $doctorAppointment)
                        <tr>
                            <td>
                                {{ $doctorAppointment->patient->thirdData->name }}
                                {{ $doctorAppointment->patient->thirdData->last_name }}
                            </td>
                            <td>
                                {{ $doctorAppointment->appointment_date }}
                            </td>
                            <td>
                                {{ $doctorAppointment->status->commonAttribute->name }}
                            </td>
                            <td>
                                <form
                                    action="{{ route('appointments.destroy', ['appointment' => $doctorAppointment->appointment_id]) }}"
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
                                    POR EL MOMENTO NO TIENES CITAS POR ATENDER
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
