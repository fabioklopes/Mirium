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

Route::get('/', function () { return view('welcome', ['class' => 'banner_home']); })->name('principal');
Route::get('/contato', function () { return view('contato', ['class' => 'banner_contato']); })->name('contato');
Route::get('/servicos', function () { return view('servicos', ['class' => 'banner_servicos']); })->name('servicos');
Route::get('/login', function () { return view('login', ['class' => 'banner_login']); })->name('login');
Route::get('/cadastro', function () { return view('cadastro', ['class' => 'banner_cadastro']); })->name('cadastro');

Route::get('/app/categoria', 'App\Http\Controllers\CategoriaController@index')->name('app.categoria');
Route::post('/app/categoria', 'App\Http\Controllers\CategoriaController@index')->name('app.categoria');