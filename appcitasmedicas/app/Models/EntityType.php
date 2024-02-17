<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EntityType extends Model
{
    use HasFactory;
    protected $table = 'entitytypes_view';
    public function medicalentity(): BelongsTo
    {
        return $this->belongsTo(MedicalEntity::class);
    }
}
