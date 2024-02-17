<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContactType extends Model
{
    use HasFactory;
    protected $table = 'contacttypes_view';
    public function phone(): BelongsTo
    {
        return $this->belongsTo(Phone::class);
    }
}
