<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Phone extends Model
{
    use HasFactory;
    protected $table = 'phones';
    public function thirddata(): HasOne
    {
        return $this->hasOne(Thirddata::class);
    }
    public function contactType(): HasOne
    {
        return $this->hasOne(ContactType::class);
    }
    public function priority(): HasOne
    {
        return $this->hasOne(Priority::class);
    }
}
