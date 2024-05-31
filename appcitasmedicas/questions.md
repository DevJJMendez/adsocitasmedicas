¿Que puede estar mal en la siguiente validacion?

```php
'birth_date' => [
                
                function ($attribute, $value, $fail) {
                    $idDocumentType = $this->id_document_type;
                    if ($idDocumentType == 1 && strtotime($value) >= strtotime('2006-01-01')) {
                        $fail('La fecha de nacimiento no puede ser posterior a 2006 para este tipo de documento');
                    }
                }
            ],
```
Crea el metodo destroy

// 'id_document_type' => 'required',
            // 'identification_number' => 'required',
            // 'name' => 'required|string',
            // 'last_name' => 'required|string',

            // // 'number_phone' => ['required', Rule::unique('third_data', 'number_phone')->ignore($this->route('patient')->third_data_id)],
            // 'number_phone' => 'required',

            // 'birth_date' => [
            //     'nullable',
            //     'before_or_equal:today',
            //     'after_or_equal:1925-01-01',
            //     function ($attribute, $value, $fail) {
            //         $idDocumentType = $this->id_document_type;
            //         if ($idDocumentType == 2 && strtotime($value) < strtotime('2006-01-01')) {
            //             $fail('La fecha de nacimiento no puede ser anterior a 2006 para este tipo de documento.');
            //         }
            //     }
            // ],
            // 'id_medical_entity' => 'required',
            // 'id_gender' => 'required',
            // 'address' => 'required',
            // 'email' => 'required|email|unique:users',
            // 'password' => 'required',