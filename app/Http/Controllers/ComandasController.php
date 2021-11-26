<?php

namespace App\Http\Controllers;

use App\Models\comandas;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\DB;
class ComandasController extends Controller
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
    public function IngresarComanda(Request $request)
    {
        $user = new comandas;
        $user -> idMesa= $request->idMesa;
        $user -> Horainicio=now();
        $user -> fecha=now(); 
        $user->save();
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
     * @param  \App\Models\comandas  $comandas
     * @return \Illuminate\Http\Response
     */

    public function MostrarTodosProductosxCategoria(Request $request)
    {

      $data = DB::table('productos')
      ->join('productos_sucursales', 'productos.idProducto', '=', 'productos_sucursales.idProducto')
      ->select('productos.idProducto as idProducto','productos_sucursales.Precio','productos.Descripcion as descripcion')
      ->where ('productos_sucursales.idSucursal','=',$request-> idSucursal )
      ->where ('productos.idCategorias','=',$request-> idCategorias )
      ->get()->toJson();
    return $data;
        
    }
   
    public function ImprimiendoComandas(Request $request)
    {
        $dt = new DateTime();
      $data = DB::table('productos_comandas')
      ->join('comandas', 'productos_comandas.idComanda', '=', 'comandas.idComanda')
      ->join('productos', 'productos_comandas.idProducto', '=', 'productos.idProducto')

      ->join('productos_sucursales', 'productos.idProducto', '=', 'productos_sucursales.idProducto')
      ->join('sucursal_trabajadores', 'productos_sucursales.idSucursal', '=', 'sucursal_trabajadores.idSucursal')
      ->join('trabajadores', 'sucursal_trabajadores.idTrabajadores', '=', 'trabajadores.idTrabajadores')
      ->join('mesa_sucursales', 'comandas.idMesa', '=', 'mesa_sucursales.idMesa')
      ->join('sucursales','sucursal_trabajadores.idSucursal','=','sucursales.idSucursal')
      ->join('mesas', 'mesa_sucursales.idMesa', '=', 'mesas.idMesa')
      ->select('sucursales.idSucursal','productos.idProducto', 'comandas.idComanda', 'productos_comandas.cantidad','comandas.Horainicio','mesas.nombreMesa','productos.Descripcion','productos.UrlImagen','productos.idCategorias')
      ->where ('trabajadores.TokendeIngreso','=',$request-> TokendeIngreso )
      ->where ('trabajadores.Password','=',$request-> Password )
      ->where ('comandas.fecha','>',$dt->format('Y-m-d'))
      ->orderBy('comandas.idComanda', 'desc')
      ->get()->toJson();
    return $data;
        
    }
    public function UltimaComanda(Request $request)
    {

     
      $data = DB::table('comandas')
      ->join('mesa_sucursales', 'comandas.idMesa', '=', 'mesa_sucursales.idMesa')
      ->select('comandas.idComanda')
      ->where ('mesa_sucursales.idSucursal','=',$request-> idSucursal )
      ->orderBy('comandas.idComanda', 'desc')->limit(1)
      ->get()->toJson();
    return $data;
        
    }



    

    public function show(comandas $comandas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comandas  $comandas
     * @return \Illuminate\Http\Response
     */
    public function edit(comandas $comandas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comandas  $comandas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comandas $comandas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comandas  $comandas
     * @return \Illuminate\Http\Response
     */
    public function destroy(comandas $comandas)
    {
        //
    }
}
