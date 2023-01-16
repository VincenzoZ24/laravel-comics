@extends('guest.layouts.base')
@section('content')
   @foreach ($comics as $comic)
    <div class="card">
        
        <div class="contents">
          <img class="img_card" src="{{$comic['thumb']}}" alt="" />
          <h5>{{ $comic['series']}}</h5>
        </div>
        
      </div>
      @endforeach
@endsection