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

/*Route::get('/', function () {
    return view('welcome');
});
Route::domain('telhasimperio.grupomarkat.com')->group(function () {*/



Route::get('/', 'Imperio\SiteController@index')->name('impoerioHome');
Route::get('/cadastro', 'Imperio\SiteController@cadastro')->name('cadastro');
Route::get('/produtos', 'Imperio\SiteController@produtos')->name('produtos');
Route::post('/carrinho', 'Imperio\SiteController@carrinhoStore')->name('carrinhoStore');
Route::get('/carrinho/{id}', 'Imperio\SiteController@carrinho')->name('carrinho');
Route::post('/carrinhoUpdate', 'Imperio\SiteController@carrinhoUpdate')->name('carrinhoUpdate');
Route::post('/carrinhoDelete', 'Imperio\SiteController@carrinhoDelete')->name('carrinhoDelete');
Route::post('/carrinhoFinalizar', 'Imperio\SiteController@carrinhoFinalizar')->name('carrinhoFinalizar');
Route::get('/produto/{id}', 'Imperio\SiteController@show')->name('show');
Route::post('/salvar_cadastro', 'Imperio\SiteController@store')->name('cadastro.store');
Route::prefix('admin')->group(function () {
    Route::resource('produto_imagens','Imperio\ImagensController');
    Route::resource('produtos','Imperio\ProdutosController');    
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
