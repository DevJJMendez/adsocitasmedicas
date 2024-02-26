<?php
use App\Http\Controllers\EventoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicalEntityController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\SpecialtyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
// Route calendar
Route::get('/citas', [EventoController::class, 'index']);
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'users'], function () {
    Route::post('')->name('new.user');
});
// Medical Entity Route
Route::group(['prefix' => 'medical-entities'], function () {


    Route::get('/show.test.view', [MedicalEntityController::class, 'showTestView'])->name('show.test.view');

    Route::get('', [MedicalEntityController::class, 'showMedicalEntitiesView'])->name('medical.entities.view');
    Route::get('/create', [MedicalEntityController::class, 'showNewMecicalEntitiesView'])->name('create.view');
    Route::post('createnewentity', [MedicalEntityController::class, 'createNewMedicalEntity'])->name('create.new.medical.entity');
    Route::get('{id}/edit', [MedicalEntityController::class, 'showEditMedicalEntitiesView'])->name('edit.view');
    Route::put('update/{specialty}', [SpecialtyController::class, 'updateSpecialty'])->name('specialty.update');
    Route::delete('update/{specialty}', [SpecialtyController::class, 'deleteSpecialty'])->name('specialty.delete');
});
// specialty route
Route::group(['prefix' => 'specialties'], function () {
    Route::get('', [SpecialtyController::class, 'index'])->name('specialtyView');
    Route::get('/create', [SpecialtyController::class, 'create'])->name('createSpecialty');
    Route::post('createNewSpecialty', [SpecialtyController::class, 'createNewSpecialty'])->name('createNewSpecialty');
    Route::get('{specialty}/edit', [SpecialtyController::class, 'especialtyEdit'])->name('specialty.edit');
    Route::put('update/{specialty}', [SpecialtyController::class, 'updateSpecialty'])->name('specialty.update');
    Route::delete('update/{specialty}', [SpecialtyController::class, 'deleteSpecialty'])->name('specialty.delete');
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
// citas route
Route::group(['prefix' => 'citas'], function () {
    Route::get('', [PacienteController::class, 'showAppointmentView'])->name('citas.view');
});

