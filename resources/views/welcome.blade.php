<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .glass-effect {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(30px);
                -webkit-backdrop-filter: blur(30px);
                border: 1px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            }

            .blur-background {
                filter: blur(10px);
                -webkit-filter: blur(10px);
            }
        </style>
    </head>
    <body class="bg-gray-900">
        <div class="min-h-screen flex flex-col items-center justify-center relative">
            <!-- Logo Image -->
            <div class="fixed inset-0 flex items-center justify-center opacity-30 glass-effect -z-10">
                <img src="https://res.cloudinary.com/dmygblav6/image/upload/v1738581630/piclumen-1737719529537_syawkb.png" 
                     alt="Fandom Wear Shop Logo" 
                     class="w-full h-full object-cover mix-blend-screen blur-background" />
            </div>

            <!-- Content Container -->
            <div class="relative z-20 flex flex-col items-center bg-black/40 p-12 rounded-xl backdrop-blur-md">
                <!-- Welcome Text -->
                <h1 class="text-white text-6xl mb-10 font-bold text-shadow">Welcome to Fandom Wear Shop</h1>

                <!-- Auth Buttons -->
                @if (Route::has('login'))
                    <div class="flex gap-16 p-10">
                        @auth
                            <div class="glass-card p-6">
                                <a href="{{ url('/dashboard') }}" class="px-16 py-4 bg-indigo-700 text-white text-lg font-semibold rounded-lg hover:bg-indigo-600 transition-all border-4 border-indigo-500 hover:border-indigo-400 shadow-xl hover:shadow-indigo-500/50 transform hover:scale-105 hover:-translate-y-1">
                                    Dashboard
                                </a>
                            </div>
                        @else
                            <div class="glass-card p-6">
                                <a href="{{ route('login') }}" class="px-16 py-4 bg-indigo-700 text-white text-lg font-semibold rounded-lg hover:bg-indigo-600 transition-all border-4 border-indigo-500 hover:border-indigo-400 shadow-xl hover:shadow-indigo-500/50 transform hover:scale-105 hover:-translate-y-1">
                                    Log in
                                </a>
                            </div>

                            <div class="w-16"></div>

                            @if (Route::has('register'))
                                <div class="glass-card p-6">
                                    <a href="{{ route('register') }}" class="px-16 py-4 bg-purple-700 text-white text-lg font-semibold rounded-lg hover:bg-purple-600 transition-all border-4 border-purple-500 hover:border-purple-400 shadow-xl hover:shadow-purple-500/50 transform hover:scale-105 hover:-translate-y-1">
                                        Register
                                    </a>
                                </div>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>
