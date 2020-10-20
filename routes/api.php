<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('usuarios', 'App\Http\Controllers\UsuariosController@index');
 
Route::get('usuarios/{usuario}', 'App\Http\Controllers\UsuariosController@show');
 
Route::post('usuarios','App\Http\Controllers\UsuariosController@store');
 
Route::put('usuarios/{usuario}','App\Http\Controllers\UsuariosController@update');
 
Route::delete('usuarios/{usuario}', 'App\Http\Controllers\UsuariosController@delete');
