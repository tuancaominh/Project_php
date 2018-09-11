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


Route::get('regis', 'CustomersController@index');
Route::post('prm', 'CustomersController@create');
Route::post('edit', 'CustomersController@edit');
Route::post('delete', 'CustomersController@delete');
Route::get('confirm/{token_name}', 'CustomersController@confirmgmail');
Route::get('apply',function(){
 return view('front.apply.apply');
});
Route::post('saveimage', 'ApplyController@store');


// Route::get('login',['as'=>'login','uses'=>'Auth\AuthController@login']);
//  #Route::post('postlogin',['as'=>'postlogin','uses'=>'Auth\AuthController@postlogin']);
//  Route::post('ex',['as'=>'ex','uses'=>'Auth\AuthController@ex']);

Route::get('login',['as'=>'login','uses'=>'CustomersController@login']);
 Route::post('postlogin',['as'=>'postlogin','uses'=>'CustomersController@postlogin']);


// Route::get('apply','ApplyController@index');
