<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ficha
 *
 * @property $id
 * @property $numero
 * @property $nombres
 * @property $descripcion
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Personal[] $personals
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ficha extends Model
{
    
    static $rules = [
		'numero' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','nombres','descripcion','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personals()
    {
        return $this->hasMany('App\Models\Personal', 'ficha_id', 'id');
    }
    

}
