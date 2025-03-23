<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    
        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        {{-- <div>
            <div>
                <a href="/">
                    Logo
                    <x-application-logo />
                </a>
            </div>

            <div>
                {{ $slot }}
            </div>
        </div> --}}
        
        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
            {{ $slot }}
        </div>
        
        @livewireScripts
    </body>
</html>
