@extends('layouts.app')
@section('content')
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <form>

                <div class="form-group row">
                    <label for="title" class="col-sm-1-12 col-form-label text-info">Title</label>
                    <div class="col-md-12-12 col-md-12">
                        <input type="text" class="form-control" name="title" value="{{$comic->title}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-sm-1-12 col-form-label text-info">Description</label>
                    <div class="col-md-12-12 col-md-12">
                        <textarea type="text" class="form-control" name="title" value="">{{$comic->description}}</textarea>
                    </div>
                </div>
                
                {{-- SEZIONE DA MODIFICARE --}}
                <div class="form-group row">
                    <label for="cover" class="col-sm-1-12 col-form-label text-info">Cover</label>
                    <div class="col-md-12-12 col-md-12">
                        <input type="text" class="form-control" name="cover" value="{{$comic->cover}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price" class="col-sm-1-12 col-form-label text-info">Price</label>
                    <div class="col-md-12-12 col-md-12">
                        <input type="text" class="form-control" name="price" value="{{$comic->price}}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="trim_size" class="col-sm-1-12 col-form-label text-info">Trim size</label>
                    <div class="col-md-12-12 col-md-12">
                        <input type="text" class="form-control" name="trim_size" value="{{$comic->trim_size}}">
                    </div>
                </div>
                                
                <div class="form-group row">
                    <label for="page_content" class="col-sm-1-12 col-form-label text-info">Page content</label>
                    <div class="col-md-12-12 col-md-12">
                        <input type="text" class="form-control" name="page_content" value="{{$comic->page_content}}">
                    </div>
                </div>
                                                
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

                <div class="form-group row">
                    <label for="availability" class="col-lg-12 col-form-label text-info">Availability</label>

                    <div class="col-md-1">
                        <input type="radio" class="form-check-input" name="availability" value="1">
                        <label class="form-check-lable" for="availability">Available</label>
                    </div>
                    <div class="col-md-2">
                        <input type="radio" class="form-check-input" name="availability" value="0">
                        <label class="form-check-lable" for="availability">Not Available</label>
                    </div>
                </div>

                <fieldset class="form-group row">
                    <legend class="col-form-legend col-sm-1-12">Group name</legend>
                    <div class="col-sm-1-12">
                        
                    </div>
                </fieldset>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Action</button>
                    </div>
                </div>
            </form>
        </div>
    </form>
@endsection