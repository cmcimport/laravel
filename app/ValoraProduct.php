<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ValoraReserva extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'like', 'dislike', 'usuario_id', 'reserva_id', 'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];

    
    public function user() // Cuando es método empieza en minúsculas
    {
        return $this->belongsTo('App\User'); // Esto es cuando hace una relación foranea a otra tabla
    }

    public function reserva()
    {
        return $this->hasMany('App\Reserva'); // Esto es cuando hace muchas relaciones
    }

}
