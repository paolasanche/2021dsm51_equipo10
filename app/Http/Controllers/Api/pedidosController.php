<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\pedidosResource;
use App\Http\Resources\pedidosCollection;
use App\Models\pedidos;



class pedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new pedidosCollection(pedidos::all());
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
            'nombre_cliente' => 'required|string|max:200'
            , 'telefono_cliente' => 'required|string|max:200'
            , 'correo_cliente' => 'required|string|max:200'
            , 'edad_cliente' => 'required|string|max:200'
            , 'direccion_cliente' => 'required|string|max:200'        
            , 'estado_cliente' => 'required|string|max:200'
            , 'municipio_cliente' => 'required|string|max:200'
            , 'codigopostal_cliente' => 'required|string|max:200'
            , 'forma_pago' => 'required|string|max:200'
            ]);

            $pedidos = pedidos::create($request->all());
return new pedidosResource($pedidos);
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
        $pedidos = pedidos::findOrFail($id);
        $pedidos->update($request->all());
        return response()->json($pedidos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $pedidos = pedidos::findOrFail($id);
        $pedidos->delete($request->all());
        return response()->json($pedidos);
    }
}
