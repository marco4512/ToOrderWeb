<?php

namespace App\Http\Controllers;

use App\Models\productosSucursales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosSucursalesController extends Controller
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
    public function NuevoProductoSucursal(Request $request)
    {
       
        $productos = new productosSucursales;
        $productos-> idSucursal = $request -> idSucursal;
        $productos-> fechaI = $request -> fechaI;
        $productos-> Precio = $request -> Precio;
        $productos->save();

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productosSucursales  $productosSucursales
     * @return \Illuminate\Http\Response
     */
    public function show(productosSucursales $productosSucursales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productosSucursales  $productosSucursales
     * @return \Illuminate\Http\Response
     */
    public function edit(productosSucursales $productosSucursales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productosSucursales  $productosSucursales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productosSucursales $productosSucursales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productosSucursales  $productosSucursales
     * @return \Illuminate\Http\Response
     */
    public function destroy(productosSucursales $productosSucursales)
    {
        //
    }
}
