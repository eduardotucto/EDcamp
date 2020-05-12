<?php

namespace App\Http\Controllers;

use App\Pago;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // esto retorna todo lo que hay en la base de datos (consultar)
        $pagos = Pago::all();

        return response()->json([
            "data" => $pagos,
            "status" => Response::HTTP_OK, // 200
        ], Response::HTTP_OK);
    }

    // Eliminamos create() porque no crearemos ningun formulario para crear un pago

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store crea un pago sin crear formulario (crear)
        $pago = Pago::create($request->all());
        return response()->json([
            "message" => "El pago ha sido creado correctamente",
            "data" => $pago,
            "status" => Response::HTTP_CREATED, // 201
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(Pago $pago)
    {
        // para buscar un pago (motrar)
        return response()->json([
            "message" => "El pago ha sido mostrado correctamente",
            "data" => $pago,
            "status" => Response::HTTP_OK, // 200
        ], Response::HTTP_OK);
    }

    // Eliminamos edit(Precio $precio) pq tapoco lo usaremos

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pago $pago)
    {
        // recibir info y actualizar algun dato
        $pago->update($request->all());
        return response()->json([
            "message" => "El pago ha sido actualizado correctamente",
            "data" => $pago,
            "status" => Response::HTTP_OK, // 200
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pago $pago)
    {
        //
        $pago->delete();
        return response()->json([
            "message" => "El pago ha sido eliminado correctamente",
            "data" => $pago,
            "status" => Response::HTTP_OK, // 200
        ], Response::HTTP_OK);
    }
}
