<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ConfigPago extends Authenticatable
{
    protected $table = "config_pago";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'transferencia_bancaria', 'contrareembolso', 'tarjeta_de_credito', 'recogida_en_tienda', 'paypal', 'tienda_id', 
        'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];
    
    public function tienda()
    {
        return $this->belongsTo('App\Tienda'); // Esto es cuando hace una relación foranea a otra tabla
    }
    
    public function configPagoTransferencia()
    {
        return $this->hasMany('App\ConfigPagoTransferencia');
    }
    public function configPagoContrareembolso()
    {
        return $this->hasMany('App\ConfigPagoContrareembolso');
    }
    public function configPagoRecogidaEnTienda()
    {
        return $this->hasMany('App\ConfigPagoRecogidaEnTienda');
    }
    
    public function reserva()
    {
        return $this->hasMany('App\Reserva');
    }

    
}
