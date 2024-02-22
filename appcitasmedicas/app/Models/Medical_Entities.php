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
    protected $fillable = [
        'third_data_id'
    ];
    public function thirddata(): HasOne
    {
        return $this->hasOne(Third_Data::class, 'third_data_id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_entity');
    }
}
