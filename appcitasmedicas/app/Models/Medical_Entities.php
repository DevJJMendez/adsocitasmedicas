<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Medical_Entities extends Model
{
    use HasFactory;
    protected $table = 'medical_entities';
    protected $primaryKey = 'medical_entity_id';
    // protected $fillable = [
    //     'nit',
    //     'number_phone',
    //     'email',
    //     'entity_type_id',
    //     'business_name',
    //     'address',
    //     'statu_type_id'
    // ];
    protected $guarded = [];
}
