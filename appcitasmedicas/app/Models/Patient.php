<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patients';
    public function thirddata(): HasOne
    {
        return $this->hasOne(Thirddata::class);
    }
    public function medicalentity(): HasOne
    {
        return $this->hasOne(MedicalEntity::class);
    }
    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }
}
