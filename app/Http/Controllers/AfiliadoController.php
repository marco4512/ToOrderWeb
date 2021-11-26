<?php

namespace App\Http\Controllers;

use App\Models\Afiliado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Afiliado::all()->toJson();
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

        $user = new Afiliado;
        $user -> nombre= $request->nombre;
        $user -> Apellidos= $request->Apellidos;
        $user -> email= $request->email;
        $user -> Telefono= $request->Telefono;
        $user -> NombreDelNegocio= $request->NombreDelNegocio;
        $user -> UrlLogoNegocio= $request->UrlLogoNegocio;
        $user -> UrlImagen= $request->UrlImagen;
        $user -> password= $request-> password;

        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Afiliado  $afiliado
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $afiliado= Afiliado::where('idAfiliado',$request->idAfiliado)->first()->get()->toJson();
        
        return $afiliado;
        
    }
    public function Login(Request $request)
    {
      $data = DB::table('afiliados')
      ->join('afiliados_sucursales', 'afiliados.idAfiliado', '=', 'afiliados_sucursales.idAfiliado')
      ->join('sucursales', 'afiliados_sucursales.idSucursal', '=', 'sucursales.idSucursal')
      ->join('sucursal_trabajadores', 'sucursales.idSucursal', '=', 'sucursal_trabajadores.idSucursal')
      ->join('trabajadores', 'sucursal_trabajadores.idTrabajadores', '=', 'trabajadores.idTrabajadores')
      ->join('roles', 'trabajadores.idRol', '=', 'roles.idRol')
      ->select('afiliados.idAfiliado as idAfiliado',
      'sucursales.idSucursal as idSucursal','sucursales.Direccion','trabajadores.idTrabajadores as idTrabajadores',
      'trabajadores.nombre as nombre','trabajadores.apellidos as apellidos','trabajadores.TokendeIngreso as Token',
      'trabajadores.Password as password','roles.idRol as idRol', 'roles.Tipo as Tipo',
      'afiliados.NombreDelNegocio as Negocio','trabajadores.UrlImagen as UrlImagen')
      ->where ('afiliados.email','=',$request-> email)
      ->where ('afiliados.password','=',$request-> password)
      ->get()->toJson();
    return $data;
        
    }
    public function FiltroElim(Request $request)
    {
      $data = DB::table('afiliados')
      ->join('afiliados_sucursales', 'afiliados.idAfiliado', '=', 'afiliados_sucursales.idAfiliado')
      ->join('sucursales', 'afiliados_sucursales.idSucursal', '=', 'sucursales.idSucursal')
      ->join('sucursal_trabajadores', 'sucursales.idSucursal', '=', 'sucursal_trabajadores.idSucursal')
      ->join('trabajadores', 'sucursal_trabajadores.idTrabajadores', '=', 'trabajadores.idTrabajadores')
      ->join('roles', 'trabajadores.idRol', '=', 'roles.idRol')
      ->select('afiliados.idAfiliado as idAfiliado',
      'sucursales.idSucursal as idSucursal','sucursales.Direccion','trabajadores.idTrabajadores as idTrabajadores',
      'trabajadores.nombre as nombre','trabajadores.apellidos as apellidos','trabajadores.TokendeIngreso as Token',
      'trabajadores.Password as password','roles.idRol as idRol', 'roles.Tipo as Tipo',
      'afiliados.NombreDelNegocio as Negocio','trabajadores.UrlImagen as UrlImagen')
      ->where ('trabajadores.idTrabajadores','=',$request-> idTrabajadores )
      ->where ('afiliados.idAfiliado','=',$request-> idAfiliado )
      ->get()->toJson();
    return $data;
        
    }
    public function FiltroEdit(Request $request)
    {
      $data = DB::table('afiliados')
      ->join('afiliados_sucursales', 'afiliados.idAfiliado', '=', 'afiliados_sucursales.idAfiliado')
      ->join('sucursales', 'afiliados_sucursales.idSucursal', '=', 'sucursales.idSucursal')
      ->join('sucursal_trabajadores', 'sucursales.idSucursal', '=', 'sucursal_trabajadores.idSucursal')
      ->join('trabajadores', 'sucursal_trabajadores.idTrabajadores', '=', 'trabajadores.idTrabajadores')
      ->join('roles', 'trabajadores.idRol', '=', 'roles.idRol')
      ->select('afiliados.idAfiliado as idAfiliado',
      'sucursales.idSucursal as idSucursal','sucursales.Direccion','trabajadores.idTrabajadores as idTrabajadores',
      'trabajadores.nombre as nombre','trabajadores.apellidos as apellidos','trabajadores.TokendeIngreso as Token',
      'trabajadores.Password as password','roles.idRol as idRol', 'roles.Tipo as Tipo',
      'afiliados.NombreDelNegocio as Negocio','trabajadores.UrlImagen as UrlImagen')
      ->where ('trabajadores.idTrabajadores','=',$request-> idTrabajadores )
      ->where ('afiliados.idAfiliado','=',$request-> idAfiliado )
      ->get()->toJson();
    return $data;
        
    }
    public function Login2(Request $request)
    {
      $data = DB::table('afiliados')
      ->select('*')
      ->where ('afiliados.email','=',$request-> email)
      ->where ('afiliados.password','=',$request-> password)
      ->get()->toJson();
    return $data;
        
    }
    


    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Afiliado  $afiliado
     * @return \Illuminate\Http\Response
     */
    public function edit(Afiliado $afiliado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Afiliado  $afiliado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Afiliado $afiliado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Afiliado  $afiliado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Afiliado $afiliado)
    {
        //
    }
}
