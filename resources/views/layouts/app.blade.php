<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Zach Vander Velden</title>

    <!-- Scripts -->
    <script src="{{ asset('build/js/app.js') }}"></script>

    <!-- Styles -->
    <link href="{{ mix('build/css/app.css') }}" rel="stylesheet">

    <livewire:styles>
</head>
<body class="min-h-screen antialiased leading-none container mx-auto pt-8 md:pt-16 lg:pt-32 px-8 md:px-16 lg:px-48">

    <div class="flex flex-row h-full mb-16">
        <a href="{{ route('welcome') }}" class="w-40 h-40 flex flex-col justify-center">
            <img src="{{ asset('/images/zach_400x400.jpg') }}" class="rounded-full" alt="Zach Vander Velden">
        </a>

        <div class="flex flex-col justify-center pl-8 md:pl-24 w-full">
            <h1>
                <a href="{{ route('welcome') }}" class="font-hairline text-gray-700 hover:text-gray-900">
                    Zach Vander Velden
                </a>
            </h1>

            <div class="flex flex-row">
                <a href="{{ route('projects') }}" class="mr-8 {{ \Illuminate\Support\Facades\Request::routeIs('projects') ? 'active' : '' }}">
                    Projects
                </a>
                <a href="{{ route('posts.index') }}" class="mr-8 {{ \Illuminate\Support\Facades\Request::routeIs('posts.index') ? 'active' : '' }}">
                    Blog
                </a>
                <a href="{{ route('contact') }}" class="{{ \Illuminate\Support\Facades\Request::routeIs('contact') ? 'active' : '' }}">
                    Contact
                </a>
            </div>
        </div>
    </div>


    @yield('content')

    <livewire:scripts>
</body>
</html>
