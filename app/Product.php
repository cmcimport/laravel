<?php

namespace App;

use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Product extends Authenticatable
{
    protected $table = "product";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'descripcion', 'precio', 'aprobado', 'tienda_id', 
        'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];
    
    public function user()
    {
        return $this->belongsToMany('App\User'); // Esto es cuando hace una relación foranea a otra tabla
    }
    
    public function tienda()
    {
        return $this->belongsTo('App\Tienda'); // Esto es cuando hace una relación foranea a otra tabla
    }
    
    public function imagen()
    {
        return $this->hasMany('App\ImagenProduct'); // Esto es cuando hace una relación foranea a otra tabla
    }

    public function categoria()
    {
        return $this->hasMany('App\Categoria');
    }
    
    public function config_product()
    {
        return $this->belongsTo('App\ConfigProduct', 'producto_id');
    }
    
    
    
}
