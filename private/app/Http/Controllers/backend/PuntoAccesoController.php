<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PuntoAcceso;
use App\Conexion;
use Auth;
use App\User;

class PuntoAccesoController extends Controller
{
    public function index()
    {
        //Vale sigue porque no tengo cojones
            //dd(PuntoAcceso::all());exit;
            //yo arreglando el datatable
        $user = Auth::id();
        return view('wordpress.backend.puntoacceso')->with(['user' => $user]);
    }
    
    
    public function showPuntos(){
    
    return datatables(PuntoAcceso::all())
        ->addColumn('btn','wordpress.backend.botones')
        ->rawColumns(['btn'])
        ->toJson();
    }
    
    public function register(Request $request){
        
        $datos = $request->all();
        
        PuntoAcceso::create($datos);
        
        return response()->json(['success' => 'Creado correctamente']);
    }
    
    public function edit($id)
    {
        $punto = PuntoAcceso::where('id',$id)->first(); 
        
        $empleados = User::all();
        
        return response()->json(['punto' => $punto,'empleados' => $empleados]);
    }
    
    public function update(Request $request, $id)
    {

            
            PuntoAcceso::where('id',$id)->update(['iduser' => $request->idempleado, 
                                                'modelo' => $request->modelo, 
                                                'ubicacion' => $request->ubicacion, 
                                                'latitud' => $request->latitud, 
                                                'longitud' => $request->longitud, 
                                                'fechaAlta' => $request->fechaAlta]);

        
        return response()->json(['success' => 'Editado correctamente']);
        
    }
    
    
    
    public function showEstadisticas(Request $request){
      
      $puntos = PuntoAcceso::all();
      $conexiones = Conexion::all();
      $valores = array();
      
      foreach($conexiones as $conexion){
          
          array_push($valores,$conexion->puntoAcceso->id);
      }
      
      $valores = array_count_values($valores);
      
      return response()->json(['valores' => $valores, 'puntos' => $puntos]);
      
   }
   
   public function borrar($id)
   {
       try{
            
            PuntoAcceso::where('id', $id)->delete();

        }catch(\Exception $e){
            dd($e);
        }
        
        return response()->json(['success' => 'Eliminado correctamente']);
   }
   
   
    public function showModelos(Request $request){
      
      $puntos = PuntoAcceso::all();
      $conexiones = Conexion::all();
      $valores = array();
      
      foreach($conexiones as $conexion){
          
          array_push($valores,$conexion->puntoAcceso->modelo);
      }
      
      $valores = array_count_values($valores);
      
      return response()->json(['valores' => $valores, 'puntos' => $puntos]);
      
   }
    
    
}
