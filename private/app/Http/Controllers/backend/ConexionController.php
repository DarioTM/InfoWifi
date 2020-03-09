<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Conexion;
use App\Activo;
use DateTime;
use Validator;


class ConexionController extends Controller
{
   public function store(Request $request){
       

    
    $activo = Activo::all();
    
    $activo = $activo[0];
    
    
    
    
    $fecha_ultima_conexion = Conexion::select('fecha')->where('mac', $request->mac)->get()->last();
    
    $hora_ultima_conexion = Conexion::select('hora')->where('mac', $request->mac)->get()->last();
    
    
    
    if( isset($fecha_ultima_conexion) && isset($hora_ultima_conexion) && $fecha_ultima_conexion->fecha === $request->fecha){

        
        if(
            $request->fecha >= $activo->fechaInicial && 
            $request->fecha <= $activo->fechaFinal && 
            $request->hora >= $activo->horainicial && 
            $request->hora <= $activo->horafinal 
            
        ){
            
          
                
                
                $hora_ultima_conexion = date_create($hora_ultima_conexion->hora);
                
                $hora_entrante = date_create($request->hora);
                
                $diferencia = date_diff($hora_ultima_conexion, $hora_entrante); 
                
                
                $diferenciaHora = date($diferencia->h . ':' . $diferencia->i . ':' . $diferencia->s);
                
                $hora1 = strtotime( $activo->periodominimo);
                $hora2 = strtotime( $diferenciaHora);
            

                    if(  $hora1 < $hora2 ){
        
                        Conexion::create([
                         'idpuntoAcceso' => $request->idpuntoacceso,
                         'fecha' => $request->fecha,
                         'hora'   => $request->hora,
                         'mac' => $request->mac,
                        ]); 
                        
                         return response()->json([ 'success' => 'Creado, has superado el periodo minimo' ]);

                
                    }else{
                        
                        return response()->json([ 'error' => 'Todavia no ha pasado el periodo minimo' ]);
                    }
                    

                
        
            
            
        }else{
            return response()->json([ 'error' => 'Conexion fuera de rango' ]);
        }
        
        
    
    }else{
        
        
            
      Conexion::create([
         'idpuntoAcceso' => $request->idpuntoacceso,
         'fecha' => $request->fecha,
         'hora'   => $request->hora,
         'mac' => $request->mac,
      ]); 
        return response()->json([ 'success' => 'Creado, no habia ninguna conexion con esta mac en esta misma fecha' ]);
        
    }

      
   }
   
   public function index(Request $request){
      
      $conexiones = Conexion::all();
      return view('wordpress.backend.conexiones')->with(['conexiones'=>$conexiones]);
      
   }
   
    
    public function showConexiones()
    {
    
    return datatables(Conexion::all())
        ->addColumn('btn','wordpress.backend.botonesConexion')
        ->rawColumns(['btn'])
        ->toJson();
    }
   
      public function indexAPI(Request $request){
      
      $conexiones = Conexion::all();
      return response()->json([ 'conexiones' => $conexiones]);

      
   }
   
   
    public function destroy($id)
    {
        try{
            
            Conexion::where('id', $id)->delete();

        }catch(\Exception $e){
            
        }
        
        return response()->json(['success' => 'Eliminado correctamente']);
    }
    
    
    
    public function showConexionesEstadisticas(Request $request){
      
      $conexiones = Conexion::all();
      $meses = array();
      
      foreach($conexiones as $conexion){
          
          array_push($meses,explode('-',$conexion->fecha)[1]);
 
      }
      
      
      //despues de conseguir solo los meses de todas la fechas disponibles con la siguiente funcion calculamos el numero de repeticiones de cada mes por la tanto vemos la conexiones que hay en ese mes
      
      $valores = array_count_values($meses);
      
      
      return response()->json(['valores' => $valores]);//Aqui devolvemos un json que contines la conexiones por mes
      

      
   }
    
    
    
   
}
