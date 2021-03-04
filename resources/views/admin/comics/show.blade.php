@extends('layouts.app')
@section('content')
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h2 class="text-primary">General</h2>
            <h4 class="text-info">Title</h4>
            <p class="card-title">{{$comic->title}}</p>

            <h4 class="text-info">Description</h4>
            <p class="card-text">{{$comic->description}}</p>

            <h4 class="text-info">Slug</h4>
            <p class="card-text">{{$comic->slug}}</p>

            <h4 class="text-info">Cover</h4>
            <span>
                @if ($comic->cover)
                {{$comic->cover}}
                @else
                N/A
                @endif
            </span>

            <h4 class="text-info">Availability</h4>
            <p class="card-text">{{$comic->availability}}</p>

            <h2 class="text-primary">Talent</h2>
            <h4 class="text-info">Artist</h4>
            <p class="card-text">{{$comic->art_by}}</p>

            <h4 class="text-info">Writer</h4>
            <p class="card-text">{{$comic->written_by}}</p>

            <h2 class="text-primary">Specs</h2>
            <h4 class="text-info">Series</h4>
            <p class="card-text">{{$comic->series}}</p>

            <h4 class="text-info">Price</h4>
            <p class="card-text">{{$comic->price}}</p>

            <h4 class="text-info">Release date</h4>
            <p class="card-text">{{$comic->release_date}}</p>

            <h4 class="text-info">Volume</h4>
            <p class="card-text">{{$comic->volume}}</p>

            <h4 class="text-info">Trim size</h4>
            <span>
                @if ($comic->trim_size)
                {{$comic->trim_size}}
                @else
                N/A
                @endif
            </span>

            <h4 class="text-info">page content</h4>
            <span>
                @if ($comic->page_content)
                {{$comic->page_content}}
                @else
                N/A
                @endif
            </span>

            <h4 class="text-info">Rating</h4>
            <span>
                @if ($comic->rating)
                {{$comic->rating}}
                @else
                N/A
                @endif
            </span>
        </div>
    </div>
@endsection