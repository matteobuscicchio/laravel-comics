@extends('layouts.app_guest')
@section('title')
Comic | {{$comic->title}}
@endsection
@section('content')
<main class="show">

    <div class="jumbotron" style="background-image: url('../storage/posts_img/jumbo.jpg')">
    
    </div>
    
    <div class="header_show">
        <div class="container">
            {{-- <div class="show_cover">
                <img src="{{asset('storage/' . $comic->cover )}}" alt="">
            </div> --}}
    
            <div class="show_cover">
                <a href="{{ route('comic', $comic) }}">
                    <img src="{{asset('storage/' . $comic->cover )}}" alt="">
                </a>
                <dd>comik book</dd>
            </div>
        </div>
    </div>
    
    <div class="generl_info_container">
        <div class="info_box">
            <h1>{{$comic->title}}</h1>
            <div class="info_price">
                <div class="left">
                    <span>U.S. Price: {{$comic->price}}</span>
                    <span><!-- avaiability -->
                        @if($comic->availability === 1)
                            Avaiable
    
                            @else
                                Not Avaiable
                        @endif
                    </span>
                </div>
                <div class="right">
                    Buy Now
                </div>
            </div>
            <p>{{$comic->description}}</p>
        </div>
    </div>
    
    
    <section class="comic_details">
        <div class="details_container">
            <div class="talent">
                <h3>Talent</h3>
                <span>Artist:
                    <span>{{$comic->art_by}}</span>
                </span>
                <span>Wrighter:
                    <span>{{$comic->written_by}}</span>
                </span>
            </div>
    
            <div class="specs">
                <h3>Specs</h3>
                <span> Series:
                    <span>{{$comic->series}}</span>
                </span>
                <span>U.S Price: {{$comic->price}}</span>
                <span>On Sale Date: {{$comic->release_date}}</span>
                <span>Volume/Issue #: {{$comic->volume}}</span>
                <span>Trim Size: {{$comic->trim_size}}</span>
                <span>Page Count: {{$comic->page_content}}</span>
                <span>Rated: {{$comic->rating}}</span>
            </div>
        </div>
    </section>
</main>

@endsection