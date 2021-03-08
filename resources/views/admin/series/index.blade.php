@extends('layouts.app')

@section('title')
Admin Control Pannel
@endsection

@section('back')
<a class="navbar-brand" href="{{ url('/admin') }}">
    Main Page
</a>
@endsection

@section('content')
    <h1>All Series</h1>
    <a class="text-white" href="{{ route('admin.series.create') }}">
        <ul class="list-group">
            <li class="list-group-item active text-center">
                Create New Article
            </li>
        </ul>
    </a>
    <table class="table">
        <thead>
            <tr>
                <th>Serie ID</th>
                <th>Serie title</th>
                <th></th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($series as $serie)
                <tr>
                    <td scope="row">{{$serie->id}}</td>
                    <td>{{$serie->title}}</td>
                    
                    <td>
                        <div class="dropdown open">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Option
                            </button>
                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                <a class="dropdown-item" href="{{ route('admin.series.edit', $serie) }}">Edit</a>
                                <a class="dropdown-item" href="{{ route('admin.series.show', $serie) }}">Show</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <form action="{{route('admin.series.destroy', $serie->slug )}}" method="post">
                            @csrf
                            @method('delete')
                           <button type="submit" class="btn btn-success">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection