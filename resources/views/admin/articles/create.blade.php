@extends('layouts.app')

@section('title')
Create new Articles
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
<form action="{{ route('admin.articles.store') }}" method="post" enctype="multipart/form-data">
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

        {{-- eyelet --}}
        <div class="form-group row">
            <label for="eyelet" class="col-sm-1-12 col-form-label text-info">Eyelet</label>
            <div class="col-md-12-12 col-md-12">
                <textarea type="text" class="form-control" name="eyelet" value=""></textarea>
            </div>
        </div>
        
        {{-- cover --}}
        <div class="form-group">
            <label for="cover">Load Comic Poster/Cover</label>
            <input type="file" class="form-control-file" name="cover" aria-describedby="fileHelpId">
            @error('cover')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
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