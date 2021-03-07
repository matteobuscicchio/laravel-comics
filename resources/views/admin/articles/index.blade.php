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
    <h1>All Articles</h1>
    <ul class="list-group">
        <li class="list-group-item active text-center"><a class="text-white" href="{{ route('admin.articles.create') }}">Create New Article</a></li>
    </ul>
    <table class="table">
        <thead>
            <tr>
                <th>Article ID</th>
                <th>Article title</th>
                <th></th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td scope="row">{{$article->id}}</td>
                    <td>{{$article->title}}</td>
                    
                    <td>
                        <div class="dropdown open">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Option
                            </button>
                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                <a class="dropdown-item" href="{{ route('admin.articles.edit', $article) }}">Edit</a>
                                <a class="dropdown-item" href="{{ route('admin.articles.show', $article) }}">Show</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <form action="{{route('admin.articles.destroy', $article->slug )}}" method="post">
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