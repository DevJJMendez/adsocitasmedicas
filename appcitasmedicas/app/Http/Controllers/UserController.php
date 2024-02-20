<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Thirddata;
use App\Services\UserService;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService){
        $this->userService=$userService;
    }
    public function createUser(UserRequest $userRequest)
    {
        $userData = $userRequest->validated();
        $this->userService->createUserWithThirdData($userData);
        notify()->success('Usuario creado con exito', 'Crear nuevo usuario');
        return view('auth.register');
    }
}
