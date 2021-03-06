@extends('layouts.app')
@section('title')
Create new Comic
@endsection
@section('content')
<form action="{{ route('admin.comics.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="container">
        <span>* campo obligatorio</span> 
        {{-- title --}}
        <div class="form-group row">
            <label for="title" class="col-sm-1-12 col-form-label text-info">Title*</label>
            <div class="col-md-12-12 col-md-12">
                <input type="text" class="form-control" name="title" value="">
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- description --}}
        <div class="form-group row">
            <label for="description" class="col-sm-1-12 col-form-label text-info">Description</label>
            <div class="col-md-12-12 col-md-12">
                <textarea type="text" class="form-control" name="description" value=""></textarea>
            </div>
        </div>
        
        {{-- cover --}}
        <div class="form-group">
            <label for="cover">Load Comic Poster/Cover</label>
            <input type="file" class="form-control-file" name="cover" id="cover" placeholder="" aria-describedby="fileHelpId">
            @error('cover')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
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

        {{-- art_by --}}
        <div class="form-group row">
            <label for="art_by" class="col-sm-1-12 col-form-label text-info">Artist</label>
            <div class="col-md-12-12 col-md-12">
                <input type="text" class="form-control" name="art_by" value="">
            </div>
        </div>

        {{-- written_by --}}
        <div class="form-group row">
            <label for="written_by" class="col-sm-1-12 col-form-label text-info">Wrigter</label>
            <div class="col-md-12-12 col-md-12">
                <input type="text" class="form-control" name="written_by" value="">
            </div>
        </div>

        {{-- series --}}
        <div class="form-group row">
            <label for="series" class="col-sm-1-12 col-form-label text-info">Series</label>
            <div class="col-md-12-12 col-md-12">
                <input type="text" class="form-control" name="series" value="">
            </div>
        </div>

        {{-- price --}}
        <div class="form-group row">
            <label for="price" class="col-sm-1-12 col-form-label text-info">Price*</label>
            <div class="col-md-12-12 col-md-12">
                <input type="text" class="form-control" name="price" value="">
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- release_date --}}
        <div class="form-group row">
            <label for="release_date" class="col-sm-1-12 col-form-label text-info">Release date</label>
            <div class="col-md-12-12 col-md-12">
                <input type="date" class="form-control" name="release_date" value="">
            </div>
        </div>
        
        {{-- volume --}}
        <div class="form-group row">
            <label for="volume" class="col-sm-1-12 col-form-label text-info">Volume</label>
            <div class="col-md-12-12 col-md-12">
                <input type="text" class="form-control" name="volume" value="">
            </div>
        </div>
        
        {{-- trim size --}}
        <div class="form-group row">
            <label for="trim_size" class="col-sm-1-12 col-form-label text-info">Trim size</label>
            <div class="col-md-12-12 col-md-12">
                <input type="text" class="form-control" name="trim_size" value="">
            </div>
        </div>

        {{-- page count --}}
        <div class="form-group row">
            <label for="page_content" class="col-sm-1-12 col-form-label text-info">Page count</label>
            <div class="col-md-12-12 col-md-12">
                <input type="text" class="form-control" name="page_content" value="">
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

        {{-- Create button --}}
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <input type="submit" value="Create">
            </div>
        </div>
    </div>
</form>
@endsection