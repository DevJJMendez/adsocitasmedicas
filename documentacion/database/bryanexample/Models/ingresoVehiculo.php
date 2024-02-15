<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingresoVehiculo extends Model
{
    static $rules = [
		'vehiculo_id' => 'required'
    ];
    public $timestamps = true;
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['vehiculo_id','fecha','hora_entrada','hora_salida'];

     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    
     
     public function vehiculo()
     {
         return $this->hasOne(vehiculo::class,'id','vehiculo_id');
     }
}
