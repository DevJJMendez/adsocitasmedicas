<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vs_cargo extends Model
{
    use HasFactory;
    protected $table = 'vs_cargo';
    /**
       * @return \Illuminate\Database\Eloquent\Relations\HasOne
       */
      
      public function personal()
      {
          return $this->hasOne(personal::class, 'id', 'cargo');
      }
}
