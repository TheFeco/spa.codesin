<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('home','PagesController@home');
Route::get('quienes-somos','PagesController@quienesSomos');
Route::get('que-hacemos', 'PagesController@queHacemos');
Route::get('comunicacion','PagesController@comunicacion');
Route::get('noticia/{post}','NoticiasController@show');
Route::get('proyectos/{post}','proyectosController@show');
Route::get('tag/{tag}', 'TagsController@zonas');
Route::get('zonas/{tag}', 'TagsController@show');
Route::get('estrategias/{post}','EstrategiasController@show');
Route::get('noticias','NoticiasController@index');
Route::get('indexsearch', 'PagesController@indexsearch');
