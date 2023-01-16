@extends('guest.layouts.base')
@section('content')
  
    <div class="card">
        @foreach ($comics as $comic)
        <div class="contents">
          <img class="img_card" src="{{$comic['thumb']}}" alt="" />
          <h5>{{ $comic['series']}}</h5>
        </div>
        @endforeach
      </div>
      
@endsection