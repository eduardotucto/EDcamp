<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // esto retorna todo lo que hay en la base de datos (consultar)
        $empresas = Empresa::all();

        return response()->json([
            "data" => $empresas,
            "status" => Response::HTTP_OK, // 200
        ], Response::HTTP_OK);
    }

    // Eliminamos create() porque no crearemos ningun formulario para crear una empresa

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // store crea una empresa sin crear formulario (crear)
         $empresas = Empresa::create($request->all());
         return response()->json([
             "message" => "La empresa ha sido creada correctamente",
             "data" => $empresas,
             "status" => Response::HTTP_CREATED, // 201
         ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        // para buscar un empresa (mostrar)
        return response()->json([
            "message" => "La empresa ha sido mostrada correctamente",
            "data" => $empresa,
            "status" => Response::HTTP_OK, // 200
        ], Response::HTTP_OK);
    }

    // Eliminamos edit() pq tapoco lo usaremos

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        // recibir info y actualizar algun dato
        $empresa->update($request->all());
        return response()->json([
            "message" => "La empresa se ha sido actualizada correctamente",
            "data" => $empresa,
            "status" => Response::HTTP_OK, // 200
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        //
        $empresa->delete();
        return response()->json([
            "message" => "La empresa ha sido eliminada correctamente",
            "data" => $empresa,
            "status" => Response::HTTP_OK, // 200
        ], Response::HTTP_OK);
    }
}
