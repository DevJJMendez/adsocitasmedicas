<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ingresoPersonal
 *
 * @property $id
 * @property $personal_id
 * @property $entrada
 * @property $salida
 *
 * @property Personal $personal
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class ingresoPersonal extends Model
{
    static $rules = [
		'personal_id' => 'required'
    ];
    public $timestamps = true;
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['personal_id','fecha','hora_entrada','hora_salida'];

     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    
    public function personal()
    {
        return $this->hasOne('App\Models\Personal', 'id', 'personal_id');
    }
}
