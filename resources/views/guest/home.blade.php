@extends('layouts.app_guest')
@section('content')
@foreach($comics as $comic)
    <div class="">
        <a href="{{ route('comic', $comic) }}">
            <img src="{{asset('storage/' . $comic->cover )}}" alt="">
        </a>
        <h2>Title:{{$comic->title}}</h2>
        <p>Avaiability:<!-- avaiability -->
            @if($comic->availability === 1)
                avaiable

                @else
                    not avaiable
            @endif
        </p>
    </div>
@endforeach
@endsection