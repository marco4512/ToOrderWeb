<?php

namespace App\Http\Controllers;

use App\Models\MesaSucursales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MesaSucursalesController extends Controller
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
    public function FiltroElim(Request $request)
    {
      $data = DB::table('mesas')
      ->join('mesa_sucursales', 'mesas.idMesa', '=', 'mesa_sucursales.idMesa')
      ->join('sucursales', 'mesa_sucursales.idSucursal', '=', 'sucursales.idSucursal')
      ->join('afiliados_sucursales', 'sucursales.idSucursal', '=', 'afiliados_sucursales.idSucursal')
      ->select('mesas.idMesa','mesas.nombreMesa')
      ->where ('afiliados_sucursales.idAfiliado','=',$request-> idAfiliado )
      ->orderBy('mesas.nombreMesa', 'asc')
      ->get()->toJson();
    return $data;
        
    }
    public function FiltromesasSucursal(Request $request)
    {
      $data = DB::table('mesas')
      ->join('mesa_sucursales', 'mesas.idMesa', '=', 'mesa_sucursales.idMesa')
      ->join('sucursales', 'mesa_sucursales.idSucursal', '=', 'sucursales.idSucursal')
   
      ->select('mesas.idMesa','mesas.nombreMesa')
      ->where ('sucursales.idSucursal','=',$request-> idSucursal )
      ->get()->toJson();
    return $data;
        
    }
    public function idsucursal(Request $request)
    {

        $user = new MesaSucursales;
        $user -> idSucursal= $request->idSucursal;
        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MesaSucursales  $mesaSucursales
     * @return \Illuminate\Http\Response
     */
    public function show(MesaSucursales $mesaSucursales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MesaSucursales  $mesaSucursales
     * @return \Illuminate\Http\Response
     */
    public function edit(MesaSucursales $mesaSucursales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MesaSucursales  $mesaSucursales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MesaSucursales $mesaSucursales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MesaSucursales  $mesaSucursales
     * @return \Illuminate\Http\Response
     */
    public function destroy(MesaSucursales $mesaSucursales)
    {

    }
}
