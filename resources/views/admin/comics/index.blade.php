@extends('layouts.app')
@section('content')
    <h1>All Comics</h1>
    <table class="table">
        <thead>
            <tr>
                <th>comic id</th>
                <th>comic title</th>
                <th>description</th>
                <th>artist</th>
                <th>writer</th>
                <th>price</th>
                <th>release dete</th>
                <th>cover</th>
                <th>availability</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td>{{$comic->art_by}}</td>
                <td>{{$comic->written_by}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->release_date}}</td>
                <td>{{$comic->cover}}</td>
                <td>
                    @if($comic->availability === 1)
                    available
                        @else
                            not available
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection