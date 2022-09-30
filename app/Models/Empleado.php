<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $cedula
 * @property $telefono
 * @property $sucursal_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Sucursale $sucursale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'apellidos' => 'required',
		'cedula' => 'required',
		'telefono' => 'required',
		'sucursal_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos','cedula','telefono','sucursal_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursale()
    {
        return $this->hasOne('App\Models\Sucursale', 'id', 'sucursal_id');
    }
    

}
