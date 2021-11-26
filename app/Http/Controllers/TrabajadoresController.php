<?php

namespace App\Http\Controllers;

use App\Models\trabajadores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrabajadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('trabajadores')
        ->select('trabajadores.idTrabajadores')
        ->orderBy('trabajadores.idTrabajadores', 'desc')->limit(1)
        ->get()->toJson();
      return $data;
    }
    public function MOSTARTODOTRabajador( Request $request)
    {
        $data = DB::table('trabajadores')
        ->select('*')
        ->where('trabajadores.idTrabajadores','=',$request->idTrabajadores )
        ->get()->toJson();
      return $data;
    }
    public function LoginTrabajador( Request $request)
    {
        $data = DB::table('trabajadores')
        ->join('sucursal_trabajadores', 'trabajadores.idTrabajadores', '=', 'sucursal_trabajadores.idTrabajadores')
        ->select('*')
        ->where('trabajadores.TokendeIngreso','=',$request->TokendeIngreso )
        ->where('trabajadores.Password','=',$request->Password )
        ->get()->toJson();
      return $data;
    }
    public function TodosTrabajan( Request $request)
    {
        $data = DB::table('trabajadores')
        ->join('sucursal_trabajadores', 'trabajadores.idTrabajadores', '=', 'sucursal_trabajadores.idTrabajadores')
        ->join('afiliados_sucursales', 'sucursal_trabajadores.idSucursal', '=', 'afiliados_sucursales.idSucursal')
        ->join('afiliados', 'afiliados_sucursales.idAfiliado', '=', 'afiliados.idAfiliado')
        ->select('trabajadores.idTrabajadores','trabajadores.nombre','trabajadores.apellidos','trabajadores.idRol','trabajadores.UrlImagen','sucursal_trabajadores.idSucursal')
        ->where('afiliados.email','=',$request->email)
        ->where('afiliados.password','=',$request->password)
        ->where('trabajadores.idRol','=','1')
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
    
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new trabajadores;
        $user -> nombre= $request->nombre;
        $user -> apellidos= $request->apellidos;
        $user -> idRol= $request->idRol;
        $user -> fechaNacimiento= $request->fechaNacimiento;
        $user -> TokendeIngreso	= $request->TokendeIngreso;
        $user -> Password= $request->Password;
        $user -> UrlImagen= $request-> UrlImagen;

        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function show(trabajadores $trabajadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function edit(trabajadores $trabajadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trabajadores $trabajadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,trabajadores $trabajadores)
    {
        $deletedRows = trabajadores::where('idTrabajadores', '=',$request->idTrabajadores)->delete();
    }
}
