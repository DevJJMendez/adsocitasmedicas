<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    use HasFactory;
    protected $table = 'statuses';
    protected $primaryKey = 'status_id';
    protected $guarded = [];
    public function commonAttribute(): BelongsTo
    {
        return $this->belongsTo(CommonAttribute::class, 'id_common_attribute', 'common_attribute_id');
    }
    public function thirdData(): HasMany
    {
        return $this->hasMany(Third_Data::class, 'id_status', 'status_id');
    }
    public function appointment(): HasMany
    {
        return $this->hasMany(Appointments::class, 'id_status', 'status_id');
    }
    public function medicalEntities(): HasMany
    {
        return $this->hasMany(Medical_Entities::class, 'id_status', 'status_id');
    }
}
