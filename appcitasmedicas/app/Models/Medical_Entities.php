<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Medical_Entities extends Model
{
    use HasFactory;
    protected $table = 'medical_entities';
    protected $primaryKey = 'medical_entity_id';
    protected $fillable = [
        'third_data_id'
    ];
    public function medicalEntitythirdData(): BelongsTo
    {
        return $this->belongsTo(Third_Data::class, 'third_data_id', 'data_id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_entity');
    }

    // Relacion con vistas:
    public function medicalentitytype(): HasOne
    {
        return $this->hasOne(Entity_Type_View::class, 'detail_id', 'entity_type_id');
    }
    public function statutype(): HasOne
    {
        return $this->hasOne(Statu_View::class, 'detail_id', 'statu_type_id');
    }
}
