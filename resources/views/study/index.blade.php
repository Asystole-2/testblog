@extends('layouts.app')

@section('content')
    <h1>Bible Studies</h1>
    <ul>
        @foreach($studies as $study)
            <li>{{ $study->title }}</li>
        @endforeach
    </ul>
@endsection
