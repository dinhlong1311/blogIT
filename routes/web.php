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
  // admin/roles
  Route::group(['prefix'=>'roles'], function(){
    Route::get('/', 'RoleController@index')->name('role.index');
    Route::get('/create', 'RoleController@create')->name('role.create');
    Route::post('/', 'RoleController@store')->name('role.store');
    Route::get('/{id}', 'RoleController@show')->name('role.show');
    Route::get('/{id}/edit', 'RoleController@edit')->name('role.edit');
    Route::put('/{id}', 'RoleController@update')->name('role.update');
    Route::delete('/{id}', 'RoleController@destroy')->name('role.destroy');
  });
  // admin/users
  Route::group(['prefix'=>'users'], function() {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::get('/create', 'UserController@create')->name('user.create');
    Route::post('/', 'UserController@store')->name('user.store');
    Route::get('/{id}', 'UserController@show')->name('user.show');
    Route::get('/{id}/edit', 'UserController@edit')->name('user.edit');
    Route::put('/{id}', 'UserController@update')->name('user.update');
    Route::delete('/{id}', 'UserController@destroy')->name('user.destroy');
  });
});
