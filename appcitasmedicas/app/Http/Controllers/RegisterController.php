<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Third_Data;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function createUser(RegisterRequest $registerRequest)
    {
        $thirdData = Third_Data::create([
            'document_type_id' => $registerRequest->document_type_id,
            'identification_number' => $registerRequest->identification_number,
            'first_name' => $registerRequest->first_name,
            'second_name' => $registerRequest->second_name,
            'sur_name' => $registerRequest->sur_name,
            'second_sur_name' => $registerRequest->second_sur_name,
            'number_phone' => $registerRequest->number_phone,
            'birth_date' => $registerRequest->birth_date,
            'gender_type_id' => $registerRequest->gender_type_id,
            'address' => $registerRequest->address,
            'idMedicalEntity' => $registerRequest->idMedicalEntity,
        ]);
        User::create([
            'third_data_id' => $thirdData->data_id,
            'email' => $registerRequest->email,
            'password' => $thirdData->password,
            'roler' => 'paciente',
            'id_entity' => $thirdData->idMedicalEntity
        ]);
        notify()->success('Usuario registrado correctamente', 'Registrar usuario');
        return view('auth.register');
    }
}
