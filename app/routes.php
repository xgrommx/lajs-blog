<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'flakron\blog\app\controllers\HomeController@index');

Route::get('/views/{controller}/{view}', 'flakron\blog\app\controllers\ViewController@index');

Route::get('/login', 'flakron\blog\app\controllers\LoginController@index');

Route::get('/post/list', 'flakron\blog\app\controllers\PostController@index');