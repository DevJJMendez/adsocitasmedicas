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

   
    protected $fillable = ['tipo_documento','numero_documento','nombres','apellidos','direccion','telefono','correo','fech_nacimiento','genero','cargo','ficha_id','estado'];
   
    
    public function ficha()
    {
        return $this->hasOne(ficha::class, 'id', 'ficha_id');
    }
   
   
    public function tipoDocumento()
    {
        return $this->hasOne(vs_tipo_documento::class, 'id', 'tipo_documento');
    }
   
    public function generos()
    {
        return $this->hasOne(vs_genero::class, 'id', 'genero');
    }
    
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
