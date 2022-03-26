@extends('layouts.main')

@section('title', 'Produto')

@section('content')

    @if ($id != null)
        <h2>Exibindo produto id: {{ $id }}</h2>
    @endif

@endsection
