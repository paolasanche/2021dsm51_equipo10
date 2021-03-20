<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\empleadosResource;
use App\Http\Resources\empleadosCollection;
use App\Models\empleados;

class empleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return new empleadosCollection(empleados::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_empleado' => 'required|string|max:200'
            , 'edad_empleado' => 'required|string|max:200'
            , 'telefono_empleado' => 'required|string|max:200'
            , 'correo_empleado' => 'required|string|max:200'
            , 'direccion_empleado' => 'required|string|max:200'        
            , 'puesto_empleado' => 'required|string|max:200'
            ]);

            $empleados = empleados::create($request->all());
            return new empleadosResource($empleados);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleados = empleados::findOrFail($id);
        $empleados->update($request->all());
        return response()->json($empleados);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
     
        $empleados = empleados::findOrFail($id);
        $empleados->delete($request->all());
        return response()->json($empleados);
    }
}
