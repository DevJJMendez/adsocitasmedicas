<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Specialty extends Model
{
    use HasFactory;
    protected $table = 'specialties';
    protected $primaryKey = 'specialty_id';
    protected $guarded = [];
    public function thirdData(): HasMany
    {
        return $this->hasMany(Third_Data::class, 'id_specialty', 'specialty_id');
    }
    public function appointment(): HasMany
    {
        return $this->hasMany(Appointments::class, 'id_specialty', 'specialty_id');
    }
}
