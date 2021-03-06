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
    return view('home');
})->name('home');
Route::get('about', function () {
     return view('about');
})->name('about');

Route::get('portfolio','PortfolioController@index')->name('portfolio');

Route::view('contacto', 'contact')->name('contacto');
Route::post('contacto','ContactController@store');
