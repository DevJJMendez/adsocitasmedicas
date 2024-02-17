<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MailType extends Model
{
    use HasFactory;
    protected $table = 'mailtypes_view';
    public function mail(): BelongsTo
    {
        return $this->belongsTo(Mail::class);
    }
}
