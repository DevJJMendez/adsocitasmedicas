<?php
use App\Http\Controllers\CitasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AsignarRol;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicalEntityController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\RoleController;
use App\Models\Medical_Entities;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();
Route::middleware(['auth', 'check_user_status'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::resource('users', AsignarRol::class)->only('index', 'edit', 'update', 'destroy')->names('asignar');
Route::resource('medical-entities', MedicalEntityController::class);
Route::resource('patients', PacienteController::class);
Route::resource('medicos', MedicoController::class);

//roles route
Route::resource('roles', RoleController::class)->names('admin.roles');
Route::resource('permisos', PermisoController::class)->names('admin.permisos');

// citas route
Route::group(['prefix' => 'citas'], function () {
    Route::get('', [CitasController::class, 'index'])->name('citas.view');
    Route::get('/nueva-cita', [CitasController::class, 'create'])->name('create.cita');
    Route::post('/crearcita', [CitasController::class, 'store'])->name('crear.cita');
    Route::get('/citas-agendadas', [CitasController::class, 'mostrarCitasAgendadas'])->name('citas.agendadas');
    Route::put('/cancelar-cita/{appointment_id}', [CitasController::class, 'cancelarCita'])->name('cancelar.cita');
});

Route::group(['prefix' => 'register'], function () {
    Route::get('', [RegisterController::class, 'showRegisterForm'])->name('register-form-view');
    Route::post('/new-user', [RegisterController::class, 'createUser'])->name('new-user');
});