@extends('layouts.app')

@section('content')
    <h1>Bible Verses</h1>
    <ul>
        @foreach($verses as $verse)
            <li><a href="/bible/{{ $verse['reference'] }}">{{ $verse['reference'] }}</a>: {{ $verse['text'] }}</li>
        @endforeach
    </ul>
@endsection
