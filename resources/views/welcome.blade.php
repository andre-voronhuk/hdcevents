@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    <h1>
        @if ($hora >= 19 or $hora < 4)
            Boa Noite
        @else
            @if ($hora >= 12)
                Boa Tarde
            @else
                Bom Dia
            @endif
        @endif
        {{ $nome }}!
    </h1>
    <h4>
        {{-- <img src="/img/banner.jpg" alt="Banner" /> --}}

        @foreach ($nomes as $pessoa)
            <p>{{ $loop->index + 1 }} º Nome: {{ $pessoa }}</p>
        @endforeach

    </h4>
    <p>São {{ $hora_atual }}</p>
@endsection
