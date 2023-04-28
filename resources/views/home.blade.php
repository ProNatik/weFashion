@extends('layout')

@section('main')
@guest
<section>
    <div class="row">
    @foreach($products as $product)
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->price}}€</p>
                    <p class="card-text">{{$product->state}}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>

    <div><p>{{$quantity}}</p></div>
    {{$products->links()}}
</section>
@endguest

@auth
    <a class="btn btn-primary" href="{{route('product.create')}}">Create</a>
    <table class="table">
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
                        <a href="{{route('product.edit', $product->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('product.destroy',['product' => $product] )}}" method="post">
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
