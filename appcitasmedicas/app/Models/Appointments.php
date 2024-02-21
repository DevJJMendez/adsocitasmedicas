<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Appointments extends Model
{
    use HasFactory;
    protected $table = 'appointments';
    protected $guarded = [];

    public function specialty(): HasOne
    {
        return $this->hasOne(Specialty::class);
    }
    public function doctor(): HasOne
    {
        return $this->hasOne(User::class);
    }
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
