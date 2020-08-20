<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
// // Categorias
// Route::get('/categorias', 'ControladorCategoria@index');
// Route::get('/categorias/novo', 'ControladorCategoria@create');

// Route::get('/categorias/apagar/{id}', 'ControladorCategoria@destroy');
// Route::get('/categorias/editar/{id}', 'ControladorCategoria@edit');

// Route::post('/categorias', 'ControladorCategoria@store');
// Route::post('/categorias/{id}', 'ControladorCategoria@update');
// // Produtos
// Route::get('/produtos', 'ControladorProduto@indexView');

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/categorias', 'CategoryController@index')->name('category');
});
