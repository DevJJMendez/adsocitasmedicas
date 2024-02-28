<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gender_View extends Model
{
    use HasFactory;
    protected $table='gender_views';
    protected $guarded = [];
    public function thirddatagender():BelongsTo{
        return $this->belongsTo(Third_Data::class,'gender_id','gender_type_id');
    }

    
}
