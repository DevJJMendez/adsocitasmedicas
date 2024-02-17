<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Priority extends Model
{
    use HasFactory;
    protected $table = 'priorities_view';
    public function phone(): BelongsTo
    {
        return $this->belongsTo(Phone::class);
    }
    public function mail(): BelongsTo
    {
        return $this->belongsTo(Mail::class);
    }
}
