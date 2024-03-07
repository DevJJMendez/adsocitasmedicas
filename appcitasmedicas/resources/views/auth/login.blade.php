@extends('layouts.form')
@section('title', 'Login')
@section('header-content')
    <h1 class="text-lead text-light">¡Bienvenido!</h1>
    <p class="text-lead text-light">En Salud Colombia sabemos que la salud es lo más importante, inicia sesión para ver tus
        citas programadas ó agendar una nueva cita,</p>
@endsection
@section('content')
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
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

                        {{-- Formulario --}}
                        <form method="POST" action="{{ route('login') }}" role="form">
                            @csrf
                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Correo Electronico" type="email"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Contraseña" type="password" name="password"
                                        required autocomplete="current-password">
                                </div>
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" id="remenber" type="checkbox" name="remenber"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="remenber">
                                    <span class="text-muted">Guardar datos de sesión</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Iniciar Sesión</button>
                            </div>
                        </form>
                        {{-- Formulario --}}
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <a href="{{ route('password.request') }}" class="text-light"><small>¿Olvidaste tu
                                contraseña?</small></a>
                    </div>
                    <div class="col-6 text-right">
                        <a href="{{ route('register-form-view') }}" class="text-light"><small>¿No estas registrado
                                aún?</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
