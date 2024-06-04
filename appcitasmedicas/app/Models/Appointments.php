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
    protected $primaryKey = 'appointment_id';
    protected $fillable = [
        'appointment_id',
        'id_patient',
        'id_specialty',
        'id_doctor',
        'appointment_date',
        'medical_evaluation',
        'id_status'
    ];
    public function patient(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_patient', 'id');
    }
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_doctor', 'id');
    }
    public function specialty(): BelongsTo
    {
        return $this->belongsTo(Specialty::class, 'id_specialty', 'specialty_id');
    }
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'id_status', 'status_id');
    }
}
