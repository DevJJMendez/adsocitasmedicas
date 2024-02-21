<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
    protected $table='headers';
    protected $guarded = [];
    public function details(){
        return $this->hasMany(Detail::class,'id_header','detail_id');
    }
}
