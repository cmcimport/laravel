<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserType extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * 1. Comprador
     * 2. Vendedor
     * 3. Administrador
     * 
     * @var array
     */
    protected $fillable = [
        'name', 'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];

    
    public function user() // Cuando es método empieza en minúsculas
    {
        return $this->belongsTo('App\User'); // Esto es cuando hace una relación foranea a otra tabla
    }

    public function products()
    {
        return $this->hasMany('App\Product'); // Esto es cuando hace muchas relaciones
    }
}
