<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Header extends Model
{
    use HasFactory;
    protected $table = 'headers';
    protected $guarded = [];
    public function detail(): BelongsTo
    {
        return $this->belongsTo(Detail::class, 'id_header', 'detail_id');
    }
}
