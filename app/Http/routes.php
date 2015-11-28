<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */
//La route par défaut
Route::get('/master',function(){
    return view('master');
});

Route::get('/','MainController@index');
Route::get('/inscription','MainController@signin');
Route::get('/evenements','MainController@events');

/*Route::get('/',function(){
    $json = json_decode(file_get_contents('http://localhost:3000'), true);
    return view('welcome')->with('donnees',$json);
});*/
