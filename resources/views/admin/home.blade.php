@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <ul class="list-group">
                    <li class="list-group-item active text-center"><a href="{{ route('admin.comics.index') }}" class="text-white">Comics</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection