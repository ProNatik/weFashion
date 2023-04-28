@extends('layout')

@section('main')
<div class="card text-center">
    <div class="card-header">
        <img class="card-img-top" src="..." alt="Card image cap">
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">{{$product->description}}</p>
        <p class="card-text">{{$product->category->name}}</p>
    </div>
    @auth
        <div class="card-footer text-muted" style="display:flex">
            <a href="{{route('product.edit', $product->id)}}" class="btn btn-primary">Edit</a>
            <form action="{{route('product.destroy',['product' => $product] )}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    @endauth
  </div>

@endsection
