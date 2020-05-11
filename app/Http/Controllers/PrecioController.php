<?php

namespace App\Http\Controllers;

use App\Precio;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PrecioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // esto retorna todo lo que hay en la base de datos (consultar)
        $precios = Precio::all();

        return response()->json([
            "data" => $precios,
            "status" => Response::HTTP_OK, // 200
        ], Response::HTTP_OK);
    }

    // Eliminamos create() porque no crearemos ningun formulario para crear un precio

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store crea un precio sin crear formulario (crear)
        $precio = Precio::create($request->all());
        return response()->json([
            "message" => "El precio ha sido creado correctamente",
            "data" => $precio,
            "status" => Response::HTTP_CREATED, // 201
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function show(Precio $precio)
    {
        // para buscar un precio (motrar)
        return response()->json([
            "message" => "El precio ha sido creado correctamente",
            "data" => $precio,
            "status" => Response::HTTP_OK, // 200
        ], Response::HTTP_OK);
    }

    // Eliminamos edit(Precio $precio) pq tapoco lo usaremos

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Precio $precio)
    {
        // recibir info y actualizar algun dato
        $precio->update($request->all());
        return response()->json([
            "message" => "El precio ha sido actualizado correctamente",
            "data" => $precio,
            "status" => Response::HTTP_OK, // 200
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Precio $precio)
    {
        //
        $precio->delete();
        return response()->json([
            "message" => "El precio ha sido eliminado correctamente",
            "data" => $precio,
            "status" => Response::HTTP_OK, // 200
        ], Response::HTTP_OK);
    }
}