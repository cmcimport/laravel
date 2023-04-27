<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class MensajeReserva extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mensaje', 'fecha_hora', 'usuario_id', 'reserva_id', 
        'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];
    
    public function reserva()
    {
        return $this->belongsTo('App\Reserva'); // Esto es cuando hace una relación foranea a otra tabla
    }

    public function usuario()
    {
        return $this->belongsTo('App\User');
    }
    
    public function tienda()
    {
        return $this->belongsTo('App\Tienda');
    }
    
    public function tienda()
    {
        return $this->hasMany('App\Tienda');
    }
    
}
