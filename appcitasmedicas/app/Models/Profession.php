<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profession extends Model
{
    use HasFactory;
    protected $table = 'professions';
    protected $guarded = [];
    public function thirddata():BelongsTo
    {
        return $this->belongsTo(Third_Data::class, 'profession_id');
    }
}
