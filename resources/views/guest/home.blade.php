@extends('layouts.app_guest')
@section('title')
All Comics
@endsection
@section('content')
<main>
    {{-- sezione: COMICS & GRAPHIC NOVELS --}}
    <section class="comic_container">
        <h4>comics & graphic novels</h4>
        <div class="comic_row">
            @foreach($jumbotron as $comic)
                <div class="comic_card">
                    <a class="link" href="{{ route('comic', $comic) }}">
                        <dd>comik book</dd>
                        <img src="{{asset('storage/' . $comic->cover )}}" alt="">
                    </a>
                    <div>{{$comic->title}}</div>
                    <div><!-- avaiability -->
                        @if($comic->availability === 1)
                            Avaiable Now
                            @else
                                Not Avaiable
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- sezione: MUST READS --}}
    <section class="must_read">
        <h2>must reads</h2>
        <div class="comic_row">
            {{-- @foreach($musts as $must)
                <div class="must_card">
                    <img src="{{asset('storage/' . $must->cover )}}" alt="">
                    <p>{{$must->eyelet}}</p>
                    <span>{{$must->title}}</span>
                    <p>{{$must->description}}</p>
                </div>
            @endforeach --}}
        </div>
    </section>
    
    {{-- sezione: CURRENT SERIES --}}
    <section class="current_series">
        <h2>current series</h2>
        <div class="comic_row">
            {{-- @foreach($series as $serie)
                <div class="serie_card">
                    <img src="{{asset('storage/' . $serie->cover )}}" alt="">
                    <p>{{$serie->title}}</p>
                </div>
            @endforeach --}}
        </div>
    </section>
</main>
@endsection