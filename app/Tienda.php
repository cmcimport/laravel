<?php

namespace App;

use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Tienda extends Authenticatable
{
    protected $table = "tienda";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario_id', 'nombre_comercial', 'razon_social', 'direccion', 'localidad', 'ciudad', 'mayorista', 
        'codigo_postal', 'telefono', 'aprobado', 
        'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User'); // Esto es cuando hace una relación foranea a otra tabla
    }

    public function product()
    {
        return $this->hasMany('App\Product');
    }
    
    public function reserva()
    {
        return $this->hasMany('App\Reserva');
    }
    
    public function categoria()
    {
        return $this->hasMany('App\Categoria');
    }
    
}
