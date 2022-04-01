@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <h4>


        @foreach ($events as $event)
            <h2>
                #{{ $event['id'] }}:
                {{ $event['title'] }}</h2>
            <h4>{{ $event['description'] }} </h4> <br>
        @endforeach

    </h4>

@endsection
