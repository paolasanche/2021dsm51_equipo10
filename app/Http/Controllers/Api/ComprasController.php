<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\comprasResource;
use App\Http\Resources\comprasCollection;
use App\Models\clientes;
use App\Models\empleados;
use App\Models\productos;
use App\Models\pedidos;
use App\Models\compras;



class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return new comprasCollection(compras::all());
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
            'pedido_id' => 'required|string|max:200'
            , 'producto_id' => 'required|string|max:200'
            , 'cliente_id' => 'required|string|max:200'
            , 'estado_compra' => 'required|string|max:200'
             ]);

     
            $compras = compras::create($request->all());
            return new comprasResource($compras);
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
        $compras = compras::findOrFail($id);
        $compras->update($request->all());
        return response()->json($compras);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compras = compras::findOrFail($id);
        $compras->delete($request->all());
        return response()->json($compras);
    }
}
