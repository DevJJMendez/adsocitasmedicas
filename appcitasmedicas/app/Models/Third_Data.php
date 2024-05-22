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
    // protected $fillable = [
    //     'third_data_id',
    //     'document_type_id',
    //     'identification_number',
    //     'first_name',
    //     'last_name',
    //     'number_phone',
    //     'birth_date',
    //     'id_gender',
    //     'address',
    //     'id_medical_entity',
    //     'id_status',
    //     'id_specialty'
    // ];
    protected $guarded = [];
    public function documentType(): BelongsTo
    {
        return $this->belongsTo(DocumentType::class, 'id_document_type', 'document_type_id');
    }
    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class, 'id_gender', 'gender_id');
    }
    public function medicalEntity(): BelongsTo
    {
        return $this->belongsTo(Medical_Entities::class, 'id_medical_entity', 'medical_entity_id');
    }
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'id_status', 'status_id');
    }
    public function specialty(): BelongsTo
    {
        return $this->belongsTo(Specialty::class, 'id_specialty', 'specialty_id');
    }
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id_third_data', 'id');
    }
}
