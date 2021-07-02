<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Despacho
 *
 * @property $id
 * @property $descripcion
 * @property $fechadespacho
 * @property $comentario
 * @property $destino
 * @property $motivodespacho
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Despacho extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
		'fechadespacho' => 'required',
		'comentario' => 'required',
		'destino' => 'required',
		'motivodespacho' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','fechadespacho','comentario','destino','motivodespacho'];



}
