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
    return view('home');
}) -> name('home');


Route::get('/', 'ProductController@index') -> name('prodotti');


Route::get('/contacts', function () {
    return view('contacts');
}) -> name('contatti');

Route::get('/products/{id}', function ($id) {
    return view('product', compact('id'));
}) -> name('prodotti.singolo');
