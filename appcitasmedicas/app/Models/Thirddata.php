<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Thirddata extends Model
{
    use HasFactory;
    protected $table='thirddatas';
    public function document() : HasOne
    {
        return $this->hasOne(DocumentType::class);
    }
    public function statu() : HasOne
    {
        return $this->hasOne(Statu::class);
    }
    public function gender() : HasOne
    {
        return $this->hasOne(Gender::class);
    }

}
