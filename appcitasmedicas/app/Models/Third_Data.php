<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Third_Data extends Model
{
    use HasFactory;
    protected $table = 'third_data';
    protected $primaryKey = 'data_id';
    protected $fillable = [
        'data_id',
        'document_type_id',
        'identification_number',
        'first_name',
        'second_name',
        'sur_name',
        'second_sur_name',
        'number_phone',
        'birth_date',
        'gender_type_id',
        'address',
        'entity_type_id',
        'statu_type_id' => 1,
    ];
    public function userThirdData(): HasOne
    {
        return $this->hasOne(User::class, 'third_data_id', 'data_id');
    }
    public function medicalEntity(): BelongsTo
    {
        return $this->belongsTo(Medical_Entities::class, 'id_medical_entity', 'data_id');
    }
    // Relaciones con las vistas
    public function documentType(): HasOne
    {
        return $this->hasOne(Document_Type_View::class, 'detail_id', 'document_type_id');
    }
    public function gender(): HasOne
    {
        return $this->hasOne(Gender_View::class, 'detail_id', 'gender_type_id');
    }
    public function statutype(): HasOne
    {
        return $this->hasOne(Statu_View::class, 'detail_id', 'statu_type_id');
    }
}
