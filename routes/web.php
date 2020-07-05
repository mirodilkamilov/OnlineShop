<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/',[
   'uses'=>'MyController@getPrimaryHome',
   'as'=>'getPrimaryHome'
]);

Route::post('/register', [
    'uses' => 'MyController@postRegister',
    'as' => 'postRegister'
]);

