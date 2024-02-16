<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DocumentType extends Model
{
    use HasFactory;
    protected $table='documenttypes_view';
    public function thirdata():BelongsTo
    {
        return $this->belongsTo(Thirddata::class);
    }
}