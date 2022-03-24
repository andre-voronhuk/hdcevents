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

    $nome = "André";
    $arr = [1, 2, 3, 4, 5];

    date_default_timezone_set("America/Sao_Paulo");

    return view('welcome', [
        'nome' => $nome,
        'hora' => date('H'),
        'horaatual' => date('H:i:s'),
        'arr' => $arr
    ]);
});
Route::get('/contato', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});
