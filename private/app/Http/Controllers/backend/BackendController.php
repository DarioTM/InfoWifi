<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Conexion;
use App\PuntoAcceso;

class BackendController extends Controller
{
    public function index(){
        
        return view('wordpress.backend.index');
    }
    
    public function datos(){
        
        $usuarios = User::all()->count();
        $conexiones = Conexion::all()->count();
        $puntos = PuntoAcceso::all()->count();
        
        
        return response()->json(['usuarios' => $usuarios, 'conexiones' => $conexiones, 'puntos' => $puntos]);
       
        
    }
    
    public function marcas()
    {
        $puntos = PuntoAcceso::all();
        return response()->json(['puntos' => $puntos]);
    }
}
