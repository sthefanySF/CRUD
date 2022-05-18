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

Route::group(['middleware'=> 'web'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

Route::get('/usuario', [\App\Http\Controllers\UsuarioController::class, 'index'])->name('usuario');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/usuario/new', [App\Http\Controllers\UsuarioController::class, 'new'])->name('new');

Route::post('/usuario/add', [App\Http\Controllers\UsuarioController::class, 'add'])->name('add');

Route::get('/usuario/{id}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('edit');

Route::post('/usuario/update/{id}', [App\Http\Controllers\UsuarioController::class, 'update'])->name('update');

Route::delete('/usuario/delete/{id}', [App\Http\Controllers\UsuarioController::class, 'delete'])->name('delete');


