<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    
     protected $table = "activo";
     
     public $timestamps = false;
     
     protected $fillable = [
        'fechaInicial','fechaFinal','horainicial','horafinal','periodominimo'
    ];
    
}
