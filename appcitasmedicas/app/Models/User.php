<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    protected $guarded = [];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function patientAppointments():HasMany{
        return $this->hasMany(Appointments::class, 'id_patient');
    }
    public function doctorAppointments():HasMany{
        return $this->hasMany(Appointments::class, 'id_doctor');
    }
    public function medicalEntity():HasOne{
        return $this->hasOne(Medical_Entities::class, 'id_entity');
    }
    public function scopePacientes($query)
    {
        return $query->where('role', 'paciente');
    }
    public function scopeMedicos($query)
    {
        return $query->where('role', 'medico');
    }
}
