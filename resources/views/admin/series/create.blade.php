@extends('layouts.app')

@section('title')
Create new Series
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
<form action="{{ route('admin.series.store') }}" method="post" enctype="multipart/form-data">
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
        
        {{-- cover --}}
        <div class="form-group">
            <label for="cover">Load Serie Poster/Cover</label>
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