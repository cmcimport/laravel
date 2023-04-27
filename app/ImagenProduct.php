<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ImagenProduct extends Authenticatable
{
    protected $table = "imagen_product";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image_url', 'producto_id', 
        'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];
    
    public function product()
    {
        return $this->belongsTo('App\Product'); // Esto es cuando hace una relación foranea a otra tabla
    }

}
