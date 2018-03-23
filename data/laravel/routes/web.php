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

Route::get('/', 'NavController@Accueil');
Route::get('article', 'NavController@Article');
Route::get('contact', 'NavController@Contact');

Route::get('article', 'GuitarController@getForm');
Route::post('article',[
    'uses' => 'GuitarController@postForm',
    'as' => 'storeGuitar'
]);
