<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\AfiliadoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Home', function () {
    return view('welcome');
});
Route::get('/Index', function () {
    return view('welcome');
});
Route::get('/Register', function () {
    return view('welcome');
});
Route::get('/HowWork', function () {
    return view('welcome');
});
Route::get('/Subs', function () {
    return view('welcome');
});
Route::get('/panelControl', function () {
    return view('welcome');
});
Route::get('/inicioSesion', function () {
    return view('welcome');
});
Route::get('/Mesas', function () {
    return view('welcome');
});
Route::get('/Productos', function () {
    return view('welcome');
});
Route::get('/Prueba', function () {
    return view('welcome');
});
Route::get('/PaneldeVentas', function () {
    return view('welcome');
});
Route::get('/index',[UserController::class,'index']);
Route::post('/AfiliadoShow',[AfiliadoController::class,'show']);
Route::post('/indexpo',[UserController::class,'index']);
Route::get('/Token',[UserController::class,'showToken']);
Route::get('/TokenPro',[ProductosController::class,'showToken']);
Route::post('/Store',[UserController::class,'store']);
Route::post('/NuevoProducto',[ProductosController::class,'store']);

