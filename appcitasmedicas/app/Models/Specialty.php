<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Specialty extends Model
{
    use HasFactory;
    protected $table = 'specialties';
    protected $primaryKey = 'specialty_id';
    protected $guarded = [];
    public function user(): HasOne
    {
        return $this->hasOne(Third_Data::class, 'id_medical_entity', 'medical_entity_id');
    }
    public function appointment(): HasOne
    {
        return $this->hasOne(Appointments::class, 'id_specialty', 'specialty_id');
    }
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Third_Data::class, 'id_specialty', 'specialty_id');
    }
    public function thirdData(): HasOne
    {
        return $this->hasOne(Third_Data::class, 'id_specialty', 'specialty_id');
    }
}
