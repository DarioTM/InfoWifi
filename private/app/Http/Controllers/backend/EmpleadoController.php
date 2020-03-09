<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;




class EmpleadoController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('wordpress.backend.empleados')->with(['empleados'=>$users]);
    }
    
    public function showEmpleados()
    {
    
    return datatables(User::where('type','empleado'))
        ->addColumn('btn','wordpress.backend.botones')
        ->rawColumns(['btn'])
        ->toJson();
    }

    public function register(Request $request)
    {    
        $validator = Validator::make($request->all(), 
            [ 
                'name' => 'required',
                'email' => 'required|email',
            ]
        );  
        
        if ($validator->fails()) {          
            
            return response()->json(['error'=>'EL nombre o el correo estan mal']);
             
        }else{
            
            $input = $request->all();  
            
            $email = User::where('email', '=', $input['email'])->first();
            if ($email !== null) {
                
                return response()->json(['fail' => 'El usuario ya existe']);
            
            }else{
                

                $input['password'] = bcrypt('12345678');
                User::create($input); 
                return response()->json(['success' => 'Creado correctamente']);
                
            }
            
        }
        
    }
    
    public function edit($id)
    {
        
        $user = User::where('id', $id)->first();
    
        return response()->json([  'id' => $user->id, 'name' => $user->name,  'email' => $user->email ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validator = Validator::make($request->all(), 
            [ 
                'name' => 'required',
                'email' => 'required|email',
            ]
        );  
        
        
        if ($validator->fails()) {          
        
            return response()->json(['error'=>'El nombre o el correo estan mal']);
        
        }else{
            
            $user = User::find($id);
            
            if($user->email === $request->email){
            
                $user->update(['name' => $request->name, 'email' => $request->email ]);
                
                return response()->json(['success' => 'Editado correctamente']);
            
            }else{
                
                $email = User::where('email', '=', $request->email)->first();
                
                if($email !== null) {
                
                    return response()->json(['fail' => 'El usuario ya existe']);
                
                }else{
                
                    $user->update(['name' => $request->name, 'email' => $request->email ]);
                
                    return response()->json(['success' => 'Editado correctamente']);
                }
                
                
            }
            
            
            
            
            
        }
    }
    
    
    public function destroy($id)
    {
        try{
            
            User::where('id', $id)->delete();

        }catch(\Exception $e){
            
        }
        
        return response()->json(['success' => 'Eliminado correctamente']);
    }
    
    
    
}
