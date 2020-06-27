<?php

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
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix'=>'admin', 'namespace' => 'Admin', 'middleware' => 'auth'],function(){
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::resource('posts', 'PostsController', ['except' => 'show','as' => 'admin' ]);
    Route::resource('users', 'UsersController', ['as' => 'admin' ]);
    Route::get('paginas/{post}/edit', 'PagesController@edit', ['as' => 'admin' ])->name('admin.paginas.edit');
    Route::put('paginas/{post}', 'PagesController@update', ['as' => 'admin' ])->name('admin.paginas.update');

    Route::post('post/{post}/photos', 'PhotosController@store')->name('admin.posts.photos.update');
    Route::delete('photos/{photo}', 'PhotosController@destroy')->name('admin.photos.destroy');
    //subir imagenes 
    Route::post('paginas/{post}/photos', 'PhotosController@store')->name('admin.paginas.photos.update');
    Route::post('noticias/{post}/photos', 'PhotosController@store')->name('admin.noticias.photos.update');
    Route::post('proyectos/{post}/photos', 'PhotosController@store')->name('admin.proyectos.photos.update');
    Route::post('politicas/{post}/photos', 'PhotosController@store')->name('admin.politicas.photos.update');
    //carga de datos
    Route::resource('noticias', 'NoticiasController', ['except' => 'show','as' => 'admin'])->parameters(['noticias' => 'post']);
    Route::resource('proyectos', 'ProyectosController', ['except' => 'show','as' => 'admin'])->parameters(['proyectos' => 'post']);
    Route::resource('tags', 'TagsController', ['as' => 'admin']);
    Route::resource('staff', 'PersonalController', ['except' => 'show','as' => 'admin']);
    Route::resource('testimonios', 'TestimoniosController', ['except' => 'show','as' => 'admin']);
    Route::resource('contenidos', 'ContenidoInteresController', ['except' => 'show','as' => 'admin'])->parameters(['contenidos' => 'post']);
    Route::resource('estrategias', 'EstrategiasController', ['except' => 'show','as' => 'admin'])->parameters(['estrategias' => 'post']);
    Route::resource('politicas', 'PoliticasController', ['except' => 'show','as' => 'admin'])->parameters(['politicas' => 'post']);



});



// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/{any?}', 'PagesController@spa')->name('pages.home')->where('any','.*');