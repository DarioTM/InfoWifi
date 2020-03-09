<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Activo;
use Validator;

class ActivoController extends Controller
{
    
    public function index()
    {
       
        return view('wordpress.backend.controlAcceso');
    }
    
    public function showActivo()
    {
    
    return datatables(Activo::all())
        // ->addColumn('btn','wordpress.backend.botones')
        // ->rawColumns(['btn'])
        ->toJson();
    }
    
    
    
    public function estado(){
        
        $estado = Activo::all();
        
        return response()->json(['estado' => $estado[0]]);
        
        
        
    }
    
    




    public function update(Request $request)
    {
        
        
        $validator = Validator::make($request->all(), 
            [ 
                'fechaInicial' => 'required|date',
                'fechaFinal' => 'required|date',
                'horainicial' => 'required',
                'horafinal' => 'required',
                'periodominimo' => 'required',
            ]
        );  
        
        
        if ($validator->fails()) {          
        
            return response()->json(['error'=>'El nombre o el correo estan mal']);
        
        }else{
            
            $activo = Activo::find(1);
            
            $activo->update([
                'fechaInicial' => $request->fechaInicial,
                'fechaFinal' => $request->fechaFinal,
                'horainicial' => $request->horainicial,
                'horafinal' => $request->horafinal,
                'periodominimo' => $request->periodominimo 
            ]);
            
            return response()->json(['success' => 'Actulizado correctamente']);
                
        }
            
            
            
            
            
    }

    
    
    

    }