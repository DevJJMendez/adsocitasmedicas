<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ficha;
use App\Models\vs_tipo_documento;
use App\Models\vs_genero;
use App\Models\vs_cargo;
use App\Models\Objeto;
use App\Models\Vehiculo;
use App\Models\ingresoPersonal;

/**
 * Class Personal
 *
 * @property $id
 * @property $tipo_documento
 * @property $numero_documento
 * @property $nombres
 * @property $apellidos
 * @property $direccion
 * @property $fech_nacimiento
 * @property $genero
 * @property $cargo
 * @property $ficha_id
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property $correos
 * @property Ficha $ficha
 * @property $telefonos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Personal extends Model
{
    
    static $rules = [
		'tipo_documento' => 'required',
		'numero_documento' => 'required',
		'nombres' => 'required',
		'apellidos' => 'required',
		'direccion' => 'required',
		'fech_nacimiento' => 'required',
        'telefono'=>'required',
        'correo'=>'required',
		'genero' => 'required',
		'cargo' => 'required',
		'ficha_id' => 'required',
		
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_documento','numero_documento','nombres','apellidos','direccion','telefono','correo','fech_nacimiento','genero','cargo','ficha_id','estado'];
   
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ficha()
    {
        return $this->hasOne(ficha::class, 'id', 'ficha_id');
    }
   
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoDocumento()
    {
        return $this->hasOne(vs_tipo_documento::class, 'id', 'tipo_documento');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function generos()
    {
        return $this->hasOne(vs_genero::class, 'id', 'genero');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cargos()
    {
        return $this->hasOne(vs_cargo::class, 'id', 'cargo');
    }
    public function objetos()
    {
        return $this->hasMany(Objeto::class, 'personal_id', 'id');
    }
    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'personal_id', 'id');
    }

    public function ingreso()
    {
        return $this->hasMany(ingresoPersonal::class, 'personal_id', 'id');
    }
}
