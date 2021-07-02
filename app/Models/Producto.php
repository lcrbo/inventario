<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $marca
 * @property $modelo
 * @property $subcategoria_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Subcategoria $subcategoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre' => 'required|max:50|unique:productos,nombre',
		'marca' => 'required|max:50',
		'modelo' => 'required|max:50',
		'subcategoria_id' => 'required',
    ];

    protected $perPage = 5;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','marca','modelo','subcategoria_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subcategoria()
    {
        return $this->hasOne('App\Models\Subcategoria', 'id', 'subcategoria_id');
    }
    

}
