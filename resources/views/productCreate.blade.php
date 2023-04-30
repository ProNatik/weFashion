@extends('layout')

@section('main')
    <form action="{{route('product.store')}}" method="post" style="width: 80%; margin: auto; margin-top:15px;">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" required>
        </div>
        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input type="text" class="form-control" name="picture" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select id="category_id" class="form-select" name="category_id">
                @foreach($categories as $c)
                    <option value={{ $c->id }}>{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="size" class="form-label">Size</label>
            <select id="size" class="form-select" name="size">
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">ADD</button>
    </form>
@endsection
