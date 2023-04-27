<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ConfigProduct extends Authenticatable
{
    protected $table = "config_product";
    protected $primaryKey = 'producto_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'requiere_envio', 'recogida',  'mostrar_precio', 'precio_negociable', 'venta_al_por_mayor', 'requiere_instalacion',
        'requiere_cita_previa', 'precio', 'producto_id', 'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];
  
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
/*  
    public function product()
    {
        return $this->hasMany('App\Product');
    }
 * 
 */   
}
