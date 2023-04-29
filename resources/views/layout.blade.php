<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/main.css" />

        <title>{{ $title ?? 'myProducts' }}</title>

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('product.index')}}">weFashion</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('product.index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('filter', 1)}}">Man</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('filter', 2)}}">Woman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('solde')}}">Solde</a>
                    </li>
                    @auth
                    <li class="nav-item" href="#">
                        <a class="nav-link" href="{{route('categories.index')}}">Categories</a>
                    </li>
                    @endauth
                </ul>
                    @auth
                    <span class="navbar-text" style="margin-right: 5px">
                        {{Auth::user()->name}}
                    </span>
                    <form action="{{route('auth.logout')}}" method="post" class="nav-item">
                        @method("delete")
                        @csrf
                        <button class="btn btn-outline-danger">Logout</button>
                    </form>
                    @endauth

                    @guest
                        <a class="navbar-brand" href="{{route('auth.login')}}">Se connecter</a>
                    @endguest
            </div>
        </nav>
    </header>
    <body>
        @yield('main')
    </body>
</html>
