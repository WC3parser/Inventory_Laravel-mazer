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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',function(){
    return view('home');
});

Route::get('suppliers', 'App\Http\Controllers\SupplierController@data');
Route::get('suppliers/add', 'App\Http\Controllers\SupplierController@add');
Route::post('suppliers', 'App\Http\Controllers\SupplierController@addProcess');
Route::get('suppliers/edit/{id}', 'App\Http\Controllers\SupplierController@edit');
Route::patch('suppliers/{id}', 'App\Http\Controllers\SupplierController@editProcess');
Route::delete('suppliers/{id}', 'App\Http\Controllers\SupplierController@delete');

Route::resource('produks', 'App\Http\Controllers\ProdukController');
Route::resource('category', 'App\Http\Controllers\CategoryController');
Route::resource('inventory', 'App\Http\Controllers\InventoryController');

Route::post('category/store', 'App\Http\Controllers\CategoryController@store');
Route::get('categories/edit/{id}', 'App\Http\Controllers\CategoryController@edit');
Route::post('category/update/{id}', 'App\Http\Controllers\CategoryController@update');
Route::delete('categories/{id}', 'App\Http\Controllers\CategoryController@delete');
Route::get('categories/show/{id}', 'App\Http\Controllers\CategoryController@show');

Route::post('inventory/store', 'App\Http\Controllers\InventoryController@store');
Route::get('inventory/edit/{id}', 'App\Http\Controllers\InventoryController@edit');
Route::post('inventory/update/{id}', 'App\Http\Controllers\InventoryController@update');
Route::delete('inventory/{id}', 'App\Http\Controllers\InventoryController@delete');
Route::get('inventory/show/{id}', 'App\Http\Controllers\InventoryController@show');