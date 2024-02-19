<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MedicalEntity extends Model
{
    use HasFactory;
    protected $table = 'medical_entities';
    public function thirddata(): HasOne
    {
        return $this->hasOne(Thirddata::class);
    }
    public function entitytype(): HasOne
    {
        return $this->hasOne(EntityType::class);
    }
    public function patient(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
