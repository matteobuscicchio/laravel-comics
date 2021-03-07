@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('This is the main Admin Controll Pannel.') }}
                    <br>
                    {{ __('You can now create and edit and delete content from the site. ') }}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">

                <a href="{{ route('admin.comics.index') }}" class="text-white">
                    <div class="list-group">
                        <span class="list-group-item active text-center">
                            Comics
                        </span>
                    </div>
                </a>

                <a href="{{ route('admin.articles.index') }}" class="text-white">
                    <div class="list-group">
                        <span class="list-group-item active text-center">
                            Articles
                        </span>
                    </div>
                </a>

                <a href="{{ route('admin.series.index') }}" class="text-white">
                    <div class="list-group">
                        <span class="list-group-item active text-center">
                            Series
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection