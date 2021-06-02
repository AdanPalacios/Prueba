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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/



 
// Rutas CRUD
/* Crear */
Route::get('admin/alumno/crear', 'crudController@crear')->name('admin/alumno/crear');
Route::put('admin/alumno/store', 'crudController@store')->name('admin/alumno/store');
 
/* Leer */
Route::get('/', 'crudController@index')->name('admin/alumno');
 
/* Actualizar */
Route::get('admin/alumno/actualizar/{id}', 'crudController@actualizar')->name('admin/alumno/actualizar');
Route::put('admin/alumno/update/{id}', 'crudController@update')->name('admin/alumno/update');
 
/* Eliminar */
Route::put('admin/alumno/eliminar/{id}', 'crudController@eliminar')->name('admin/alumno/eliminar');