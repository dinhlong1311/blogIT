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

Route::get('/admin', function() {
  return view('admin.demo');
});

Route::group(['prefix'=>'admin'], function(){
  Route::group(['prefix'=>'roles'], function(){
    Route::get('/', 'RoleController@index');
    Route::get('/create', 'RoleController@create');
    Route::post('/', 'RoleController@store');
    Route::get('/{id}', 'RoleController@show');
    Route::get('/{id}/edit', 'RoleController@edit');
    Route::put('/{id}', 'RoleController@update');
    Route::delete('/{id}', 'RoleController@destroy');
  });
});
