<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Thirddata extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'thirddatas';
    public function document(): HasOne
    {
        return $this->hasOne(DocumentType::class);
    }
    public function statu(): HasOne
    {
        return $this->hasOne(Statu::class);
    }
    public function gender(): HasOne
    {
        return $this->hasOne(Gender::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'third_data_id','data_id');
    }
    
    
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function medicalentity(): BelongsTo
    {
        return $this->belongsTo(MedicalEntity::class);
    }
    public function patient(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
