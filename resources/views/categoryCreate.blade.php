@extends('layout')

@section('main')
    <form action="{{route('categories.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">ADD</button>
    </form>
@endsection
