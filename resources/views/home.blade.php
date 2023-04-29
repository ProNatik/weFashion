@extends('layout')

@section('main')
@guest
<section style="width:80%; margin: auto; margin-top: 15px; margin-bottonm: 15px; margin-bottom:15px;">
    <div class="row">
    @foreach($products as $product)
        <div class="col-sm-6 mx-auto col-lg-3" style="margin: 20px;">
            <div class="card">
                <div class="card-header">
                    <img class="card-img-top" src="{{$product->picture}}" alt="Card image cap" height="350px">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->price}}€</p>
                    <div style="display:flex; justify-content: space-between">
                        <p class="card-text">{{$product->state}}</p>
                        <a href="{{route('product.show', $product->id)}}" class="btn btn-info">Details</a>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
    </div>
</section>
<div style="display:flex; justify-content: center">{{$products->links()}}</div>
@endguest

@auth
    <div style="margin: 10px 0px 10px 150px; width:80%; display:flex; justify-content:space-between;">
        <a class="btn btn-primary" href="{{route('product.create')}}">CREATE</a>
        <p>Quantity of product : {{$quantity}}</p>
    </div>

    <table class="table table-striped table-bordered" style="width:80%; margin: auto; margin-bottom:15px;">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">State</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}€</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->state }}</td>
                    <td>
                        <a href="{{route('product.edit', $product->id)}}" class="btn btn-info">EDIT</a>
                    </td>
                    <td>
                        <form action="{{route('product.destroy',['product' => $product] )}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div style="display:flex; justify-content: center">{{$products->links()}}</div>

@endauth
@endsection
