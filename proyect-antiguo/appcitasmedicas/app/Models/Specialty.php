<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Specialty extends Model
{
    use HasFactory;
    protected $table = 'specialties';
    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }
}
