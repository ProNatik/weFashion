@extends('layout')

@section('main')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('product.update', $product)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" value="{{$product->description}}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" value="{{$product->price}}" required>
        </div>
        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input type="text" class="form-control" name="picture" value="{{$product->picture}}" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select id="category_id" class="form-select" name="category_id">
                <option value="{{$product->category->id}}">{{$product->category->name}}</option>
                @foreach($categories as $c)
                    <option value={{ $c->id }}>{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">UPDATE</button>
    </form>
@endsection
