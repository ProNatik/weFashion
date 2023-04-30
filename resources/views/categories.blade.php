@extends('layout')

@section('main')
@auth

    <a class="btn btn-primary" href="{{route('categories.create')}}" style="margin: 10px 0px 10px 150px;">Create</a>
    <table class="table table-striped table-bordered" style="width:80%; margin: auto; margin-bottom:15px;">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <form action="{{route('categories.destroy',['category' => $category] )}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endauth
@endsection
