¿como puedo retornar la fecha de un registro al momento de editar?

```php
{{-- Fecha de Nacimiento --}}
    <div class="form-group col-md-6">
        <label for="birth_date">Fecha de Nacimiento</label>
        @error('birth_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="date" id="birth_date" name="birth_date" class="form-control"
            value="{{ old('birth_date') }}">
    </div>
```