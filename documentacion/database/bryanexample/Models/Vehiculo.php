<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $personal_id
 * @property $placas
 * @property $vs_vehiculo
 * @property $marca
 * @property $observacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Personal $personal
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{
    
    static $rules = [
		'personal_id' => 'required',
		'placas' => 'required',
		'vs_vehiculo' => 'required',
		'marca' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['personal_id','placas','vs_vehiculo','estado','marca','observacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function personal()
    {
        return $this->hasOne('App\Models\Personal', 'id', 'personal_id');
    }
    
    public function tvehiculo()
    {
        return $this->hasOne(vs_vehiculo::class, 'id', 'vs_vehiculo');
    }

    public function ingreso()
    {
        return $this->hasMany(ingresoVehiculo::class, 'vehiculo_id', 'id');
    }

}
