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

Route::get('/page', function () {
    return view('templates.page');
});

Route::get('/sobre', function () {
    return view('about');
});

Route::get('/produto', 'vendasj\ProdutoController@index')->name('admin.produto');
Route::get('/produto/cadastro', 'vendasj\ProdutoController@create')->name('produto.create');
Route::get('/produto/Editar/{id}', 'vendasj\ProdutoController@edit')->name('produto.edit');
Route::post('/produto/search', 'vendasj\ProdutoController@search')->name('produto.search');
Route::post('/produto/add', 'vendasj\ProdutoController@store')->name('produto.add');

Route::get('/admin', function () {
    return view('auth.login');
});

Auth::routes();


Route::get('/logout', 'HomeController@logout')->name('logout');


Route::get('/home', 'HomeController@index')->name('home');
