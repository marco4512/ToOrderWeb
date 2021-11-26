<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function FiltroMesa(Request $request)
    {
      $data = DB::table('mesas')
      ->join('mesa_sucursales', 'mesas.idMesa', '=', 'mesa_sucursales.idMesa')
      ->join('afiliados_sucursales', 'mesa_sucursales.idSucursal', '=', 'afiliados_sucursales.idSucursal')
      ->join('afiliados', 'afiliados_sucursales.idAfiliado', '=', 'afiliados.idAfiliado')
      ->join('sucursales', 'afiliados_sucursales.idSucursal', '=', 'sucursales.idSucursal')
      ->select('*')
      ->where ('afiliados.email','=',$request-> email )
      ->where ('afiliados.password','=',$request-> password )
      ->get()->toJson();
    return $data;
        
    }
    public function index()
    {
        $data = DB::table('mesa_sucursales')
        ->select('mesa_sucursales.idMesaSucursal')
        ->orderBy('mesa_sucursales.idMesaSucursal', 'desc')->limit(1)
        ->get()->toJson();
      return $data;
    }
    public function ShowMesaultima()
    {
        $data = DB::table('mesas')
        ->select('mesas.idMesa')
        ->orderBy('mesas.idMesa', 'desc')->limit(1)
        ->get()->toJson();
      return $data;
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

        $user = new Mesa;
        $user -> nombreMesa= $request->nombreMesa;
        $user -> imagenqrl= $request->imagenqrl;
        $user->save();
    }
    public function actualizamesa(Request $request)
    {
        $data = DB::table('mesa_sucursales')
          ->where('mesa_sucursales.idMesaSucursal','=',$request->idMesaSucursal )
          ->update([ 'mesa_sucursales.idMesa' => $request->idMesa]);
          
          
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function show(Mesa $mesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesa $mesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesa $mesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Mesa $mesa)
    {
        $deletedRows = Mesa::where('idMesa', '=',$request->idMesa)->delete();
    }
}
