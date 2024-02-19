<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Thirddata;

class UserController extends Controller
{
    public function createUserWithThirdData(UserRequest $userRequest)
    {
        Thirddata::create([
            'document_type'=>$userRequest->document_id,
            'identification_number'=>$userRequest->identification_number,
            'first_name'=>$userRequest->first_name,
            'second_name'=>$userRequest->second_name,
            'sur_name'=>$userRequest->sur_name,
            'second_sur_name'=>$userRequest->second_sur_name,
            'number_phone'=>$userRequest->number_phone,
            'mail'=>$userRequest->mail,
            'birth_date'=>$userRequest->birth_date,
            'gender_id'=>$userRequest->gender_id,
            'address'=>$userRequest->address,
            'statu_id'=> 1,
        ]);
        notify()->success('Usuario creado con exito', 'Crear nuevo usuario');
        return view('auth.register');
    }
}
