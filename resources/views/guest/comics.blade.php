@extends('guest.layouts.base')
@section('content')
    <ul>
        @foreach ($comics as $comic)
        <li>{{ $comic['series'] }}</li>
        @endforeach
       
    </ul>
@endsection