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
/* 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio/{id}', 'EjemploController@inicio');
Route::get('/index', 'Ejemplo3Controller@index');
*/

/*
Route::get('/', "PaginasController@inicio");
Route::get('/inicio', "PaginasController@inicio");
Route::get('/quienesSomos', "PaginasController@quienesSomos");
Route::get('/dondeEstamos', "PaginasController@dondeEstamos");
Route::get('/foro', "PaginasController@foro");


Route::resource("posts","Ejemplo3Controller");*/

Route::get("/","Ejemplo3Controller@index");
Route::get("/login","Ejemplo3Controller@login");
Route::get("/register","Ejemplo3Controller@register");
Route::get("/my_account","Ejemplo3Controller@my_account");
Route::get("/orders","Ejemplo3Controller@orders");
Route::get("/order","Ejemplo3Controller@order");