<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vs_vehiculo extends Model
{
    use HasFactory;
    protected $table = 'vs_vehiculo';
    /**
       * @return \Illuminate\Database\Eloquent\Relations\HasOne
       */
      public function tvehiculo()
      {
          return $this->hasOne(vs_vehiculo::class, 'id', 'vs_vehiculo');
      }
}
