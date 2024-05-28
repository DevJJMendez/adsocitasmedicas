Necesito validar el campo de fecha de nacimiento en base a otro campo el cual es el tipo de documento:

por ejemplo si la eleccion es la primera (1) la fecha que ingresen no debe ser inferior a 2006

```php
class PacienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'birth_date' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'birth_date.required' => 'Debe ingresar una fecha de nacimiento',
        ];
    }
}

{{-- tipo de documento --}}
                    <div class="form-group col-md-6">
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
                    </div>

{{-- fecha de nacimiento --}}
                    <div class="form-group col-md-6">
                        <label for="birth_date">Fecha de Nacimiento</label>
                        <input type="date" id="birth_date" name="birth_date" class="form-control"
                            value="{{ old('birth_date') }}">
                        @error('birth_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
```
¿como puedo lograrlo?

ademas, segun mi analisis habria que aplicar un solucion escalable ya que no es muy bueno tener que estar cada año cambiando la fecha  