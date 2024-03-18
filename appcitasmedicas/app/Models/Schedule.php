<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    use HasFactory;
    protected $table = 'schedules';
    protected $primaryKey = 'id_schedule';
    protected $guarded = [];
    public function medico(): BelongsTo
    {
        return $this->belongsTo(User::class, 'medico_id', 'id_schedule');
    }
}
