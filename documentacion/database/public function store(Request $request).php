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
