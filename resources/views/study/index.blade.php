@extends('layouts.app')

@section('content')
    <h1>{{ $study->topic }}</h1>
    <p>{{ $study->description }}</p>
    <a href="{{ url('/study') }}">Back to Studies</a>
@endsection
