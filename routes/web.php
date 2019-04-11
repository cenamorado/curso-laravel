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
    try {
        Db::connection()-getPdo();
    } catch (\ Exception $e) {
       die("No se conecto ni porra perrin");
    }
});

Route::get('/view', function () {
    $array = [1,2,3,4,5,6];
    return view('view',compact("array"));
});