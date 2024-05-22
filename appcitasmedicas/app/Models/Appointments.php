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
        'statu_type_id'
    ];
}
