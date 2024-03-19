document
    .getElementById("specialtySelect")
    .addEventListener("change", function () {
        let specialtyId = this.value;
        let doctorSelect = document.getElementById("doctorSelect");
        doctorSelect.innerHTML = "";

        if (specialtyId) {
            // Realizar una solicitud AJAX para obtener los médicos asociados segun la especialidad seleccionada
            fetch("/get-doctors" + specialtyId)
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
