@extends('layout')

@section('main')

<section>
    <h1 style="margin: 10px 0px 10px 150px;">Se connecter</h1>
    <div class="card" style="width: 50%; margin: auto">
        <div class="card-body">
            <form action="{{route('auth.login')}}" method="post" class="vstack gap-3">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                    @error("email")
                    {{$message}}
                    @enderror
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error("password")
                    {{$message}}
                    @enderror
                </div>
                <button class="btn btn-primary">Se connecter</button>
            </form>
        </div>
    </div>
</section>

@endsection
