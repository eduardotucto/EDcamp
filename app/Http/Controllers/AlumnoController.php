<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // esto retorna todo lo que hay en la base de datos (consultar)
        $alumnos = Alumno::all();

        return response()->json([
            "data" => $alumnos,
            "status" => Response::HTTP_OK, // 200
        ], Response::HTTP_OK);
    }

    // Eliminamos create() porque no crearemos ningun formulario para crear un alumno

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store crea un alumno sin crear formulario (crear)
        $alumnos = Alumno::create($request->all());
        return response()->json([
            "message" => "El alumno ha sido creado correctamente",
            "data" => $alumnos,
            "status" => Response::HTTP_CREATED, // 201
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        // para buscar un alumno (mostrar)
        return response()->json([
            "message" => "El alumno ha sido mostrado correctamente",
            "data" => $alumno,
            "status" => Response::HTTP_OK, // 200
        ], Response::HTTP_OK);
    }

    // Eliminamos edit() pq tapoco lo usaremos

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        // recibir info y actualizar algun dato
        $alumno->update($request->all());
        return response()->json([
            "message" => "El alumno se ha sido actualizado correctamente",
            "data" => $alumno,
            "status" => Response::HTTP_OK, // 200
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
        $alumno->delete();
        return response()->json([
            "message" => "El alumno ha sido eliminado correctamente",
            "data" => $alumno,
            "status" => Response::HTTP_OK, // 200
        ], Response::HTTP_OK);
    }
}
