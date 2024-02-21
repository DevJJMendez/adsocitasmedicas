<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Statu_View extends Model
{
    use HasFactory;
    protected $table='statu_views';
    protected $guarded = [];
    public function thirddatastatu():BelongsTo{
        return $this->belongsTo(Third_Data::class,'statu_id','statu_type_id');
    }
}
