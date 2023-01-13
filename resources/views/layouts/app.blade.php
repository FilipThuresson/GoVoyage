<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app container">
        <div class="row">
            <aside class="col-2 bg-white border-end" style="height: 100vh;">
                <span class="w-100 text-center">
                    <h3 class="mt-5">{{ env('APP_NAME') }}</h3>
                </span>
                <ul class="mt-5 px-4 list-group list-group-flush">
                    <li class="list-group-item rounded-pill border-0 {{ Route::is('index') ? 'active' : '' }}">
                        <a href="{{ route('index') }}" class="link-dark fs-5 text-decoration-none">
                            <i class="bi bi-house"></i> 
                            Home
                        </a>
                    </li>
                    <hr>
                    <li class="list-group-item rounded-pill border-0 {{ Route::is('search') ? 'active' : '' }}">
                        <a href="{{ route('search') }}" class="link-dark fs-5 text-decoration-none">
                            <i class="bi bi-search"></i> 
                            Search
                        </a>
                    </li>
                    <hr>
                    <li class="list-group-item rounded-pill border-0">
                        <a href="" class="link-dark fs-5 text-decoration-none">
                            test
                        </a>
                    </li>
                    <hr>
                    <li class="list-group-item rounded-pill border-0">
                        <a href="" class="link-dark fs-5 text-decoration-none">
                            test
                        </a>
                    </li>
                    <hr>
                    <li class="list-group-item rounded-pill border-0">
                        <a href="" class="link-dark fs-5 text-decoration-none">
                            test
                        </a>
                    </li>
                </ul>
            </aside>
            <main class="col-6 w-75">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
