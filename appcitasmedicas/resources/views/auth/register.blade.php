@extends('layouts.form')
@section('title', 'Registrate')
@section('header-content')
    <h1>¡Bienvenido!</h1>
    <p class="text-lead text-light">En Salud Colombia nos preocupamos por tu salud, registrate para que puedas acceder a
        nuestros servicios</p>
@endsection
@section('content')
    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary shadow border-0 card-body-size centered-container mx-auto">
                    <div class="card-header bg-transparent pb-5">
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        {{-- Alerts --}}
                        @if ($errors->any())
                            <div class="text-center text-muted mb-2">
                                <h3>Se encontro el siguiente error:</h3>
                            </div>
                            <div class="alert alert-danger mb-4" role="alert">
                                {{ $errors->first() }}
                            </div>
                        @else
                            <div class="text-center text-muted mb-4">
                                <h2>Ingresa tu datos</h2>
                            </div>
                        @endif

                        {{-- form register --}}
                        <div class="container">
                            <h1>Formulario de Datos Personales</h1>
                            <form class="form-width" action="procesar_formulario.php" method="POST">
                              <div class="form-group">
                                <label for="document_id">Tipo de Documento</label>
                                <select id="document_id" name="document_id" class="form-control" required>
                                  <option value="">Seleccionar...</option>
                                  <option value="1">DNI</option>
                                  <option value="2">Carné de Identidad</option>
                                  <option value="3">Pasaporte</option>
                                </select>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="identification_number">Número de Identificación</label>
                                  <input type="text" id="identification_number" name="identification_number" class="form-control" placeholder="Ingrese su número de identificación" required>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="number_phone">Número de Teléfono</label>
                                  <input type="tel" id="number_phone" name="number_phone" class="form-control" placeholder="Ingrese su número de teléfono">
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="first_name">Primer Nombre</label>
                                  <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Ingrese su primer nombre" required>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="second_name">Segundo Nombre</label>
                                  <input type="text" id="second_name" name="second_name" class="form-control" placeholder="Ingrese su segundo nombre">
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="sur_name">Primer Apellido</label>
                                  <input type="text" id="sur_name" name="sur_name" class="form-control" placeholder="Ingrese su primer apellido" required>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="second_sur_name">Segundo Apellido</label>
                                  <input type="text" id="second_sur_name" name="second_sur_name" class="form-control" placeholder="Ingrese su segundo apellido">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="mail">Correo Electrónico</label>
                                <input type="email" id="mail" name="mail" class="form-control" placeholder="Ingrese su correo electrónico" required>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="birth_date">Fecha de Nacimiento</label>
                                  <input type="date" id="birth_date" name="birth_date" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="gender_id">Género</label>
                                  <select id="gender_id" name="gender_id" class="form-control" required>
                                    <option value="">Seleccionar...</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                    <option value="3">Otro</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="address">Dirección</label>
                                <input type="text" id="address" name="address" class="form-control" placeholder="Ingrese su dirección">
                              </div>
                              <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
                          </div>
                          {{-- form register --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
