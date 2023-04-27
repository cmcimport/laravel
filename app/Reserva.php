<?php

namespace App;

use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Reserva extends Authenticatable
{
    protected $table = "reserva";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'estado', 'acepta_user', 'acepta_seller', 
        'fecha_confirmacion', 'usuario_id', 'tienda_id', 
        'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];
    
    public function usuario()
    {
        return $this->belongsTo('App\User'); // Esto es cuando hace una relación foranea a otra tabla
    }
    
    public function tienda()
    {
        return $this->belongsTo('App\Tienda'); // Esto es cuando hace una relación foranea a otra tabla
    }
    
    public function cesta()
    {
        return $this->belongsTo('App\Cesta'); // Esto es cuando hace una relación foranea a otra tabla
    }
}
