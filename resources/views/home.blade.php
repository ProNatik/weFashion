@extends('layout')

@section('main')
{{-- <a href="{{route('newProduct')}}" class="btn btn-primary float-end">NEW</a> --}}
<section>
    @foreach($products as $product)
    <div class="col-10 mx-auto col-sm-6 col-lg-3" style="border: solid 1px black">
        <p>{{$product->name}}</p>
        <p>{{$product->category->name}}</p>

    </div>
    @endforeach
</section>
        {{-- @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td><a href="{{ $product->ressource->url }}">{{ $product->title }}</a></td>
                <td>{{ $product->description }}</td>
                <td>
                    <form action="/product/{{ $product->id }}" method="GET">
                        <button type="submit" class="btn btn-info">UPDATE</button>
                    </form>
                </td>
                <td>
                    <form action="/deleteProduct/{{ $product->id }}" method="DELETE">
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
        @endforeach --}}
@endsection
