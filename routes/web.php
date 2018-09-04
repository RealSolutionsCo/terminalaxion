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

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {


	/////////////////////////////// Roles ////////////////////////////////////////
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('has.permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('has.permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('has.permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('has.permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('has.permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('has.permission:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
		->middleware('has.permission:roles.edit');

	///////////////////// Usuarios /////////////////////////

	Route::post('users/store', 'Auth\RegisterController@store')->name('users.store')
		->middleware('has.permission:users.create');

	Route::get('users', 'Auth\RegisterController@index')->name('users.index')
		->middleware('has.permission:users.index');

	Route::get('users/create', 'Auth\RegisterController@create')->name('users.create')
		->middleware('has.permission:users.create');

	Route::put('users/{user}', 'Auth\RegisterController@update')->name('users.update')
		->middleware('has.permission:users.edit');

	Route::get('users/{user}', 'Auth\RegisterController@show')->name('users.show')
		->middleware('has.permission:users.show');

	Route::delete('users/{user}', 'Auth\RegisterController@destroy')->name('users.destroy')
		->middleware('has.permission:users.destroy');

	Route::get('users/{user}/edit', 'Auth\RegisterController@edit')->name('users.edit')
		->middleware('has.permission:users.edit');



	///////////////////// Accionista /////////////////////////

	Route::post('shareholders/store', 'ShareholderController@store')->name('shareholders.store')
		->middleware('has.permission:shareholder.create');

	Route::get('shareholders', 'ShareholderController@index')->name('shareholders.index')
		->middleware('has.permission:shareholder.index');

	Route::get('shareholders/create', 'ShareholderController@create')->name('shareholders.create')
		->middleware('has.permission:shareholder.create');

	Route::put('shareholders/{shareholder}', 'ShareholderController@update')->name('shareholders.update')
		->middleware('has.permission:shareholder.edit');

	Route::get('shareholders/{shareholder}', 'ShareholderController@show')->name('shareholders.show')
		->middleware('has.permission:shareholder.show');

	Route::delete('shareholders/{shareholder}', 'ShareholderController@destroy')->name('shareholders.destroy')
		->middleware('has.permission:shareholder.destroy');

	Route::get('shareholders/{shareholder}/edit', 'ShareholderController@edit')->name('shareholders.edit')
		->middleware('has.permission:shareholder.edit');

	


});
