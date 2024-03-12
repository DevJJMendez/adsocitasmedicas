<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Appointments extends Model
{
    use HasFactory;
    protected $table = 'appointments';
    protected $fillable = [
        'appointment_id',
        'id_patient',
        'id_specialty',
        'id_doctor',
        'appointment_date',
    ];
    public function patient(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_patient');
    }
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_doctor');
    }
    public function specialty(): HasOne
    {
        return $this->hasOne(Specialty::class, 'id_specialty');
    }
}
