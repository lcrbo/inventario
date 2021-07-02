<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Historialmovimiento
 *
 * @property $id
 * @property $activo_id
 * @property $tipomovimiento
 * @property $ubicacion_origen_id
 * @property $ubicacion_destino_id
 * @property $stock
 * @property $estado_stock_id
 * @property $observacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Activo $activo
 * @property Estadostock $estadostock
 * @property Ubicacion $ubicacion
 * @property Ubicacion $ubicacion
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Historialmovimiento extends Model
{
    
    static $rules = [
		'activo_id' => 'required',
		'tipomovimiento' => 'required',
		'ubicacion_origen_id' => 'required',
		'ubicacion_destino_id' => 'required',
		'stock' => 'required',
		'estado_stock_id' => 'required',
		'observacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['activo_id','tipomovimiento','ubicacion_origen_id','ubicacion_destino_id','stock','estado_stock_id','observacion'];

    
    /* query scope */
    public function scopeActivoId($query, $id)
    {
        if ($id)
            return $query->where('activo_id','=',"$id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function activo()
    {
        return $this->hasOne('App\Models\Activo', 'id', 'activo_id');
    }
    
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
    public function ubicacion()
    {
        return $this->hasOne('App\Models\Ubicacion', 'id', 'ubicacion_origen_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ubicacion2()
    {
        return $this->hasOne('App\Models\Ubicacion', 'id', 'ubicacion_destino_id');
    }
    

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
