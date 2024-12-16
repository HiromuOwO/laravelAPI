<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nudi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class nudiController extends Controller
{
    public function index()
    {
       $nudis = Nudi::all();
        //if ($nudis->isEmpty()){
          //  $data = [
            //    'message' => 'No se encontraron estudiantes',
            //    'status'=> 404
            //];
            //return response()->json($data,404);
        //}
        //return response()->json($nudis,200);

        $data = [
            'nudi' => $nudis,
            'status' => 200
        ];
        return response()->json($data,200);
    }

    public function store(Request $request){
        $validator = validator::make($request->all(),[
            'nombre' => 'required',
            'tamaño'=> 'required',
            'sociabilidad' => 'required',
            'dieta' => 'required'
        ]);

        if($validator->fails()){
            $data = [
                'message' => 'Errore en la validacion de los datos',
                'errors' => $validator->errors(),
                'status' => 400

            ];
            return response()->json($data,400);
        }

        $nudis = Nudi::create([
            'nombre' => $request->nombre,  
            'tamaño' => $request->tamaño,
            'sociabilidad' => $request->sociabilidad,
            'dieta' => $request->dieta
        ]);

        if (!$nudis){
            $data = [
                'mesage' => 'Error al crear el estudiate',
                'status' => 500
            ];

            return response()->json($data,500);

        }


        $data = [
            'nudi' => $nudis,
            'status' => 201
        ];
        
        return response()->json($data, 201);
    }

    public function show($id)
    {
        $nudis = Nudi::find($id);
        if (!$nudis){
            $data = [
                'message' => 'Estudiante no encontreado',
                'status' => 404
            ];

            return response()->json($data, 404);
        }

        $data =[
            'nudi' => $nudis,
            'status' => 200
        ];
        
        return response()->json($data,200);


    }

    public function destroy($id){
        $nudis = Nudi::find($id);
        if(!$nudis){
            $data = [
                'message' => 'Estudiante no encontrado',
                'status' => 404
            ];

            return response()->json($data, 404);

        }
        
        $nudis->delete();
        $data=[
            'message' => 'Estudiante eliminado',
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function update(Request $request, $id)
    {
        $nudis = Nudi::find($id);
        if (!$nudis){
            $data = [
                'messege' => 'Estudiante no encontrado',
                'status' => 404
            ];

            return response()->json($data, 400);
        }

        $validator = validator::make($request->all(),[
            'nombre' => 'required',
            'tamaño' => 'required',
            'sociabilidad' => 'required',
            'dieta' => 'required'
           
        ]);

        if ($validator->fails()){
            $data =[
                'message' => 'Error en la validacion de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];

            return response()->json($data, 400);

        }

        $nudis->nombre = $request->nombre;


    }
}
