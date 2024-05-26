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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();
Route::middleware(['auth', 'check_user_status'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
//Users Route
Route::resource('users', AsignarRol::class)->only('index', 'edit', 'update', 'destroy')->names('asignar');
// Medical Entity Route
Route::group(['prefix' => 'medical-entities'], function () {
    Route::get('', [MedicalEntityController::class, 'index'])->name('medical.entities.view');
    Route::get('/create', [MedicalEntityController::class, 'create'])->name('create.view');
    Route::post('createnewentity', [MedicalEntityController::class, 'store'])->name('create');
    Route::get('{id}/edit', [MedicalEntityController::class, 'edit'])->name('edit.view');
    Route::put('update/{medicalEntity}', [MedicalEntityController::class, 'update'])->name('update');
    Route::put('delete/{medicalEntity}', [MedicalEntityController::class, 'delete'])->name('delete');
});

// medicos route
Route::group(['prefix' => 'medicos'], function () {
    Route::get('', [MedicoController::class, 'index'])->name('medico.view');
    Route::get('/create', [MedicoController::class, 'create'])->name('create.medico');
    Route::post('/newMedico', [MedicoController::class, 'createNewMedico'])->name('create.new.medico');
    Route::get('/editMedico/{medico}', [MedicoController::class, 'edit'])->name('edit.medico.view');
    Route::put('/updateMedico/{medico}', [MedicoController::class, 'updateMedico'])->name('update.medico');
    Route::delete('/deleteMedico/{medico}', [MedicoController::class, 'deleteMedico'])->name('delete.medico');
});

// pacientes route
Route::group(['prefix' => 'pacientes'], function () {
    Route::get('', [PacienteController::class, 'index'])->name('paciente.view');
    Route::get('/create', [PacienteController::class, 'create'])->name('create.paciente');
    Route::post('/createNewPaciente', [PacienteController::class, 'createNewPaciente'])->name('create.new.paciente');
    Route::get('/editPaciente/{paciente}', [PacienteController::class, 'edit'])->name('edit.paciente.view');
    Route::put('/updatePaciente/{paciente}', [PacienteController::class, 'updatePaciente'])->name('update.paciente');
    Route::delete('/deletePaciente/{paciente}', [PacienteController::class, 'deletePaciente'])->name('delete.paciente');
});

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


