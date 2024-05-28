Estoy teniendo un problema entre los modelos Third_Data y Medical_Entities, te mostrare las migraciones y modelos y luego te mostrare el problema
```php
Schema::create('third_data', function (Blueprint $table) {
            $table->unsignedSmallInteger('third_data_id', true);
            $table->unsignedTinyInteger('id_document_type')->nullable();
            $table->foreign('id_document_type')->references('document_type_id')->on('document_types')->onDelete('set null');
            $table->string('identification_number', 12)->unique();
            $table->string('name', 30);
            $table->string('last_name', 30);
            $table->string('number_phone', 30)->unique();
            $table->dateTime('birth_date');
            $table->unsignedTinyInteger('id_gender')->nullable();
            $table->foreign('id_gender')->references('gender_id')->on('genders')->onDelete('set null');
            $table->string('address', 100)->nullable();
            $table->unsignedTinyInteger('id_medical_entity')->nullable();
            $table->foreign('id_medical_entity')->references('medical_entity_id')->on('medical_entities')->onDelete('set null');
            $table->unsignedTinyInteger('id_status')->default('1')->nullable();
            $table->foreign('id_status')->references('status_id')->on('statuses')->onDelete('set null');
            $table->unsignedTinyInteger('id_specialty')->nullable();
            $table->foreign('id_specialty')->references('specialty_id')->on('specialties')->onDelete('set null');
            $table->timestamps();
        });
class Third_Data extends Model
{
    use HasFactory;
    protected $table = 'third_data';
    protected $primaryKey = 'third_data_id';
    protected $guarded = [];

    public function medicalEntity(): BelongsTo
    {
        return $this->belongsTo(Medical_Entities::class, 'id_medical_entity', 'medical_entity_id');
    }
}
Schema::create('medical_entities', function (Blueprint $table) {
            $table->unsignedTinyInteger('medical_entity_id', true);
            $table->string('business_name', 100);
            $table->string('nit', 9);
            $table->string('number_phone', 30);
            $table->string('email', 100);
            $table->unsignedTinyInteger('id_entity_type')->nullable();
            $table->foreign('id_entity_type')->references('entity_type_id')->on('entity_types')->onDelete('set null');
            $table->string('address', 50);
            $table->unsignedTinyInteger('id_status')->default('1')->nullable();
            $table->foreign('id_status')->references('status_id')->on('statuses')->onDelete('set null');
            $table->timestamps();
        });
class Medical_Entities extends Model
{
    use HasFactory;
    protected $table = 'medical_entities';
    protected $primaryKey = 'medical_entity_id';
    protected $guarded = [];
    public function thirdData(): HasMany
    {
        return $this->hasMany(Third_Data::class, 'id_medical_entity', 'medical_entity_id');
    }
}
```

Segun el analisis que hice, era el siguiente un registro de Third_Data podia tener un Medical_Entities y Medical_Entities podria estar en muchos registros de Third_Data, por lo que opte por una relacion de uno a muchos, pero estuve haciendo pruebas y la relacion thirdData->medicalEntity me retorna null

Saca tus conclusiones y ayudame a arreglar el error
