@extends('layouts.app')

@section('content')
    <h1>{{ $devotion->title }}</h1>
    <p><strong>Date:</strong> {{ $devotion->date->format('F j, Y') }}</p>
    <p>{{ $devotion->content }}</p>
    <a href="{{ url('/devotion') }}">Back to Devotions</a>
@endsection
