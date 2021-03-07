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
    <h1>All Comics</h1>
    <ul class="list-group">
        <li class="list-group-item active text-center"><a class="text-white" href="{{ route('admin.comics.create') }}">Create New Comic</a></li>
    </ul>
    <table class="table">
        <thead>
            <tr>
                <th>Comic ID</th>
                <th>Comic title</th>
                <th>Artist</th>
                <th>Writer</th>
                <th>Price</th>
                <th>Release dete</th>
                <th>Avaiability</th>
                <th></th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
                <tr>
                    <td scope="row">{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->art_by}}</td>
                    <td>{{$comic->written_by}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->release_date}}</td>
                    <td> <!-- avaiability -->
                        @if($comic->availability === 1)
                            avaiable

                            @else
                            not avaiable
                        @endif
                    </td>
                    <td>
                        <div class="dropdown open">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Option
                            </button>
                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                <a class="dropdown-item" href="{{ route('admin.comics.edit', $comic) }}">Edit</a>
                                <a class="dropdown-item" href="{{ route('admin.comics.show', $comic) }}">Show</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <form action="{{route('admin.comics.destroy', $comic->slug )}}" method="post">
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