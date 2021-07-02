<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Presolicitud
 *
 * @property $id
 * @property $Descripcion
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Presolicitud extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion'];



}
