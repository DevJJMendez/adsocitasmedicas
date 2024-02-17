<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Mail extends Model
{
    use HasFactory;
    protected $table = 'mails';
    public function thirdata(): HasOne
    {
        return $this->hasOne(Thirddata::class);
    }
    public function mailtype(): HasOne
    {
        return $this->hasOne(MailType::class);
    }
    public function priority(): HasOne
    {
        return $this->hasOne(Priority::class);
    }
}
