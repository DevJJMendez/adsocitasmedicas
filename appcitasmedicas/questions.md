Por algun motivo no esta funcionando, te mostrare el codigo para que lo analices
```php
Route::group(['prefix' => 'register'], function () {
    Route::get('', [RegisterController::class, 'showRegisterForm'])->name('register-form-view');

    Route::get('/medical-entities/{entity_type_id}', [MedicalEntityController::class, 'getMedicalEntities']);

    Route::post('/new-user', [RegisterController::class, 'createUser'])->name('new-user');
});

class RegisterController extends Controller
{
    public function getMedicalEntities($entity_type_id)
    {
        $medicalEntities = Medical_Entities::where(['id_entity_type', $entity_type_id])->select('medical_entity_id', 'business_name')->get();
        return response()->json($medicalEntities);
    }
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

        $medicalEntitiesTypes = EntityType::select(['entity_type_id', 'id_common_attribute'])->with([
            'commonAttribute' => function ($query) {
                $query->select([
                    'common_attribute_id',
                    'name'
                ]);
            }
        ])->get();

        $medicalEntities = Medical_Entities::select('medical_entity_id', 'business_name')->where(['id_status' => 1])->get();
        // $genders = Gender::pluck('name', 'detail_id');
        return view('auth.register', compact(['documentTypes', 'medicalEntitiesTypes', 'medicalEntities']));
    }
}
```


// $medicalEntitiesTypes = EntityType::select(['entity_type_id', 'id_common_attribute'])->with([
        //     'commonAttribute' => function ($query) {
        //         $query->select([
        //             'common_attribute_id',
        //             'name'
        //         ]);
        //     }
        // ])->get();

{{-- Tipo de entidad --}}
                                {{-- <div class="form-group">
                                    <label for="id_medical_entity">Entidad Médica</label>
                                    <select name="id_medical_entity" class="form-control" required>
                                        @forelse ($medicalEntitiesTypes as $medicalEntityType)
                                            <option value="{{ $medicalEntityType->entity_type_id }}">
                                                {{ $medicalEntityType->commonAttribute->name }}
                                            </option>
                                        @empty
                                            <option value="">No data found</option>
                                        @endforelse
                                    </select>
                                </div> --}}


Arreglar formulario de registro

<div class="row g-3">

                    {{-- product code --}}
                    <div class="col-md-6">
                        <input type="number" name="code" id="code" class="form-control" placeholder="Código"
                            value="{{ old('code') }}">
                        @error('code')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- product name --}}
                    <div class="col-md-6">
                        <input type="text" name="name" id="code" class="form-control" placeholder="Nómbre"
                            value="{{ old('name') }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- product description --}}
                    <div class="col-md-6">
                        <textarea name="description" class="form-control" id="#description" cols="10" rows="3"
                            placeholder="Descripción"></textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- product category --}}
                    <div class="col-md-6">
                        <label for="id_category" class="form-label">Seleccionar categoria:</label>
                        <select title="Seleccionar" class="form-select" name="id_category">
                            @foreach ($categories as $category)
                                @if ($category->categoryCommonAtribbute && $category->categoryCommonAtribbute->id_status == 1)
                                    <option value="{{ $category->category_id }}"
                                        {{ old('id_category') == $category->category_id ? 'selected' : '' }}>
                                        {{ $category->categoryCommonAtribbute->name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    {{-- product brand --}}
                    <div class="col-md-6">
                        <label for="id_brand" class="form-label">Seleccionar marca:</label>
                        <select class="form-select" name="id_brand">
                            @foreach ($brands as $brand)
                                @if ($brand->brandCommonAtribbute && $brand->brandCommonAtribbute->id_status == 1)
                                    <option
                                        value="{{ $brand->brand_id }} {{ old('id_brand') == $brand->brand_id ? 'selected' : '' }}">
                                        {{ $brand->brandCommonAtribbute->name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    {{-- product ovedue --}}
                    <div class="col-md-6">
                        <label for="due_date" class="form-label">Fecha de vencimiento:</label>
                        <input type="date" name="due_date" id="due_date" class="form-control"
                            value="{{ old('due_date', date('Y-m-d')) }}" min="{{ date('Y-m-d') }}">
                        @error('due_date')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- product image --}}
                    <div class="col-md-6">
                        <label for="image_path" class="form-label">Fecha de vencimiento:</label>
                        <input type="file" name="image_path" id="image_path" class="form-control" accept="image/*"
                            value="{{ old('name') }}">
                        @error('image_path')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>