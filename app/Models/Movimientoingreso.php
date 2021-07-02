<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movimientoingreso
 *
 * @property $id
 * @property $producto_id
 * @property $tipodocumento_id
 * @property $numerodocumento
 * @property $ordencompra
 * @property $nuevo
 * @property $serie
 * @property $codigoactivo
 * @property $stock
 * @property $ubicacion_id
 * @property $estado_stock_id
 * @property $observacion
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Estadostock $estadostock
 * @property Producto $producto
 * @property Tipodocumento $tipodocumento
 * @property Ubicacion $ubicacion
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Movimientoingreso extends Model
{
    
    static $rules = [
		'producto_id' => 'required',
		'tipodocumento_id' => 'required',
		'numerodocumento' => 'required',
		'ordencompra' => 'required',
		/* 'nuevo' => 'required', */
		'serie' => 'required',
		'codigoactivo' => 'required',
		'stock' => 'required',
		'ubicacion_id' => 'required',
		'estado_stock_id' => 'required',
		'observacion' => 'required',
		/* 'user_id' => 'required', */
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['producto_id','tipodocumento_id','numerodocumento','ordencompra','nuevo','serie','codigoactivo','stock','ubicacion_id','estado_stock_id','observacion','user_id','activo_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estadostock()
    {
        return $this->hasOne('App\Models\Estadostock', 'id', 'estado_stock_id');
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
    public function tipodocumento()
    {
        return $this->hasOne('App\Models\Tipodocumento', 'id', 'tipodocumento_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ubicacion()
    {
        return $this->hasOne('App\Models\Ubicacion', 'id', 'ubicacion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    
    public function proveedor()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'proveedor_id');
    }
    
    public function activo()
    {
        return $this->hasOne('App\Models\Activo', 'id', 'activo _id');
    }

}
