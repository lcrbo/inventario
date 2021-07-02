<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Indicadorkpi
 *
 * @property $id
 * @property $indicador
 * @property $imagen
 * @property $nombre
 * @property $descripcion
 * @property $formato
 * @property $umbral1
 * @property $umbral2
 * @property $umbral3
 * @property $umbral4
 * @property $activo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Indicadorkpi extends Model
{
    
    static $rules = [
		'indicador' => 'required',
		'imagen' => 'required',
		'nombre' => 'required',
		'descripcion' => 'required',
		'formato' => 'required',
		'umbral1' => 'required',
		'umbral2' => 'required',
		'umbral3' => 'required',
		'umbral4' => 'required',
		'activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['indicador','imagen','nombre','descripcion','formato','umbral1','umbral2','umbral3','umbral4','activo'];



}
