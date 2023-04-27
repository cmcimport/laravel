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
     * PÁGINAS ESTÁTICAS
     * 
     */
Route::get("/","Vistas@index");
Route::get("/terminos_y_condiciones","Vistas@terminos");
Route::get("/privacidad","Vistas@privacidad");
Route::get("/nuestro_proyecto","Vistas@nuestro_proyecto");
Route::get("/preguntas_frecuentes","Vistas@preguntas_frecuentes");
Route::get("/contacto","Vistas@contacto");



    /* 
     * CONTROLADOR PRODUCTOS
     * 
     */

Route::get('/productos', [
    'uses' => 'ProductController@index',
    'as' => 'products.index'
]);

Route::get("/producto/{id}", [
    'uses' => 'ProductController@producto',
    'as' => 'ver.producto'
]);

Route::get("/crear_producto", [
    'uses' => 'ProductController@crear_producto',
    'as' => 'crear.producto'
]);

Route::get("/mis_productos", [
    'uses' => 'ProductController@mis_productos',
    'as' => 'mis.productos'
]);

Route::get("/editar_producto/{id}", [
    'uses' => 'ProductController@editar_producto',
    'as' => 'editar.producto'
]);

Route::post("/store_producto", [
    'uses' => 'ProductController@store_producto',
    'as' => 'products.store'
]);


Route::post("/edit_product/{id}", [
    'uses' => 'ProductController@edit_product',
    'as' => 'products.edit'
]);

Route::get("/remove_product/{id}", [
    'uses' => 'ProductController@remove_product',
    'as' => 'remove.product'
]);


    /* 
     * CONTROLADOR LOGIN
     * 
     */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

    /* 
     * CONTROLADOR USUARIOS
     * 
     */

Route::get("/alertas","UserController@alertas");
Route::get("/usuarios","UserController@usuarios");

Route::get("/mi_muro", [
    'uses' => 'UserController@mi_muro',
    'as' => 'user.mi.muro'
]);

Route::get("/configuracion", [
    'uses' => 'UserController@configuracion',
    'as' => 'user.config'
]);

Route::post("/update_perfil", [
    'uses' => 'UserController@update_perfil',
    'as' => 'perfil.update'
]);

Route::post("/update_tienda", [
    'uses' => 'UserController@update_tienda',
    'as' => 'tienda.update'
]);


Route::get("/perfil/{id}", [
    'uses' => 'UserController@ver_perfil',
    'as' => 'user.perfil'
]);

Route::get("/seguidores", [
    'uses' => 'UserController@seguidores',
    'as' => 'user.seguidores'
]);

Route::post("/store_seguidores/{user_seguido}", [
    'uses' => 'UserController@store_seguidores',
    'as' => 'user.store.seguidores'
]);
Route::get("/remove_seguidores/{user_seguido}", [
    'uses' => 'UserController@remove_seguidores',
    'as' => 'user.remove.seguidores'
]);
Route::get("/remove_seguidor/{user_seguido}", [
    'uses' => 'UserController@remove_seguidor',
    'as' => 'user.remove.seguidor'
]);

Route::get("/favoritos", [
    'uses' => 'UserController@favoritos',
    'as' => 'user.favoritos'
]);
Route::post("/store_favorito/{product_id}", [
    'uses' => 'UserController@store_favorito',
    'as' => 'user.store.favorito'
]);
Route::get("/remove_favorito/{product_id}", [
    'uses' => 'UserController@remove_favorito',
    'as' => 'user.remove.favorito'
]);
Route::post("/store_product_favorito/{product_id}", [
    'uses' => 'UserController@store_product_favorito',
    'as' => 'user.store.product.favorito'
]);
Route::post("/remove_product_favorito/{product_id}", [
    'uses' => 'UserController@remove_product_favorito',
    'as' => 'user.remove.product.favorito'
]);
Route::get("/direcciones", [
    'uses' => 'UserController@direcciones',
    'as' => 'user.direcciones'
]);
Route::post("/store_direccion", [
    'uses' => 'UserController@store_direccion',
    'as' => 'user.store.direccion'
]);
Route::get("/crear_direccion", [
    'uses' => 'UserController@crear_direccion',
    'as' => 'crear.direccion'
]);

Route::get("/remove_direccion/{id}", [
    'uses' => 'UserController@remove_direccion',
    'as' => 'remove.direccion'
]);

Route::get("/editar_direccion/{id}", [
    'uses' => 'UserController@editar_direccion',
    'as' => 'editar.direccion'
]);

Route::post("/edit_direccion/{id}", [
    'uses' => 'UserController@edit_direccion',
    'as' => 'edit.direccion'
]);

Route::get("/pagos", [
    'uses' => 'UserController@pagos',
    'as' => 'user.pagos'
]);
Route::post("/store_pagos_transferencia", [
    'uses' => 'UserController@store_pagos_transferencia',
    'as' => 'user.store.pagos.transferencia'
]);
Route::post("/store_pagos_contrareembolso", [
    'uses' => 'UserController@store_pagos_contrareembolso',
    'as' => 'user.store.pagos.contrareembolso'
]);
Route::post("/store_pagos_recogida", [
    'uses' => 'UserController@store_pagos_recogida_en_tienda',
    'as' => 'user.store.pagos.recogida'
]);

    
    /* 
     * CONTROLADOR PEDIDOS
     * 
     */

Route::get("/cesta", [
    'uses' => 'OrderController@cesta',
    'as' => 'order.cesta'
]);

Route::post("/store_cesta/{id}", [
    'uses' => 'OrderController@store_cesta',
    'as' => 'order.store.cesta'
]);

Route::post("/delete_cesta", [
    'uses' => 'OrderController@delete_cesta',
    'as' => 'order.delete.cesta'
]);

Route::get("/pedidos", [
    'uses' => 'OrderController@pedidos',
    'as' => 'order.pedidos'
]);

Route::post("/crear_pedido", [
    'uses' => 'OrderController@crear_pedido',
    'as' => 'crear.pedido'
]);

Route::get("/pedido/{id}","OrderController@pedido");

Route::get("/ventas", [
    'uses' => 'OrderController@ventas',
    'as' => 'order.ventas'
]);
Route::get("/venta/{id}","OrderController@venta");


    /* 
     * 
     * CONTROLADOR ADMINISTRACION
     * 
     */

Route::get("/gestion_usuarios", [
    'uses' => 'AdminController@gestion_usuario',
    'as' => 'admin.gestion_usuario'
]);

Route::get("/gestion_categorias", [
    'uses' => 'AdminController@gestion_categoria',
    'as' => 'admin.gestion_categoria'
]);