<?php

namespace App\Http\Controllers;

use App\Models\SucursalTrabajadores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SucursalTrabajadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('sucursal_trabajadores')
        ->select('sucursal_trabajadores.idSucursalTrabajador')
        ->orderBy('sucursal_trabajadores.idSucursalTrabajador', 'desc')->limit(1)
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
        $user = new SucursalTrabajadores;
        $user -> idSucursal= $request->idSucursal;
        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SucursalTrabajadores  $sucursalTrabajadores
     * @return \Illuminate\Http\Response
     */
    public function show(SucursalTrabajadores $sucursalTrabajadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SucursalTrabajadores  $sucursalTrabajadores
     * @return \Illuminate\Http\Response
     */
    public function edit(SucursalTrabajadores $sucursalTrabajadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SucursalTrabajadores  $sucursalTrabajadores
     * @return \Illuminate\Http\Response
     */
    public function actualiza(Request $request, SucursalTrabajadores $sucursalTrabajadores)
    {
        $data = DB::table('sucursal_trabajadores')
          ->where('sucursal_trabajadores.idSucursalTrabajador','=',$request->idSucursalTrabajador )
          ->update([ 'sucursal_trabajadores.idTrabajadores' => $request->idTrabajadores]);
          
          
    }
    public function actualizaNombre(Request $request, SucursalTrabajadores $sucursalTrabajadores)
    {
        $data = DB::table('trabajadores')
          ->where('trabajadores.idTrabajadores','=',$request->idTrabajadores )
          ->update([ 'trabajadores.nombre' => $request->nombre]);  
    }
    public function actualizaapellido(Request $request, SucursalTrabajadores $sucursalTrabajadores)
    {
        $data = DB::table('trabajadores')
          ->where('trabajadores.idTrabajadores','=',$request->idTrabajadores )
          ->update([ 'trabajadores.apellidos' => $request->apellidos]);  
    }
    public function actualizaIdRol(Request $request, SucursalTrabajadores $sucursalTrabajadores)
    {
        $data = DB::table('trabajadores')
          ->where('trabajadores.idTrabajadores','=',$request->idTrabajadores )
          ->update([ 'trabajadores.idRol' => $request->idRol]);  
    }
    public function actualizaFechaNa(Request $request, SucursalTrabajadores $sucursalTrabajadores)
    {
        $data = DB::table('trabajadores')
          ->where('trabajadores.idTrabajadores','=',$request->idTrabajadores )
          ->update([ 'trabajadores.fechaNacimiento' => $request->fechaNacimiento]);  
    }
    public function actualizaTokenIngreso(Request $request, SucursalTrabajadores $sucursalTrabajadores)
    {
        $data = DB::table('trabajadores')
          ->where('trabajadores.idTrabajadores','=',$request->idTrabajadores )
          ->update([ 'trabajadores.TokendeIngreso' => $request->TokendeIngreso]);  
    }
    public function actualizaPassword(Request $request, SucursalTrabajadores $sucursalTrabajadores)
    {
        $data = DB::table('trabajadores')
          ->where('trabajadores.idTrabajadores','=',$request->idTrabajadores )
          ->update([ 'trabajadores.Password' => $request->Password]);  
    }
    public function actualizaUrlImagen(Request $request, SucursalTrabajadores $sucursalTrabajadores)
    {
        $data = DB::table('trabajadores')
          ->where('trabajadores.idTrabajadores','=',$request->idTrabajadores )
          ->update([ 'trabajadores.UrlImagen' => $request->UrlImagen]);  
    }
    public function actualizarSucursal(Request $request, SucursalTrabajadores $sucursalTrabajadores)
    {
        $data = DB::table('sucursal_trabajadores')
          ->where('sucursal_trabajadores.idTrabajadores','=',$request->idTrabajadores )
          ->update([ 'sucursal_trabajadores.idSucursal' => $request->idSucursal]);  
    }
    public function update(Request $request, SucursalTrabajadores $sucursalTrabajadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SucursalTrabajadores  $sucursalTrabajadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(SucursalTrabajadores $sucursalTrabajadores)
    {
        //
    }
}
