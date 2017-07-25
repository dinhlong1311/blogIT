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

Route::group(['prefix'=>'admin'], function(){
  Route::get('/', 'AdminController@index')->name('admin.index');
  Route::group(['prefix'=>'roles'], function(){
    Route::get('/', 'RoleController@index')->name('role.index');
    Route::get('/create', 'RoleController@create')->name('role.create');
    Route::post('/', 'RoleController@store')->name('role.store');
    Route::get('/{id}', 'RoleController@show');
    Route::get('/{id}/edit', 'RoleController@edit');
    Route::put('/{id}', 'RoleController@update');
    Route::delete('/{id}', 'RoleController@destroy')->name('role.destroy');
  });
});
