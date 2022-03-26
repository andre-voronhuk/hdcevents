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
    $nomes = ["Alice", "João", "Marcio", "Lucas"];

    date_default_timezone_set("America/Sao_Paulo");

    return view('welcome', [
        'nome' => $nome,
        'hora' => date('H'),
        'hora_atual' => date('H:i:s'),
        'arr' => $arr,
        'nomes' => $nomes
    ]);
});
Route::get('/contato', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products',['busca'=>$busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product',['id'=>$id]);
});
