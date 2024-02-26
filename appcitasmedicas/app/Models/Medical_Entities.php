<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Medical_Entities extends Model
{
    use HasFactory;
    protected $table = 'medical_entities';
    protected $primaryKey = 'medical_entity_id';
    protected $fillable = [
        'third_data_id'
    ];
    public function medicalEntitythirdData(): BelongsTo
    {
        return $this->belongsTo(Third_Data::class, 'third_data_id', 'data_id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_entity');
    }
}
