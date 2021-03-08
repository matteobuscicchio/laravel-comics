@extends('layouts.app')

@section('title')
Show: {{$series->title}}
@endsection

@section('back')
<a class="navbar-brand" href="{{ url('/admin') }}">
    Main Page
</a>
<a class="navbar-brand" href="{{ url('/admin/series') }}">
    Back
</a>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="text-primary">General</h2>
            
            <h4 class="text-info">Cover</h4>
            @if ($series->cover)
                <img src="{{asset('storage/' . $series->cover )}}" alt="l'immagine è presente ma non stata caricata">
                <p>@else
                N/A</p>
            @endif
            <h4 class="text-info">Title</h4>
            <p class="card-title">{{$series->title}}</p>

            <h4 class="text-info">Slug</h4>
            <p class="card-text">{{$series->slug}}</p>
           
        </div>
    </div>
@endsection