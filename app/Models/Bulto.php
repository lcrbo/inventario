<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bulto
 *
 * @property $id
 * @property $codigobulto
 * @property $descripcion
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bulto extends Model
{
    
    static $rules = [
		'codigobulto' => 'required',
		'descripcion' => 'required',
		'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigobulto','descripcion','fecha'];



}
