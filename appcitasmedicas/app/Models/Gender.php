<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gender extends Model
{
    use HasFactory;
    protected $table = 'genders';
    protected $primaryKey = 'gender_id';
    protected $guarded = [];
    public function commonAttribute(): BelongsTo
    {
        return $this->belongsTo(CommonAttribute::class, 'id_common_attribute', 'common_attribute_id');
    }
    public function thirdData(): HasMany
    {
        return $this->hasMany(Third_Data::class, 'id_gender', 'gender_id');
    }
}
