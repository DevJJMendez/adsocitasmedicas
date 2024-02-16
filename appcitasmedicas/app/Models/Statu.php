<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Statu extends Model
{
    use HasFactory;
    protected $table='status_view';
    public function thirdata():BelongsTo
    {
        return $this->belongsTo(Thirddata::class);
    }
}
