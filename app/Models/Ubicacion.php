<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ubicacion
 *
 * @property $id
 * @property $descripcion
 * @property $direccion
 * @property $comuna
 * @property $ciudad
 * @property $Region
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ubicacion extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
	  'direccion' => 'required',
		'comuna' => 'required',
		'ciudad' => 'required',
		'region' => 'required', 
    ];

    protected $perPage = 5;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','direccion','comuna','ciudad','region'];



}
