<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EntityType extends Model
{
    use HasFactory;
    protected $table = 'entity_types';
    protected $primryKey = 'entity_type_id';
    protected $guarded = [];
    public function commonAttribute(): BelongsTo
    {
        return $this->belongsTo(CommonAttribute::class, 'id_common_attribute', 'common_attribute_id');
    }
    public function medicalEntities(): HasMany
    {
        return $this->hasMany(Medical_Entities::class, 'id_common_attribute', 'common_attribute_id');
    }
}
