<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="/logo.svg" />
    <title>{{ config('app.name', 'TicketIn') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/nav.css">

    <nav class="navbar navbar-dark" data-bs-theme="dark">
        <div class="container">

            <a class="navbar-brand" href="#">
            <img src="img/TicketIn.png" alt="TicketIn" width="120" height="26">
            </a>

            @guest
            <a role="button" href="{{ url('/login') }}"><button class="btn btn-outline-success btn-rounded-white" type="submit">Masuk</button></a>
            @endif
            
        </div>
    </nav>
</head>

<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div> 
    <!-- <div id="app">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
							<a href="/" class="text-decoration-none d-inline-flex align-items-center">
								<img class="header-logo-image" src="img/TicketIn.png" alt="TicketIn" width="120" height="26">
                            </a>
                        </h1>
                    </div>
                    <div class="position-relative z-100">
                        <a role="button" href="{{ url('/login') }}" class="text-decoration-none">
                            <button class="btn">Masuk</button>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div> -->
</body>
</html>
