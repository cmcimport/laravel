<?php

namespace App;

use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Seguido extends Authenticatable
{
    protected $table = "seguido";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_sigue', 'user_seguido', 
        'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User'); // Esto es cuando hace una relación foranea a otra tabla
    }
    
}
