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

Route::get('/', function () { return view('welcome'); })->name('principal');
Route::get('/contato', function () { return view('contato'); })->name('contato');
Route::get('/servicos', function () { return view('servicos'); })->name('servicos');
Route::get('/login', function () { return view('login'); })->name('login');
Route::get('/cadastro', function () { return view('cadastro'); })->name('cadastro');

Route::get('/app/categoria', 'App\Http\Controllers\CategoriaController@index')->name('app.categoria');
Route::post('/app/categoria', 'App\Http\Controllers\CategoriaController@index')->name('app.categoria');