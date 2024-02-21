<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entity_Type_View extends Model
{
    use HasFactory;
    protected $table = 'entity_type_views';
    protected $guarded = [];
    public function thirddataentitytype():BelongsTo{
        return $this->belongsTo(Third_Data::class,'entity_id','entity_type_id');
    }
}
