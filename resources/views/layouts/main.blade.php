<!DOCTYPE html>
<html lang="ru" class="{{ request()->cookie('theme', 'light') === 'dark' ? 'dark' : '' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <meta name="keywords" content="{{$keywords}}">
    <meta name="description" content="{{$description}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-zinc-200 dark:bg-zinc-700">
   <x-header/>
    <main>
        {{ $slot }}
    </main>
    <x-footer/>
</body>
</html>