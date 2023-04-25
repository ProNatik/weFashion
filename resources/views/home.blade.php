@extends('layout')

@section('main')
<a href="{{route('newBookmark')}}" class="btn btn-primary float-end">NEW</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookmarks as $bookmark)
            <tr>
                <th scope="row">{{ $bookmark->id }}</th>
                <td><a href="{{ $bookmark->ressource->url }}">{{ $bookmark->title }}</a></td>
                <td>{{ $bookmark->description }}</td>
                <td>
                    <form action="/bookmark/{{ $bookmark->id }}" method="GET">
                        <button type="submit" class="btn btn-info">UPDATE</button>
                    </form>
                </td>
                <td>
                    <form action="/deleteBookmark/{{ $bookmark->id }}" method="DELETE">
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
