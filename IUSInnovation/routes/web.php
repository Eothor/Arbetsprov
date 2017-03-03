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
Route::get('view_log',['uses' =>'UsersController@index']);
Route::get('add_new', ['uses' =>'UsersController@create']);
Route::post('view_log', ['uses' =>'UsersController@store']);
Route::get('edit_page/{id}', ['uses' =>'UsersController@edit']);
Route::put('edit_page/{id}', ['uses' =>'UsersController@update']);
Route::delete('view_log/{id}', ['uses' =>'UsersController@delete']);
/*
Route::get('users', function(){
  $users = [
    '0' => [
      'Owner' => 'John',
      'Device Type' => 'PC',
      'Log' => 'Damaged',
      'Created Date' => '00/00/00'
    ]
  ];
  return $users;
});
