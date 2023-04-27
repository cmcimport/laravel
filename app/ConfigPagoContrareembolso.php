<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ConfigPagoContrareembolso extends Authenticatable
{
    protected $table = "config_pago_contrareembolso";
    // protected $primaryKey = 'config_pago_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'instrucciones', 'estado', 'config_pago_id', 'created_at', 'updated_at' 
        // todas las columnas de la BBDD...
    ];
    
    public function configPago()
    {
        return $this->belongsTo('App\ConfigPago'); // Esto es cuando hace una relación foranea a otra tabla
    }

    
}
