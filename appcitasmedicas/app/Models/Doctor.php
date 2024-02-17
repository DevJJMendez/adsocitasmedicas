<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctors';
    public function thirddata(): HasOne
    {
        return $this->hasOne(Thirddata::class);
    }
    public function profession(): HasOne
    {
        return $this->hasOne(Profession::class);
    }
    public function appointment(): HasOne
    {
        return $this->hasOne(Appointment::class);
    }

}
