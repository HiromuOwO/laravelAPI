<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class usuarioController extends Controller
{
    public function index()
    {
       $usuarios = Usuario::all();
        //if ($nudis->isEmpty()){
          //  $data = [
            //    'message' => 'No se encontraron estudiantes',
            //    'status'=> 404
            //];
            //return response()->json($data,404);
        //}
        //return response()->json($nudis,200);

        $data = [
            'usuario' => $usuarios,
            'status' => 200
        ];
        return response()->json($data,200);
    }

    public function store(Request $request){
        $validator = validator::make($request->all(),[
            'nombre' => 'required',
            'email'=> 'required',
            'contraseña' => 'required',
            'edad' => 'required',
            'imagen' => 'required'
            
        ]);

        if($validator->fails()){
            $data = [
                'message' => 'Errore en la validacion de los datos',
                'errors' => $validator->errors(),
                'status' => 400

            ];
            return response()->json($data,400);
        }

        $usuarios = Usuario::create([
            'nombre' => $request->nombre,  
            'email' => $request->email,
            'contraseña' => $request->contraseña,
            'edad' => $request->edad,
            'imagen' => $request->imagen
        ]);

        if (!$usuarios){
            $data = [
                'mesage' => 'Error al crear el estudiate',
                'status' => 500
            ];

            return response()->json($data,500);

        }


        $data = [
            'nudi' => $usuarios,
            'status' => 201
        ];
        
        return response()->json($data, 201);
    }

    public function show($id)
    {
        $usuarios = Usuario::find($id);
        if (!$usuarios){
            $data = [
                'message' => 'Estudiante no encontreado',
                'status' => 404
            ];

            return response()->json($data, 404);
        }

        $data =[
            'nudi' => $usuarios,
            'status' => 200
        ];
        
        return response()->json($data,200);


    }

    public function destroy($id){
        $usuarios = Usuario::find($id);
        if(!$usuarios){
            $data = [
                'message' => 'Estudiante no encontrado',
                'status' => 404
            ];

            return response()->json($data, 404);

        }
        
        $usuarios->delete();
        $data=[
            'message' => 'Estudiante eliminado',
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function update(Request $request, $id)
    {
        $usuarios = Usuario::find($id);
        if (!$usuarios){
            $data = [
                'messege' => 'Estudiante no encontrado',
                'status' => 404
            ];

            return response()->json($data, 400);
        }

        $validator = validator::make($request->all(),[
            'nombre' => 'required',
            'email' => 'required',
            'contraseña' => 'required',
            'edad' => 'required',
            'imagen' => 'required'
           
        ]);

        if ($validator->fails()){
            $data =[
                'message' => 'Error en la validacion de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];

            return response()->json($data, 400);

        }

        $usuarios->nombre = $request->nombre;
        $usuarios->email = $request->email;
        $usuarios->contraseña = $request->contraseña;
        $usuarios->edad = $request->edad;
        $usuarios->imagen = $request->imagen;

        $usuarios->save();

        $data = [
            'message' => 'Especie actulizada',
            'nudibrancquio' => $usuarios,
            'status' => 200
        ];

        return response()->json($data,200);

    }

    
}
