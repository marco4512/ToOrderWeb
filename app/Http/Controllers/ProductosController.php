<?php

namespace App\Http\Controllers;

use App\Models\productos;
use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return productos::all()->toJson();
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
    public function MostrarTodosProductos(Request $request)
    {

     
      $data = DB::table('productos_sucursales')
      ->join('productos', 'productos_sucursales.idProducto', '=', 'productos.idProducto')
      ->join('sucursales', 'productos_sucursales.idSucursal', '=', 'sucursales.idSucursal')
      ->join('afiliados_sucursales','sucursales.idSucursal', '=', 'afiliados_sucursales.idSucursal')
      ->join('afiliados', 'afiliados_sucursales.idAfiliado', '=', 'afiliados.idAfiliado')
      ->join('categorias', 'productos.idCategorias', '=', 'categorias.idCategorias')
      ->select('productos.idProducto','productos.Descripcion','productos.UrlImagen',
              'productos.idCategorias','categorias.Descripcion as categoria','productos_sucursales.Precio','productos_sucursales.fechaI',
              'productos_sucursales.fechaF','afiliados_sucursales.idSucursal','afiliados.idAfiliado','sucursales.Direccion')
      ->where ('afiliados.email','=',$request-> email )
      ->where ('afiliados.password','=',$request-> password )
      ->get()->toJson();
    return $data;
        
    }
    public function MostrarTodosProductosXSucursal(Request $request)
    {

      $data = DB::table('productos_sucursales')
      ->join('productos', 'productos_sucursales.idProducto', '=', 'productos.idProducto')
      ->join('sucursales', 'productos_sucursales.idSucursal', '=', 'sucursales.idSucursal')
      ->join('afiliados_sucursales','sucursales.idSucursal', '=', 'afiliados_sucursales.idSucursal')
      ->join('afiliados', 'afiliados_sucursales.idAfiliado', '=', 'afiliados.idAfiliado')
      ->join('categorias', 'productos.idCategorias', '=', 'categorias.idCategorias')
      ->select('productos.idProducto','productos.Descripcion','productos.UrlImagen',
              'productos.idCategorias','categorias.Descripcion as categoria','productos_sucursales.Precio','productos_sucursales.fechaI',
              'productos_sucursales.fechaF','afiliados_sucursales.idSucursal','afiliados.idAfiliado','sucursales.Direccion')
      ->where ('afiliados.email','=',$request-> email )
      ->where ('afiliados.password','=',$request-> password )
      ->where ('sucursales.idSucursal','=',$request-> idSucursal )
      ->get()->toJson();
    return $data;
        
    }
    public function store(Request $request)
    {
       
        $productos = new productos;
        $productos-> Descripcion = $request -> Descripcion;
        $productos-> UrlImagen = $request -> UrlImagen;
        $productos-> idCategorias = $request -> idCategorias;
        $productos->save();

    }
    public function ShowProductoUltimo()
    {
        $data = DB::table('productos')
        ->select('productos.idProducto')
        ->orderBy('productos.idProducto', 'desc')->limit(1)
        ->get()->toJson();
      return $data;
    }
    public function actualizproductoSucursal(Request $request)
    {
        $data = DB::table('productos_sucursales')
          ->where('productos_sucursales.idProductoSucursal','=',$request->idProductoSucursal )
          ->update(['productos_sucursales.idProducto' => $request->idProducto]);
          
          
    }
    public function ShowProducto_SucursalUltimo()
    {
        $data = DB::table('productos_sucursales')
        ->select('productos_sucursales.idProductoSucursal')
        ->orderBy('productos_sucursales.idProductoSucursal', 'desc')->limit(1)
        ->get()->toJson();
      return $data;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(productos $productos)
    {
        //
    }
    public function showToken(){
        echo csrf_token();
    }
}
