<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document_Type_View extends Model
{
    use HasFactory;
    protected $table='document_type_views';
    protected $guarded = [];
    public function thirddatadocument():BelongsTo
    {
        return $this->belongsTo(Third_Data::class,'statu_id','document_type_id');
    }
}
