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
                        {{-- form register --}}
                        <div class="container">
                            <h1>Formulario de Datos Personales</h1>
                            {{-- form --}}
                            <form class="form-width" action="{{ route('new-user') }}" method="POST">
                                @csrf
                                {{-- entidad medica --}}
                                <div class="form-group">
                                    {{-- tipo de documento --}}
                                    <label for="id_document_type">Tipo de Documento</label>
                                    <select name="id_document_type" class="form-control" required>
                                        @forelse ($documentTypes as $documentType)
                                            <option value="{{ $documentType->document_type_id }}">
                                                {{ $documentType->commonAttribute->name }}
                                            </option>
                                        @empty
                                            <option value="">No data found</option>
                                        @endforelse
                                    </select>
                                    {{-- Entidad medica --}}
                                    <label for="id_medical_entity">Entidad Médica</label>
                                    <select name="id_medical_entity" class="form-control" required>
                                        @forelse ($medicalEntities as $medicalEntity)
                                            <option value="{{ $medicalEntity->medical_entity_id }}">
                                                {{ $medicalEntity->business_name }}
                                            </option>
                                        @empty
                                            <option value="">No data found</option>
                                        @endforelse
                                    </select>
                                </div>
                                {{-- numero de indentificacion --}}
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="identification_number">Número de Identificación</label>
                                        @error('identification_number')
                                            <span class="alert alert-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="text" name="identification_number" class="form-control"
                                            placeholder="Ingrese su número de identificación"
                                            value="{{ old('identification_number') }}">
                                    </div>
                                    {{-- numero de telefono --}}
                                    <div class="form-group col-md-6">
                                        <label for="number_phone">Número de Teléfono</label>
                                        @error('number_phone')
                                            <span class="alert alert-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="tel" id="number_phone" name="number_phone" class="form-control"
                                            placeholder="Ingrese su número de teléfono" value="{{ old('number_phone') }}">
                                    </div>
                                    {{-- nombre --}}
                                    <div class="form-group col-md-6">
                                        <label for="name">Nómbre</label>
                                        @error('name')
                                            <span class="alert alert-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Felipe" value="{{ old('name') }}">
                                    </div>
                                    {{-- apellido --}}
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Apellido</label>
                                        @error('last_name')
                                            <span class="alert alert-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="text" id="last_name" name="last_name" class="form-control"
                                            placeholder="Lopez" value="{{ old('last_name') }}">
                                    </div>
                                    {{-- email --}}
                                    <div class="form-group col-md-6">
                                        <label for="email">Correo Electronico</label>
                                        @error('email')
                                            <span class="alert alert-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="text" id="email" name="email" class="form-control"
                                            placeholder="Ingrese un correo electrónico" value="{{ old('email') }}">
                                    </div>
                                    {{-- password --}}
                                    <div class="form-group col-md-6">
                                        <label for="password">Contraseña</label>
                                        @error('password')
                                            <span class="alert alert-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="text" id="password" name="password" class="form-control"
                                            placeholder="Ingrese su una contraseña" value="{{ old('password') }}">
                                    </div>
                                    {{-- fecha de nacimiento --}}
                                    <div class="form-group col-md-6">
                                        <label for="birth_date">Fecha de Nacimiento</label>
                                        @error('birth_date')
                                            <span class="alert alert-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="date" id="birth_date" name="birth_date" class="form-control"
                                            value="{{ old('birth_date') }} max="{{ date('Y-m-d') }}">
                                    </div>
                                    {{-- dirección --}}
                                    <div class="form-group col-md-6">
                                        <label for="address">Dirección</label>
                                        @error('address')
                                            <span class="alert alert-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="text" id="address" name="address" class="form-control"
                                            placeholder="Ingrese su dirección" value="{{ old('address') }}">
                                    </div>
                                    {{-- género --}}
                                    <div class="form-group col-md-6">
                                        <label for="id_gender">Género</label>
                                        @error('id_gender')
                                            <span class="alert alert-danger">{{ $message }}</span>
                                        @enderror
                                        <select id="id_gender" name="id_gender" class="form-control">
                                            @forelse ($genders as $gender)
                                                <option value="{{ $gender->gender_id }}">
                                                    {{ $gender->commonAttribute->name }}
                                                </option>
                                            @empty
                                                <option value="#">No data found</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
