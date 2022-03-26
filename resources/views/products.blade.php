@extends('layouts.main')

@section('title', 'Produtos!')

@section('content')
    <h2>Aqui estao alguns produtos!</h2>
    @if ($busca != '')
        <p>O usuario está buscando por: {{ $busca }}</p>
    @endif
@endsection
