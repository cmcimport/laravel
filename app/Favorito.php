<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Favorito extends Authenticatable
{
    protected $table = "favorito";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'user_id', 
        'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];
    
    public function usuario()
    {
        return $this->hasMany('App\User'); // Esto es cuando hace una relación foranea a otra tabla
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    
}
