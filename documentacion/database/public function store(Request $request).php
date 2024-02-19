<?php 
public function store(Request $request)
    {
        // Validación de datos
        $request->validate(Personal::$rules);

        // Validar existencia de personal por número de documento
        $existingPersonal = Personal::where('numero_documento', $request->input('numero_documento'))->first();

        if ($existingPersonal) {
            // Si ya existe personal con ese número de documento, muestra un mensaje de error y redirige
            return redirect()->back()->with('success', 'Ya existe un personal con este número de documento.');
        }

        // Si no existe, crea el personal
        $data = $request->all();
        $userCorreo = $request['correo'];
        $userDocumento = $request['numero_documento'];
        $userRol = $request['rol'];
        
        $personal = Personal::create($data);


        $user = new User([
            'email' => $userCorreo,
            'password' => bcrypt($userDocumento),
        ]);

        $adminRole = Role::where('name', $userRol)->first();
        $user->assignRole($adminRole);

        $personal->user()->save($user);


        // Redirige a donde desees
        return redirect()->route('personal.index')
            ->with('success', 'Personal creado con éxito')
            ->with('title', 'Guardado');
    }
// la tabla thirddatas esta relacionada con la tabla Users , al momento de enviar los datos a la tabla Thirddata debo crear automaticamente los registros de la tabla users, el campo third_data_id de la tabla users debe ser igual al campo data_id de la tabla thirddatas, al igual que el email, el campo password de la tabla users sera el campo identification_number de la tabla thirddatas, ¿como puedo lograr esto?  

// ademas, apartir de estos requisitos me surge dudas, ¿puedo usar algun patron de diseño o servicio para que el controlador no tenga tantas responsabilidades?