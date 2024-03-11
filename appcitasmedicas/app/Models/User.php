<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{

    use HasRoles;
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function thirdDataUser(): BelongsTo
    {
        return $this->belongsTo(Third_Data::class, 'third_data_id', 'data_id');
    }
    public function patientAppointments(): HasMany
    {
        return $this->hasMany(Appointments::class, 'id_patient');
    }
    public function doctorAppointments(): HasMany
    {
        return $this->hasMany(Appointments::class, 'id_doctor');
    }

    public function UserThirdData()
    {
        return $this->hasOne(Third_Data::class);
    }

    public function tercero()
    {
        return $this->hasOne(Third_Data::class, 'data_id');
    }
}
