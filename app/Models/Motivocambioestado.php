<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Motivocambioestado
 *
 * @property $id
 * @property $motivo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Motivocambioestado extends Model
{
    
    static $rules = [
		'motivo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['motivo'];



}
