- En el registro de médicos, a la hora de seleccionar el documento de indentidad, no debe mostrar tarjeta de indentidad ya que los medicos deben ser mayores de edad.

# Jeison Carcamo:

- Haces una vista para el registro de citas, nada de calendario, solamente un formulario para registrar la cita 
- Haces una vista donde muestres el calendario con las citas que tiene el usuario


# Modulo Citas

- Codigo ajax para seleccionar un medico segun la especialidad de la cita:
```js
Route::get('/get-doctors/{specialtyId}', [CitasController::class, 'getDoctorBySpecialty']);
public function getDoctorBySpecialty($specialtyId)
    {
        // Obtener los usuarios (médicos) que tienen la especialidad proporcionada
        $doctors = User::whereHas('thirdDataUser.specialty', function ($query) use ($specialtyId) {
            $query->where('specialty_id', $specialtyId);
        })->get();
        return response()->json($doctors);
    }
 <script>
        document
    .getElementById("specialtySelect")
    .addEventListener("change", function () {
        let specialtyId = this.value;
        let doctorSelect = document.getElementById("doctorSelect");
        doctorSelect.innerHTML = "";

        if (specialtyId) {
            // Realizar una solicitud AJAX para obtener los médicos asociados segun la especialidad seleccionada
            fetch("/get-doctors/" + specialtyId)
                .then((response) => response.json())
                .then((data) => {
                    data.forEach((doctor) => {
                        let option = document.createElement("option");
                        option.value = doctor.data_id;
                        option.textContent =
                            doctor.first_name + "" + doctor.second_name;
                        doctorSelect.appendChild(option);
                    });
                });
        }
    });
   </script>
```

- Axios:
```php
<script>
    document.getElementById("specialtySelect").addEventListener("change", function () {
    let specialtyId = this.value;
    let doctorSelect = document.getElementById("doctorSelect");
    doctorSelect.innerHTML = "";

    if (specialtyId) {
        fetch(`/get-doctors/${specialtyId}`)
            .then((response) => response.json())
            .then((data) => {
                data.forEach((doctor) => {
                    let option = document.createElement("option");
                    option.value = doctor.data_id;
                    option.textContent = `${doctor.first_name} ${doctor.second_name}`;
                    doctorSelect.appendChild(option);
                });
            })
            .catch((error) => {
                console.error('Error fetching doctors:', error);
            });
    }
});
   </script>
```