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
                        <form role="form" method="POST" action="{{ route('register') }}">
                            @csrf
                            {{-- Nombre --}}
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Nombre" type="text" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            {{-- Email --}}
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Correo Electronico" type="email"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>
                            </div>
                            {{-- Contraseña --}}
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Contraseña" type="password" name="password"
                                        required autocomplete="new-password">
                                </div>
                            </div>
                            {{-- Repetir contraseña --}}
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Repetir contraseña" type="password"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="row my-4">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">Crear nueva cuenta</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
