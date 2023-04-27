<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Publicacion extends Authenticatable
{
    protected $table = "publicacion";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'contenido', 'imagen', 'usuario_id', 
        'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];
    
    public function usuario()
    {
        return $this->belongsTo('App\User'); // Esto es cuando hace una relación foranea a otra tabla
    }
/*
    public function usuario()
    {
        return $this->hasMany('App\User');
    } */
    
}
