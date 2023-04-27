<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Cesta extends Authenticatable
{
    protected $table = "cesta";
    protected $primaryKey = 'usuario_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario_id', 'producto_id', 'cantidad', 'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User'); // Esto es cuando hace una relación foranea a otra tabla
    }

    public function products()
    {
        return $this->hasMany('App\Product');

    }
    
    public function tienda()
    {
        return $this->belongsTo('App\Tienda');
    }
    
}
