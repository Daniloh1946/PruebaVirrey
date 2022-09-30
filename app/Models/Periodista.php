<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Periodista
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $telefono
 * @property $especialidad
 * @property $created_at
 * @property $updated_at
 *
 * @property ArticulosPeriodista[] $articulosPeriodistas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Periodista extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'telefono' => 'required',
		'especialidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','telefono','especialidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articulosPeriodistas()
    {
        return $this->hasMany('App\Models\ArticulosPeriodista', 'periodista_id', 'id');
    }
    

}
