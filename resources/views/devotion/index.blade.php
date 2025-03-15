@extends('layouts.app')

@section('content')
    <h1>Daily Devotions</h1>
    <ul>
        @foreach($devotions as $devotion)
            <li>
                <a href="{{ route('devotion.show', $devotion->id) }}">{{ $devotion->title }}</a> - {{ $devotion->date->format('F j, Y') }}
            </li>
        @endforeach
    </ul>
@endsection
