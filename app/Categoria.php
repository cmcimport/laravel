<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Categoria extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'meta_title', 'descripcion', 'padre', 'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];
    
    public function categoria()
    {
        return $this->belongsTo('App\Categoria'); // Esto es cuando hace una relación foranea a otra tabla
    }

    public function product()
    {
        return $this->hasMany('App\Product');
    }
    
}
