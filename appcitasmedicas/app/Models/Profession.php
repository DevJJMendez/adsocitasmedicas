<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profession extends Model
{
    use HasFactory;
    protected $table = 'professions';
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }
}
