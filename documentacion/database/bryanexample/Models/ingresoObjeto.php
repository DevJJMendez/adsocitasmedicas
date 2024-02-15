<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingresoObjeto extends Model
{
    static $rules = [
		'objeto_id' => 'required'
    ];
    public $timestamps = true;
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['objeto_id','fecha','hora_entrada','hora_salida'];

     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    
     
     public function objeto()
     {
         return $this->hasOne(Objeto::class,'id','objeto_id');
     }
}
