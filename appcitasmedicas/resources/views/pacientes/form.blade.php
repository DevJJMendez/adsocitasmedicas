<div class="form-row">

    {{-- Entidad Medica --}}
    <div class="form-group col-md-6">
        <label for="id_medical_entity">Entidad Médica</label>
        <select name="id_medical_entity" class="form-control" required>
            @forelse ($medicalEntities as $medicalEntity)
                <option value="{{ $medicalEntity->medical_entity_id }}"
                    {{ $patient->id_entity_type == $medicalEntity->entity_type_id ? 'selected' : '' }}>
                    {{ $medicalEntity->business_name }}
                </option>
            @empty
                <option value="">No data found</option>
            @endforelse
        </select>
    </div>

    {{-- numero de identificación --}}
    <div class="form-group col-md-6">
        <label for="identification_number">Número de Identificación</label>
        <input type="text" name="identification_number" class="form-control"
            placeholder="Ingrese su número de identificación"
            value="{{ old('identification_number', $patient->identification_number) }}">
        @error('identification_number')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-row">
    {{-- Nombre --}}
    <div class="form-group col-md-6">
        <label for="name">Nombre</label>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" id="name" name="name" class="form-control" placeholder="Ingrese su primer nombre"
            value="{{ old('name', $patient->name) }}">
    </div>

    {{-- Apellido --}}
    <div class="form-group col-md-6">
        <label for="last_name">Segundo Nombre</label>
        @error('last_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" id="last_name" name="last_name" class="form-control"
            placeholder="Ingrese su segundo nombre" value="{{ old('last_name', $patient->last_name) }}">
    </div>
</div>

<div class="form-row">
    {{-- numero de telefono --}}
    <div class="form-group col-md-6">
        <label for="number_phone">Número de Teléfono</label>
        @error('number_phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="tel" id="number_phone" name="number_phone" class="form-control"
            placeholder="Ingrese su número de teléfono" value="{{ old('number_phone', $patient->number_phone) }}">
    </div>

    {{-- Direccion --}}
    <div class="form-group col-md-6">
        <label for="address">Dirección</label>
        @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" id="address" name="address" class="form-control" placeholder="Ingrese su dirección"
            value="{{ old('address', $patient->address) }}">
    </div>
</div>

<div class="form-row">
    {{-- Fecha de Nacimiento --}}
    <div class="form-group col-md-6">
        <label for="birth_date">Fecha de Nacimiento</label>
        @error('birth_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="datetime" id="birth_date" name="birth_date" class="form-control"
            value="{{ old('birth_date', $patient->birth_date) }}">
    </div>

    {{-- Género --}}
    <div class="form-group col-md-6">
        <label for="id_gender">Género</label>
        @error('id_gender')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <select id="id_gender" name="id_gender" class="form-control">
            @forelse ($genderTypes as $genderType)
                <option value="{{ $genderType->gender_id }}"
                    {{ $patient->id_gender == $genderType->gender_id ? 'selected' : '' }}>
                    {{ $genderType->commonAttribute->name }}
                </option>
            @empty
                <option value="#">No data found</option>
            @endforelse
        </select>
    </div>
</div>

<div class="form-row">
    {{-- Correo electronico --}}
    <div class="form-group col-md-6">
        <label for="email">Correo Electronico</label>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" id="email" name="email" class="form-control"
            placeholder="Ingrese un correo electrónico" value="{{ old('email', $patient->user->email) }}">
    </div>

    @if (!isset($user))
        <div class="form-group col-md-6">
            <label for="password">Contraseña</label>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" id="password" name="password" class="form-control" placeholder="Nueva contraseña"
                value="{{ old('password') }}">
        </div>
    @endif
</div>
