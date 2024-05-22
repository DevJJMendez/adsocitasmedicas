Tengo los siguientes Modelos y Migraciones:

```php
class CommonAttribute extends Model
{
    use HasFactory;
    protected $table = 'common_attributes';
    protected $primryKey = 'common_attribute_id';
    protected $guarded = [];
    public function status(): HasOne
    {
        return $this->hasOne(Status::class, 'id_common_attribute', 'common_attribute_id');
    }
    public function documentType(): HasOne
    {
        return $this->hasOne(DocumentType::class, 'id_common_attribute', 'common_attribute_id');
    }
    public function gender(): HasOne
    {
        return $this->hasOne(Gender::class, 'id_common_attribute', 'common_attribute_id');
    }
}

Schema::create('common_attributes', function (Blueprint $table) {
            $table->unsignedTinyInteger('common_attribute_id', true);
            $table->string('name', 50);
            $table->string('nomenclature', 4);
            $table->timestamps();
        });
```

```php
class Status extends Model
{
    use HasFactory;
    protected $table = 'statuses';
    protected $primaryKey = 'status_id';
    protected $guarded = [];
    public function commonAttribute(): BelongsTo
    {
        return $this->belongsTo(CommonAttribute::class, 'id_common_attribute', 'common_attribute_id');
    }
}

Schema::create('statuses', function (Blueprint $table) {
            $table->unsignedTinyInteger('status_id', true);
            $table->unsignedTinyInteger('id_common_attribute');
            $table->foreign('id_common_attribute')->references('common_attribute_id')->on('common_attributes');
            $table->timestamps();
        });

class Gender extends Model
{
    use HasFactory;
    protected $table = 'genders';
    protected $primaryKey = 'gender_id';
    protected $guarded = [];
    public function commonAttribute(): BelongsTo
    {
        return $this->belongsTo(CommonAttribute::class, 'id_common_attribute', 'common_attribute_id');
    }
}

Schema::create('genders', function (Blueprint $table) {
            $table->unsignedTinyInteger('gender_id');
            $table->unsignedTinyInteger('id_common_attribute');
            $table->foreign('id_common_attribute')->references('common_attribute_id')->on('common_attributes');
            $table->timestamps();
        });


class DocumentType extends Model
{
    use HasFactory;
    protected $table = 'document_types';
    protected $primaryKey = 'document_type_id';
    protected $guarded = [];
    public function commonAttribute(): BelongsTo
    {
        return $this->belongsTo(CommonAttribute::class, 'id_common_attribute', 'common_attribute_id');
    }
}
Schema::create('document_types', function (Blueprint $table) {
            $table->unsignedTinyInteger('document_type_id');
            $table->unsignedTinyInteger('id_common_attribute');
            $table->foreign('id_common_attribute')->references('common_attribute_id')->on('common_attributes');
            $table->timestamps();
        });
```

Tengo un CommonAttributeSeeder, cuando cree un registro necesto crear automaticamente el registro asociado ya sea hacia el modelo Status, Gender o DocumentType
¿ como puedo logralo?