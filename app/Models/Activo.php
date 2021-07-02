<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Activo
 *
 * @property $id
 * @property $serie
 * @property $codigoactivo
 * @property $obsevacion
 * @property $stock
 * @property $estado_id
 * @property $producto_id
 * @property $ubicacion_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Estadostock $estadostock
 * @property Producto $producto
 * @property Ubicacion $ubicacion
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Activo extends Model
{
    
    static $rules = [
		'serie' => 'required',
		'codigoactivo' => 'required',
		'obsevacion' => 'required',
		'stock' => 'required',
		'estado_id' => 'required',
		'producto_id' => 'required',
		'ubicacion_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['serie','codigoactivo','obsevacion','stock','estado_id','producto_id','ubicacion_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estadostock()
    {
        return $this->hasOne('App\Models\Estadostock', 'id', 'estado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ubicacion()
    {
        return $this->hasOne('App\Models\Ubicacion', 'id', 'ubicacion_id');
    }
    

}
