<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
        /* Custom Glass Effect */
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">

        <!-- Background with blur effect -->
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-cover bg-center"
             style="background-image: url('https://res.cloudinary.com/dmygblav6/image/upload/v1738581630/piclumen-1737719529537_syawkb.png');">

            <!-- Apply more visible blur effect to the background -->
            <div class="absolute inset-0 bg-black/50 backdrop-blur-lg"></div>

            <!-- Logo -->
            <div>
                <a href="/">
                    <img src="https://res.cloudinary.com/dmygblav6/image/upload/v1738583110/piclumen-1738582764073_dos5be.svg" 
                         alt="Logo" class="w-20 h-20">
                </a>
            </div>

            <!-- Glass Effect Container with blur and transparency -->
            <div class="absolute right-10 top-1/2 transform -translate-y-1/2 w-[480px] h-[796px] glass-effect px-6 py-4">

                <!-- Inner Content (e.g., Form) with a higher opacity background for clarity -->
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white/80 backdrop-blur-[40px] shadow-lg shadow-black/25 rounded-[20px]">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
