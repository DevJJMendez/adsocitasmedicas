<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
    public function entityType(): BelongsTo
    {
        return $this->belongsTo(EntityType::class, 'id_entity_type', 'entity_type_id');
    }
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'id_status', 'status_id');
    }
}
