<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
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
    }
}
