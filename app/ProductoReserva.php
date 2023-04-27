<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ProductoReserva extends Authenticatable
{
    protected $table = "producto_reserva";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cantidad', 'precio_unidad', 'reserva_id', 'producto_id', 
        'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User'); // Esto es cuando hace una relación foranea a otra tabla
    }

    public function usuario()
    {
        return $this->hasMany('App\User');
    }
    public function tienda()
    {
        return $this->hasMany('App\Tienda');
    }   
    public function reserva()
    {
        return $this->hasMany('App\Reserva');
    }
    public function producto()
    {
        return $this->hasMany('App\Product');
    }
}
