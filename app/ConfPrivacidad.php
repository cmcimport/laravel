<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ConfPrivacidad extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'notificar_mensaje_like_productos', 'notificar_mensaje_like_perfil', 
        'notificar_mensaje_pedidos', 'notificar_mensaje_muro', 'usuario_id', 'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];
    
    public function usuario()
    {
        return $this->belongsTo('App\User'); // Esto es cuando hace una relación foranea a otra tabla
    }
    
}
