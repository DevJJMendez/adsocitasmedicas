<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\DocumentType;
use App\Models\Gender;

use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Request;

class RegisterController extends Controller
{
    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
     /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function showDocumentType()
    {
        $documetTypes = DocumentType::all();
        return view('Test.register')->with(['documetTypes'=>$documetTypes]);
    }
    public function showGenders()
    {
        $genders = Gender::all();
        return view('Test.register')->with(['genders'=>$genders]);
    }
    public function getCalendar()
    {
        return view('citas.calendar');
    }
    public function getMedicalEntities(Request $request){

        // $entityType = $request->entityType;
        // // Obtener las entidades médicas correspondientes al tipo de entidad seleccionado
        // $medicalEntities= MedicalEntity::where('medical_entity_type', $entityType);
    }
}
