<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'third_data_id',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    // public function scopePacientes($query)
    // {
    //     return $query->where('role', 'paciente');
    // }
    // public function scopeMedicos($query)
    // {
    //     return $query->where('role', 'medico');
    // }
    public function thirddataDoctor(): HasOne
    {
        return $this->hasOne(Thirddata::class,'third_data_id','data_id');
    }
    public function thirddataUser(): HasOne
    {
        return $this->hasOne(Thirddata::class,'third_data_id','data_id');
    }
    public function profession(): HasOne
    {
        return $this->hasOne(Profession::class);
    }
    public function appointmentDoctor(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }
    public function appointmentPatient(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }
    public function medicalentity(): HasOne
    {
        return $this->hasOne(MedicalEntity::class);
    }
}
