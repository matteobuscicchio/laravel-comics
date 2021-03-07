@extends('layouts.app')

@section('title')
Show: {{$article->title}}
@endsection

@section('back')
<a class="navbar-brand" href="{{ url('/admin') }}">
    Main Page
</a>
<a class="navbar-brand" href="{{ url('/admin/articles') }}">
    Back
</a>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="text-primary">General</h2>
            
            <h4 class="text-info">Cover</h4>
            @if ($article->cover)
                <img src="{{asset('storage/' . $article->cover )}}" alt="l'immagine è presente ma non stata caricata">
                <p>@else
                N/A</p>
            @endif
            <h4 class="text-info">Title</h4>
            <p class="card-title">{{$article->title}}</p>

            <h4 class="text-info">Description</h4>
            <p class="card-text">{{$article->description}}</p>

            <h4 class="text-info">Slug</h4>
            <p class="card-text">{{$article->slug}}</p>

            <h4 class="text-info">Eyelect</h4>
            <p class="card-text">{{$article->eyelet}}</p>
           
        </div>
    </div>
@endsection