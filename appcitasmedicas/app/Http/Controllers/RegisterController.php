<?php
namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\DocumentType;
use App\Models\Gender;
use App\Models\Medical_Entities;
use App\Models\Third_Data;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        $documentTypes = DocumentType::select(['document_type_id', 'id_common_attribute'])->with([
            'commonAttribute' => function ($query) {
                $query->select([
                    'common_attribute_id',
                    'name'
                ]);
            }
        ])->get();
        $genders = Gender::select(['gender_id', 'id_common_attribute'])->with([
            'commonAttribute' => function ($query) {
                $query->select(['common_attribute_id', 'name']);
            }
        ])->get();
        $medicalEntities = Medical_Entities::select('medical_entity_id', 'business_name')->where(['id_status' => 1])->get();
        return view('auth.register', compact(['documentTypes', 'medicalEntities', 'genders']));
    }
    public function createUser(RegisterRequest $registerRequest)
    {
        $thirdData = Third_Data::create([
            'id_document_type' => $registerRequest->id_document_type,
            'identification_number' => $registerRequest->identification_number,
            'name' => $registerRequest->name,
            'last_name' => $registerRequest->last_name,
            'number_phone' => $registerRequest->number_phone,
            'birth_date' => $registerRequest->birth_date,
            'id_gender' => $registerRequest->id_gender,
            'address' => $registerRequest->address,
            'id_medical_entity' => $registerRequest->id_medical_entity
        ]);
        User::create([
            'id_third_data' => $thirdData->third_data_id,
            'email' => $registerRequest->email,
            'password' => $registerRequest->password,
        ])->assignRole('Paciente');
        return redirect()->route('login');
    }
}
