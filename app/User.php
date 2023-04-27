<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alias', 'email', 'email_verified_at', 'password', 'remember_token', 
        'image', 'ciudad', 'pais', 'sobre_mi', 'fecha_registro', 
        'ultimo_acceso', 'type_id', 'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];

    
    public function userType() // Cuando es método empieza en minúsculas
    {
        return $this->belongsTo('App\UserType'); // Esto es cuando hace una relación foranea a otra tabla
    }

    public function products()
    {
        return $this->hasMany('App\Product'); // Esto es cuando hace muchas relaciones
    }
    
    public function tienda()
    {
        return $this->belongsTo('App\Tienda');
    }
    
    public function favorito()
    {
        return $this->hasMany('App\Favoritos'); // Esto es cuando hace muchas relaciones
    }
    
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
