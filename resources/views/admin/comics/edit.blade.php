@extends('layouts.app')

@section('title')
Edit: {{$comic->title}}
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
    <form action="{{ route('admin.comics.update', $comic) }}" method="post" enctype="multipart/form-data">
        @csrf

        @method('patch')

        <div class="container">

            {{-- title --}}
            <div class="form-group row">
                <label for="title" class="col-sm-1-12 col-form-label text-info">Title</label>
                <div class="col-md-12-12 col-md-12">
                    <input type="text" class="form-control" name="title" value="{{$comic->title}}">
                </div>
            </div>

            {{-- description --}}
            <div class="form-group row">
                <label for="description" class="col-sm-1-12 col-form-label text-info">Description</label>
                <div class="col-md-12-12 col-md-12">
                    <textarea type="text" class="form-control" name="description" value="">{{$comic->description}}</textarea>
                </div>
            </div>
            
            {{-- cover --}}
            <div class="form-group">
                @if ($comic->cover)
                    <dd>This is the actual Poster/Cover</dd>
                    <img src="{{asset('storage/' . $comic->cover )}}" alt="l'immagine è presente ma non stata caricata">
                @endif
                <br>
                <br>
                <dd for="cover">Load Comic Poster/Cover</dd>
                <input type="file" class="form-control-file" name="cover" placeholder="" aria-describedby="fileHelpId">
            </div>
            @error('cover')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- jumbotron --}}
            <div class="form-group">
                @if ($comic->jumbotron)
                    <dd>This is the actual jumbotron</dd>
                    <img style="width: 200px;" src="{{asset('storage/' . $comic->jumbotron )}}" alt="l'immagine è presente ma non stata caricata">
                @endif
                <br>
                <br>
                <label for="jumbotron">Load Comic jumbotron</label>
                <input type="file" class="form-control-file" name="jumbotron" placeholder="" aria-describedby="fileHelpId">
            </div>
            @error('jumbotron')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            {{-- price --}}
            <div class="form-group row">
                <label for="price" class="col-sm-1-12 col-form-label text-info">Price</label>
                <div class="col-md-12-12 col-md-12">
                    <input type="text" class="form-control" name="price" value="{{$comic->price}}">
                </div>
            </div>
            
            {{-- trim size --}}
            <div class="form-group row">
                <label for="trim_size" class="col-sm-1-12 col-form-label text-info">Trim size</label>
                <div class="col-md-12-12 col-md-12">
                    <input type="text" class="form-control" name="trim_size" value="{{$comic->trim_size}}">
                </div>
            </div>

            {{-- page count --}}
            <div class="form-group row">
                <label for="page_content" class="col-sm-1-12 col-form-label text-info">Page count</label>
                <div class="col-md-12-12 col-md-12">
                    <input type="text" class="form-control" name="page_content" value="{{$comic->page_content}}">
                </div>
            </div>
                            
            {{-- rating --}}
            <div class="form-group row">
                <label for="rating" class="col-lg-12 col-form-label text-info">Rating</label>

                <div class="col-md-1">
                    <input type="radio" class="form-check-input" name="rating" value="Kids">
                    <label class="form-check-lable" for="rating">Kids</label>
                </div>
                <div class="col-md-1">
                    <input type="radio" class="form-check-input" name="rating" value="Teen">
                    <label class="form-check-lable" for="rating">Teen</label>
                </div>
                <div class="col-md-1">
                    <input type="radio" class="form-check-input" name="rating" value="Mature">
                    <label class="form-check-lable" for="rating">Mature</label>
                </div>
            </div>

            {{-- avaiability --}}
            <div class="form-group row">
                <label for="availability" class="col-lg-12 col-form-label text-info">Avaiability</label>

                <div class="col-md-1">
                    <input type="radio" class="form-check-input" name="availability" value="1">
                    <label class="form-check-lable" for="availability">Avaiable</label>
                </div>
                <div class="col-md-2">
                    <input type="radio" class="form-check-input" name="availability" value="0">
                    <label class="form-check-lable" for="availability">Not Avaiable</label>
                </div>
            </div>

            {{-- Update button --}}
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <input type="submit" value="Update">
                </div>
            </div>
        </div>
    </form>
@endsection