
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="id_medical_entity">Entidad Médica</label>
        <select name="id_medical_entity" class="form-control" required>
            @forelse ($medicalEntity as $medicalEntities)
                <option value="{{ $medicalEntities->medical_entity_id }}">
                    {{ $medicalEntities->business_name }}
                </option>
            @empty
                <option value="">No data found</option>
            @endforelse
        </select>
    </div>

    <div class="form-group col-md-6">
        <label for="identification_number">Número de Identificación</label>

        <input type="text" name="identification_number" class="form-control"
            placeholder="Ingrese su número de identificación"  value="{{ old('identification_number',$tercero->identification_number) }}">
            @error('identification_number')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

</div>
{{-- ----------------------------------------- --}}
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="first_name">Primer Nombre</label>
        @error('first_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" id="first_name" name="first_name" class="form-control"
            placeholder="Ingrese su primer nombre" value="{{ old('first_name' , $tercero->first_name) }}">
    </div>
    {{-- segundo nombre --}}
    <div class="form-group col-md-6">
        <label for="second_name">Segundo Nombre</label>
        @error('second_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" id="second_name" name="second_name" class="form-control"
            placeholder="Ingrese su segundo nombre" value="{{ old('second_name', $tercero->second_name) }}">
    </div>
</div>


{{-- -------------------------------------------- --}}
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="sur_name">Primer Apellido</label>
        @error('sur_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" id="sur_name" name="sur_name" class="form-control"
            placeholder="Ingrese su primer apellido" value="{{ old('sur_name', $tercero->sur_name) }}">
    </div>
    {{-- segundo apellido --}}
    <div class="form-group col-md-6">
        <label for="second_sur_name">Segundo Apellido</label>
        @error('second_sur_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" id="second_sur_name" name="second_sur_name" class="form-control"
            placeholder="Ingrese su segundo apellido" value="{{ old('second_sur_name',$tercero->second_sur_name) }}">
    </div>
</div>


{{-- ----------------------------------------- --}}
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="number_phone">Número de Teléfono</label>
        @error('number_phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="tel" id="number_phone" name="number_phone" class="form-control"
            placeholder="Ingrese su número de teléfono" value="{{ old('number_phone',$tercero->number_phone) }}">
    </div>
    <div class="form-group col-md-6">
        <label for="address">Dirección</label>
        @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" id="address" name="address" class="form-control"
            placeholder="Ingrese su dirección" value="{{ old('address',$tercero->address) }}">
    </div>


</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="birth_date">Fecha de Nacimiento</label>
        @error('birth_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="datetime" id="birth_date" name="birth_date" class="form-control"
            value="{{ old('birth_date',$tercero->birth_date) }}">
    </div>
    <div class="form-group col-md-6">
        <label for="gender_type_id">Género</label>
        @error('gender_type_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <select id="gender_type_id" name="gender_type_id" class="form-control">
            @forelse ($genderType as $gender_id => $name)
                <option value="{{ $gender_id }}">
                    {{ $name }}
                </option>
            @empty
                <option value="#">No data found</option>
            @endforelse
        </select>
    </div>


</div>

{{-- Géneros --}}

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="email">Correo Electronico</label>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" id="email" name="email" class="form-control"
            placeholder="Ingrese un correo electrónico" value="{{ old('email',$user->email) }}">
    </div>

    @if (!isset($user))
    <div class="form-group col-md-6">
        <label for="password">Contraseña</label>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" id="password" name="password" class="form-control"
            placeholder="Ingrese su una contraseña" value="{{ old('password') }}">
    </div>
@endif
</div>
