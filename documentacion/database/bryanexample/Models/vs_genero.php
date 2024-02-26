<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vs_genero extends Model
{
    use HasFactory;
    protected $table = 'vs_genero';
  
      
      public function personal()
      {
          return $this->hasOne(Personal::class, 'id', 'genero');
      }
}
