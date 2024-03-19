<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Statu_View extends Model
{
    use HasFactory;
    protected $table = 'statu_views';
    protected $guarded = [];
    public function thirddata(): BelongsTo
    {
        return $this->belongsTo(Third_Data::class, 'statu_type_id', 'statu_id');
    }
    public function medicalEntity(): BelongsTo
    {
        return $this->belongsTo(Third_Data::class, 'statu_type_id', 'statu_id');
    }
    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointments::class, 'statu_type_id', 'statu_id');
    }
}
