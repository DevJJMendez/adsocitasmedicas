<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Document_Type_View;
use App\Models\Gender_View;
use App\Models\Medical_Entities;
use App\Models\Third_Data;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {

        $documentType = Document_Type_View::pluck('name', 'detail_id');
        $medicalEntity = Medical_Entities::select('medical_entity_id', 'business_name')->get();
        $genderType = Gender_View::pluck('name', 'detail_id');
        return view('auth.register', compact('documentType', 'medicalEntity', 'genderType', ));
    }
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
            'id_medical_entity' => $registerRequest->id_medical_entity
        ]);
        User::create([
            'third_data_id' => $thirdData->data_id,
            'email' => $registerRequest->email,
            'password' => $registerRequest->password,
        ])->assignRole('Paciente');
        return redirect()->route('login')->with('email', 'password');
    }
}
