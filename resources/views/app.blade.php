<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        {{-- Temporarily commented out Vite directives
        @viteReactRefresh
        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        --}}
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

        <!-- Temporary message -->
        <div style="position: fixed; bottom: 20px; right: 20px; background: #f59e0b; color: white; padding: 10px; border-radius: 5px; font-size: 14px;">
            Frontend assets not loaded - Run "npm run dev"
        </div>
    </body>
</html>