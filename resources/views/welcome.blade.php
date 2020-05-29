<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('build/css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white h-screen antialiased leading-none">
<div class="flex flex-col">
    <div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-row h-full">
            <img src="{{ asset('/images/zach_400x400.jpg') }}" class="rounded-full w-48 h-48">
            <div class="flex flex-col justify-center ml-8">
                <h1 class="mb-8 text-4xl font-hairline">Zach Vander Velden</h1>
                <h1 class="text-base font-hairline">Coming soon 🕺</h1>
            </div>
        </div>
    </div>
</div>
</body>
</html>
