<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Status extends Model
{
    use HasFactory;
    protected $table = 'statuses';
    protected $primaryKey = 'status_id';
    protected $guarded = [];
    public function commonAttribute(): BelongsTo
    {
        return $this->belongsTo(CommonAttribute::class, 'id_common_attribute', 'common_attribute_id');
    }
}
