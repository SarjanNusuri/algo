<!DOCTYPE html>
<html lang="en" x-data="darkMode()" x-init="init()" :data-theme="theme" class="scroll-smooth">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>TechStartup — Digital Solutions Agency</title>
        @stack('styles')

        <link rel="stylesheet" href="{{ asset('assets/css/icon/css/font-awesome.css') }}">
        
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet"/>
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <meta
            name="description"
            content="TechStartup — Web Development, UI/UX Design & Creative Branding. Tim mahasiswa dengan kualitas internasional."
        />
    </head>
    <body class="antialiased transition-colors duration-300 bg-white text-slate-800 dark:bg-gray-900 dark:text-lightText dark">
        {{ $slot }}
        
        <x-toparrow/>
        @stack('scripts')
    </body>
</html>
