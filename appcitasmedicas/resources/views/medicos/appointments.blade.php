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
                        <th scope="col">Fecha</th>
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
                                <button type="" class="btn btn-sm btn-warning" data-toggle="modal"
                                    data-target="#dictamenModal" aria-hidden="true"
                                    data-id="{{ $doctorAppointment->appointment_id }}">
                                    Dar dictamen médico
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="dictamenModal" tabindex="-1"
                                    aria-labelledby="dictamenModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="dictamenModalLabel">Dar dictamen médico</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="dictamenForm">
                                                    @csrf
                                                    <input type="hidden" id="appointmentId" name="appointment_id">
                                                    <div class="form-group">
                                                        <label for="medical_evaluation">Dictamen Médico</label>
                                                        <textarea class="form-control" id="dictamen" name="medical_evaluation" rows="4" required></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Guardar Dictamen</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Modal --}}
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
        {{-- AJAX --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                // Open modal and set appointment_id
                $('#dictamenModal').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget); // Button that triggered the modal
                    var appointmentId = button.data('id'); // Extract info from data-* attributes
                    var modal = $(this);
                    modal.find('.modal-body #appointmentId').val(appointmentId);
                });

                // Handle form submission
                $('#dictamenForm').submit(function(event) {
                    event.preventDefault();
                    var formData = $(this).serialize();

                    $.ajax({
                        url: '/doctor-appointments/doctor-opinion',
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                            $('#dictamenModal').modal('hide');
                            alert('Dictamen guardado correctamente');
                        },
                        error: function(response) {
                            alert('Error al guardar el dictamen');
                            console.log(response);
                        }
                    });
                });
            });
        </script>
        {{-- AJAX --}}
    </div>
@endsection
