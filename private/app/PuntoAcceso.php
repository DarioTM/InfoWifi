<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuntoAcceso extends Model
{
    
    protected $table = "puntoAcceso";
    
    protected $fillable = [
        'iduser', 'modelo', 'ubicacion','latitud','longitud','fechaAlta'
    ];
    
    public $timestamps = false;
    
    public function user() {
        return $this->belongsTo('App\User', 'iduser');
    }
    
     public function conexiones() {
        return $this->hasMany('App\Conexion');
    }
}
