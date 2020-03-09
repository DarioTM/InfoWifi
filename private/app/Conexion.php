<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conexion extends Model
{
    protected $table = "conexion";
    
    protected $fillable = [
        'idpuntoAcceso', 'fecha', 'hora','mac',
    ];
    
    public $timestamps = false;
    
    public function puntoAcceso() {
        return $this->belongsTo('App\PuntoAcceso', 'idpuntoAcceso');
    }
}
