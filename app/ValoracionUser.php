<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ValoracionUser extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario_recibe_id', 'usuario_envia_id', 'like', 'dislike', 'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];

    
    public function user() // Cuando es método empieza en minúsculas
    {
        return $this->belongsTo('App\User'); // Esto es cuando hace una relación foranea a otra tabla
    }

    public function notificaUser()
    {
        return $this->hasMany('App\NotificaUser'); // Esto es cuando hace muchas relaciones
    }
    
}
