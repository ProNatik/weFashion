@extends('layout')

@section('main')
<section>
    <div class="row">
    @foreach($products as $product)
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->price}}€</p>
                    <div style="display:flex";>
                        <a href="{{route('product.show', $product->id)}}" class="btn btn-primary">Details</a>
                        <form action="{{route('product.destroy',['product' => $product] )}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
    </div>

    <div><p>{{$quantity}}</p></div>
    {{$products->links()}}
</section>
@endsection
