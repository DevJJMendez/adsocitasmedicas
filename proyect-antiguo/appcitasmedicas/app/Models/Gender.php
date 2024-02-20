<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gender extends Model
{
    use HasFactory;
    protected $table='genders_view';
    public function thirddata():BelongsTo
    {
        return $this->belongsTo(Thirddata::class);
    }
}
