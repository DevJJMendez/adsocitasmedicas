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
          @endif
          <div class="text-center text-muted mb-4">
            <h2>Ingresa tu datos</h2>
          </div>

          {{-- form register --}}
          <div class="container">
            <h1>Formulario de Datos Personales</h1>
            <form class="form-width" action="{{ route('createnewuser') }}" method="POST">
              @csrf

              {{-- tipo de documento --}}
              <div class="form-group">
                <label for="document_type">Tipo de Documento</label>
                <select name="document_type" class="form-control" required>
                  @forelse ($documentType as $documenttype)
                  <option value="{{$documenttype->detail_id}}">{{$documenttype->name}}</option>
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
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                  <input type="text" name="identification_number" class="form-control"
                    placeholder="Ingrese su número de identificación" value="{{old('identification_number')}}">
                </div>

                {{-- numero de telefono --}}
                <div class="form-group col-md-6">
                  <label for="number_phone">Número de Teléfono</label>
                  @error('number_phone')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                  <input type="tel" id="number_phone" name="number_phone" class="form-control"
                    placeholder="Ingrese su número de teléfono" value="{{old('number_phone')}}">
                </div>
              </div>

              {{-- primer nombre --}}
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="first_name">Primer Nombre</label>
                  @error('first_name')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                  <input type="text" id="first_name" name="first_name" class="form-control"
                    placeholder="Ingrese su primer nombre" value="{{old('first_name')}}">
                </div>
                {{-- segundo nombre --}}
                <div class="form-group col-md-6">
                  <label for="second_name">Segundo Nombre</label>
                  @error('second_name')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                  <input type="text" id="second_name" name="second_name" class="form-control"
                    placeholder="Ingrese su segundo nombre" value="{{old('second_name')}}">
                </div>
              </div>

              {{-- primer apellido --}}
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="sur_name">Primer Apellido</label>
                  @error('sur_name')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                  <input type="text" id="sur_name" name="sur_name" class="form-control"
                    placeholder="Ingrese su primer apellido" value="{{old('sur_name')}}">
                </div>
                {{-- segundo apellido --}}
                <div class="form-group col-md-6">
                  <label for="second_sur_name">Segundo Apellido</label>
                  @error('second_sur_name')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                  <input type="text" id="second_sur_name" name="second_sur_name" class="form-control"
                    placeholder="Ingrese su segundo apellido" value="{{old('second_sur_name')}}">
                </div>
              </div>

              {{-- correo electronico --}}
              <div class="form-group">
                <label for="mail">Correo Electrónico</label>
                @error('email')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="email" id="email" name="email" class="form-control"
                  placeholder="Ingrese su correo electrónico" value="{{old('email')}}">
              </div>
              {{-- Fecha de Nacimiento --}}
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="birth_date">Fecha de Nacimiento</label>
                  @error('birth_date')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                  <input type="date" id="birth_date" name="birth_date" class="form-control"
                    value="{{old('birth_date')}}">
                </div>

                {{-- Géneros --}}
                <div class="form-group col-md-6">
                  <label for="gender_id">Género</label>
                  @error('gender_id')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                  <select id="gender_id" name="gender_id" class="form-control">
                    @forelse ($genders as $gender)
                    <option value="{{$gender->detail_id}}">{{$gender->name}}</option>
                    @empty
                    <option value="#">No data found</option>
                    @endforelse
                  </select>
                </div>
              </div>

              {{-- direccion --}}
              <div class="form-group">
                <label for="address">Dirección</label>
                @error('address')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" id="address" name="address" class="form-control" placeholder="Ingrese su dirección"
                  value="{{old('address')}}">
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