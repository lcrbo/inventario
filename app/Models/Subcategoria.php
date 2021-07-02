<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subcategoria
 *
 * @property $id
 * @property $descripcion
 * @property $categoria_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Subcategoria extends Model
{
    
    static $rules = [
		'descripcion' => 'required|max:50|unique:subcategorias,descripcion',
		'categoria_id' => 'required',
    ];

    protected $perPage = 5;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','categoria_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'subcategoria_id', 'id');
    }
    

}
