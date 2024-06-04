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
                        <th scope="col">Fecha</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Opciones</th>
                        <th scope="col">Dictamen Médico</th>
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
                            <td>
                                <button type="button" class="btn btn-sm btn-warning view-dictamen"
                                    data-id="{{ $userAppointment->appointment_id }}">
                                    Ver dictamen
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="dictamenModal" tabindex="-1"
                                    aria-labelledby="dictamenModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="dictamenModalLabel">Dictamen</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Aquí se mostrará la información -->
                                                <p id="dictamenContent">Cargando...</p>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Modal --}}

                                {{-- AJAX --}}
                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                                <script>
                                    $(document).ready(function() {
                                        $('.view-dictamen').on('click', function() {
                                            var appointmentId = $(this).data('id');

                                            // Realizar la solicitud AJAX para obtener los datos del dictamen
                                            $.ajax({
                                                url: '/get-dictamen/' + appointmentId, // Ajusta la ruta según sea necesario
                                                type: 'GET',
                                                success: function(data) {
                                                    // Rellena el contenido del modal con los datos obtenidos
                                                    $('#dictamenContent').text(data.dictamen);

                                                    // Abre el modal
                                                    $('#dictamenModal').modal('show');
                                                },
                                                error: function() {
                                                    // Muestra un mensaje de error si la solicitud falla
                                                    $('#dictamenContent').text('Error al cargar el dictamen.');
                                                    $('#dictamenModal').modal('show');
                                                }
                                            });
                                        });
                                    });
                                </script>
                                {{-- AJAX --}}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th>
                                <span>
                                    USTED NO TIENE CITAS MEDICAS AGENDADAS -
                                    <a href="{{ route('appointments.create') }}">
                                        ¿DESEA AGENDAR UNA CITA?
                                    </a>
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
