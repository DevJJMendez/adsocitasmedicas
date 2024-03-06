- return email and password from register to login
- fix problem with the function delete at medical entities and the relation between users



// specialty route
Route::group(['prefix' => 'specialties'], function () {
    Route::get('', [SpecialtyController::class, 'index'])->name('specialtyView');
    Route::get('/create', [SpecialtyController::class, 'create'])->name('createSpecialty');
    Route::post('createNewSpecialty', [SpecialtyController::class, 'store'])->name('createNewSpecialty');
    Route::get('{specialty}/edit', [SpecialtyController::class, 'edit'])->name('specialty.edit');
    Route::put('update/{specialty}', [SpecialtyController::class, 'update'])->name('specialty.update');
    Route::delete('delete/{specialty}', [SpecialtyController::class, 'delete'])->name('specialty.delete');
});