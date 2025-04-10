<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <link href="https://myfonts.ru/myfonts?fonts=museo-sans-cyrl" rel="stylesheet" type="text/css" />
        <!-- Styles / Scripts -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    </head>
    <body>
    @include("blocks.header") Сделано
    @include("blocks.cover")  Почти сделано
    {{-- @include("blocks.service-info")
    @include("blocks.advantages") --}}
    @include("blocks.priority")  Сделано
    {{-- @include("blocks.projects")
    @include("blocks.service-info")
    @include("blocks.clients") --}}
    {{-- @include("blocks.thanks")
    @include("blocks.staff") --}}
    {{-- @include("blocks.vacancy")
    @include("blocks.feedback") --}}
    @include("blocks.footer")  Сделано
</body>
</html>
