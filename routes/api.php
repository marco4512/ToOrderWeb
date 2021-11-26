<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanesController;
use App\Http\Controllers\SucursalesController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TrabajadoresController;
use App\Http\Controllers\SucursalTrabajadoresController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\MesaSucursalesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosSucursalesController;
use App\Http\Controllers\ComandasController;
use App\Http\Controllers\ProductosComandaController;
use App\Http\Controllers\TrabajadorComandasController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/ProductosXSucursal',[ProductosController::class,'MostrarTodosProductosXSucursal']);
Route::post('/SoloMeseros',[TrabajadoresController::class,'TodosTrabajan']);
Route::post('/IngresarTrabajadorComanda',[TrabajadorComandasController::class,'IngresarTrabajadorComanda']);
Route::post('/ImprimeComanda',[ComandasController::class,'ImprimiendoComandas']);
Route::post('/LoginTrabajador',[TrabajadoresController::class,'LoginTrabajador']);
Route::post('/RegistrarProductoComanda',[ProductosComandaController::class,'store']);
Route::post('/UltimaComanda',[ComandasController::class,'UltimaComanda']);
Route::post('/FiltroCategorias',[ComandasController::class,'MostrarTodosProductosxCategoria']);
Route::post('/IngresaComanda',[ComandasController::class,'IngresarComanda']);
Route::post('/SucursalMesa',[MesaSucursalesController::class,'FiltromesasSucursal']);
Route::get('/UltimoProductosuculsal',[ProductosController::class,'ShowProducto_SucursalUltimo']);
Route::get('/UltimoProducto',[ProductosController::class,'ShowProductoUltimo']);
Route::post('/NuevoProductoSuc',[ProductosSucursalesController::class,'NuevoProductoSucursal']);
Route::post('/UpdateProductoSuc',[ProductosController::class,'actualizproductoSucursal']);
Route::get('/CaregoriasTodas',[CategoriasController::class,'index']);
Route::post('/TodosProductos',[ProductosController::class,'MostrarTodosProductos']);
Route::post('/NuevoProducto',[ProductosController::class,'store']);
Route::post('/ElimarMesaa',[MesaController::class,'destroy']);
Route::post('/FiltromesasEli',[MesaSucursalesController::class,'FiltroElim']);
Route::get('/NuevaMesaId',[MesaController::class,'ShowMesaultima']);
Route::get('/UpdateIdMESA',[MesaController::class,'index']);
Route::post('/Actualizamenza',[MesaController::class,'actualizamesa']);
Route::post('/MesaSucursalnueva',[MesaSucursalesController::class,'idsucursal']);
Route::post('/MesaNueva',[MesaController::class,'store']);
Route::post('/mesaFiltro',[MesaController::class,'FiltroMesa']);
Route::post('/updateSucursal',[SucursalTrabajadoresController::class,'actualizarSucursal']);
Route::post('/updateUrlImagen',[SucursalTrabajadoresController::class,'actualizaUrlImagen']);
Route::post('/updatePassword',[SucursalTrabajadoresController::class,'actualizaPassword']);
Route::post('/updateTokendeIngreso',[SucursalTrabajadoresController::class,'actualizaTokenIngreso']);
Route::post('/updateFechaNa',[SucursalTrabajadoresController::class,'actualizaFechaNa']);
Route::post('/updateidRol',[SucursalTrabajadoresController::class,'actualizaIdRol']);
Route::post('/updateapellido',[SucursalTrabajadoresController::class,'actualizaapellido']);
Route::post('/updateNombre',[SucursalTrabajadoresController::class,'actualizaNombre']);
Route::post('/Eliminar',[TrabajadoresController::class,'destroy']);
Route::post('/filtro',[AfiliadoController::class,'FiltroElim']);
Route::post('/filtroEdit',[AfiliadoController::class,'FiltroEdit']);
Route::get('/idsucursaltrabajador',[SucursalTrabajadoresController::class,'index']);
Route::post('/actualiza',[SucursalTrabajadoresController::class,'actualiza']);
Route::get('/IdTrabajador',[TrabajadoresController::class,'index']);
Route::post('register',[PassportAuthController::class,'register']);
Route::post('/SucursalesTrabajadores',[SucursalTrabajadoresController::class,'store']);
Route::post('/Sucursales',[SucursalesController::class,'show']);
Route::post('/NewTrabajador',[TrabajadoresController::class,'store']);
Route::get('/Planes',[PlanesController::class,'index']);
Route::get('/NewSucursal',[SucursalesController::class,'store']);
Route::post('login',[PassportAuthController::class,'login']);
Route::get('/Roles',[RolesController::class,'index']);
Route::post('AfiliadoStore',[AfiliadoController::class,'store']);
Route::post('AfiliadoLogin',[AfiliadoController::class,'Login']);
Route::post('AfiliadoLogin2',[AfiliadoController::class,'Login2']);
Route::get('/idUsuario',[UserController::class,'idUsu']);
Route::get('/TodoTrabajador',[TrabajadoresController::class,'MOSTARTODOTRabajador']);
Route::get('/afiliadosIndex',[AfiliadoController::class,'index']);
Route::middleware('auth:api')->group(function() {
    Route::post('/AfiliadoShow',[AfiliadoController::class,'show']);
   
    Route::get('/TokenUsuario',[UserController::class,'RegistrandoToken']);
   
});
