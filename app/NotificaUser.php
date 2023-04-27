<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class NotificaUser extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario_envia_id', 'usuario_recibe_id', 'notificado_por_email', 
        'fecha_hora', 'notificacion_vista', 'enlace', 'tipo_notificacion',  
        'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];
    
    public function userReserva()
    {
        return $this->belongsTo('App\User'); // Esto es cuando hace una relación foranea a otra tabla
    }

    public function usuario()
    {
        return $this->hasMany('App\User');
    }
    
    public function valoracionUser()
    {
        return $this->hasMany('App\ValoracionUser');
    }
    
}
