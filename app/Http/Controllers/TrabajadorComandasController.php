<?php

namespace App\Http\Controllers;

use App\Models\TrabajadorComandas;
use Illuminate\Http\Request;

class TrabajadorComandasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function IngresarTrabajadorComanda(Request $request)
    {
        $user = new TrabajadorComandas;
        $user -> idComanda	= $request->idComanda;
        $user -> idTrabajadores	= $request->idTrabajadores;
        $user->save();
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
     * @param  \App\Models\TrabajadorComandas  $trabajadorComandas
     * @return \Illuminate\Http\Response
     */
    public function show(TrabajadorComandas $trabajadorComandas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrabajadorComandas  $trabajadorComandas
     * @return \Illuminate\Http\Response
     */
    public function edit(TrabajadorComandas $trabajadorComandas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrabajadorComandas  $trabajadorComandas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrabajadorComandas $trabajadorComandas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrabajadorComandas  $trabajadorComandas
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrabajadorComandas $trabajadorComandas)
    {
        //
    }
}
