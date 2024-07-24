<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: false }"
    x-bind:class="{ 'dark': darkMode === true }" x-init="if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        localStorage.setItem('darkMode', JSON.stringify(false));
    }
    darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-background h-dvh w-dvw overflow-auto">
    <div class="flex h-full w-full relative">
        <livewire:layout.navigation />
        <main class="w-full h-full p-5 gap-5 flex flex-col overflow-auto">
            <!-- Page Heading -->
            @if (isset($header))
                <header class="flex md:items-center text-start md:text-center flex-col md:flex-row gap-2">
                    <div class="w-fit">
                        {{ $header }}
                    </div>
                    @if (isset($action))
                        <div class="md:ml-auto flex gap-2">
                            {{ $action }}
                        </div>
                    @endif
                </header>
            @endif
            {{ $slot }}
        </main>
        <livewire:layout.gotomarketplace />
    </div>
</body>

</html>
