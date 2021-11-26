<?php

namespace App\Http\Controllers;

use App\Models\ProductosComanda;
use Illuminate\Http\Request;

class ProductosComandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user = new ProductosComanda;
        $user -> idProducto= $request->idProducto;
        $user -> idComanda = $request->idComanda ;
        $user -> cantidad = $request->cantidad ;
        $user -> precio = $request->precio ;
        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductosComanda  $productosComanda
     * @return \Illuminate\Http\Response
     */
    public function show(ProductosComanda $productosComanda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductosComanda  $productosComanda
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductosComanda $productosComanda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductosComanda  $productosComanda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductosComanda $productosComanda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductosComanda  $productosComanda
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductosComanda $productosComanda)
    {
        //
    }
}
