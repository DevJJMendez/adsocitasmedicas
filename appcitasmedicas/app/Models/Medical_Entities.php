<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical_Entities extends Model
{
    use HasFactory;
    protected $table = 'medical_entities';
    protected $guarded = [];
}
