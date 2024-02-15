<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ingresoObjeto;

/**
 * Class Objeto
 *
 * @property $id
 * @property $personal_id
 * @property $serial
 * @property $tipo_objeto
 * @property $marca
 * @property $observacion
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Personal $personal
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Objeto extends Model
{
    
    static $rules = [
		'personal_id' => 'required',
		'tipo_objeto' => 'required',
		'marca' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['personal_id','serial','tipo_objeto','marca','observacion','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function personal()
    {
        return $this->hasOne('App\Models\Personal', 'id', 'personal_id');
    }
    
    public function ingreso()
    {
        return $this->hasMany(ingresoObjeto::class, 'objeto_id', 'id');
    }

}
