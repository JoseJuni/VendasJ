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

Route::get('/sobre', function () {
    return view('about');

});






Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/logout', 'HomeController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    //entarada
    Route::get('/vendas', 'vendasj\entradaController@index')->name('admin.venda');
    Route::post('/vendas/venda', 'vendasj\entradaController@search')->name('venda.create');


    //entarada
    Route::get('/entrada', 'vendasj\entradaController@index')->name('admin.entrada');
    Route::post('/entrada/search', 'vendasj\entradaController@search')->name('entrada.search');

    //Cliente
    Route::get('/cliente', 'vendasj\ClienteController@index')->name('admin.cliente');
    Route::post('/cliente/search', 'vendasj\ClienteController@search')->name('cliente.search');
    Route::get('/cliente/cadastro', 'vendasj\clienteController@create')->name('cliente.create');
    Route::get('/cliente/Editar/{id}', 'vendasj\clienteController@edit')->name('cliente.edit');
    Route::put('/cliente/Editado/{id}', 'vendasj\clienteController@update')->name('cliente.update');
    Route::post('/cliente/add', 'vendasj\clienteController@store')->name('cliente.add');
    Route::get('/cliente/Perfil/{id}', 'vendasj\clienteController@show')->name('cliente.show');
    Route::get('/cliente/delete/{id}', 'vendasj\clienteController@destroy')->name('cliente.destroy');
    //Produto
    Route::get('/produto', 'vendasj\ProdutoController@index')->name('admin.produto');
    Route::get('/produto/cadastro', 'vendasj\ProdutoController@create')->name('produto.create');
    Route::get('/produto/categoria/cadastro', 'vendasj\ProdutoController@create_cat')->name('produto.category');
    Route::get('/produto/Editar/{id}', 'vendasj\ProdutoController@edit')->name('produto.edit');
    Route::put('/produto/Editado/{id}', 'vendasj\ProdutoController@update')->name('produto.update');
    Route::post('/produto/search', 'vendasj\ProdutoController@search')->name('produto.search');
    Route::post('/produto/add', 'vendasj\ProdutoController@store')->name('produto.add');
    Route::get('/produto/delete/{id}', 'vendasj\ProdutoController@destroy')->name('produto.destroy');
});

