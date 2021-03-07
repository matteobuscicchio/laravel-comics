@extends('layouts.app')

@section('title')
Show: {{$comic->title}}
@endsection

@section('back')
<a class="navbar-brand" href="{{ url('/admin') }}">
    Main Page
</a>
<a class="navbar-brand" href="{{ url('/admin/comics') }}">
    Back
</a>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="text-primary">General</h2>
            
            <h4 class="text-info">Cover</h4>
            @if ($comic->cover)
                <img src="{{asset('storage/' . $comic->cover )}}" alt="l'immagine è presente ma non stata caricata">
                @else
                <p class="card-text text-danger">N/A</p>
            @endif
            <h4 class="text-info">Title</h4>
            <p class="card-title text-danger">{{$comic->title}}</p>
            <h4 class="text-info">Description</h4>
            <p class="card-text text-danger">{{$comic->description}}</p>
            
            @if ($comic->jumbotron)
            <h4 class="text-info">Jumbotron</h4>
            <div class="jumbotron" style="background-image: url( {{asset('storage/' . $comic->jumbotron )}} )">
                @else
                <h4 class="text-info">Jumbotron</h4>
                <p class="card-text text-danger">N/A</p>
                @endif
                
                <h4 class="text-info">Slug</h4>
                <p class="card-text text-danger">{{$comic->slug}}</p>

                <h4 class="text-info">Availability</h4>
                <p class="card-text text-danger">
                    @if ($comic->availability == 1)
                        avaiable
                    @else
                    N/A
                    @endif
                </p>
    
                <h2 class="text-primary">Talent</h2>
                <h4 class="text-info">Artist</h4>
                <p class="card-text text-danger">{{$comic->art_by}}</p>
    
                <h4 class="text-info">Writer</h4>
                <p class="card-text text-danger">{{$comic->written_by}}</p>
    
                <h2 class="text-primary">Specs</h2>
                <h4 class="text-info">Series</h4>
                <p class="card-text text-danger">{{$comic->series}}</p>
    
                <h4 class="text-info">Price</h4>
                <p class="card-text text-danger">{{$comic->price}}</p>
    
                <h4 class="text-info">Release date</h4>
                <p class="card-text text-danger">{{$comic->release_date}}</p>
    
                <h4 class="text-info">Volume</h4>
                <p class="card-text text-danger">{{$comic->volume}}</p>
    
                <h4 class="text-info">Trim size</h4>
                <span class="card-text text-danger">
                    @if ($comic->trim_size)
                    {{$comic->trim_size}}
                    @else
                    N/A
                    @endif
                </span>
    
                <h4 class="text-info">page content</h4>
                <span class="card-text text-danger">
                    @if ($comic->page_content)
                    {{$comic->page_content}}
                    @else
                    N/A
                    @endif
                </span>
    
                <h4 class="text-info">Rating</h4>
                <span class="card-text text-danger">
                    @if ($comic->rating)
                    {{$comic->rating}}
                    @else
                    N/A
                    @endif
                </span>
            </div>
        </div>
    </div>
@endsection