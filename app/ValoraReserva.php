<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ValoraProduct extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'like', 'dislike', 'product_id', 'usuario_id', 'created_at', 'updated_at' 
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
