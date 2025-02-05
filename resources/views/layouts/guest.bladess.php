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

    <!-- Tailwind CSS and Scripts -->
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

    <!-- Background Image with Blur -->
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-cover bg-center"
         style="background-image: url('https://res.cloudinary.com/dmygblav6/image/upload/v1738581630/piclumen-1737719529537_syawkb.png');">

        <!-- Apply background blur to make the form stand out -->
        <div class="absolute inset-0 bg-black/50 backdrop-blur-lg"></div>

        <!-- Logo -->
        <div>
            <a href="/">
                <img src="https://res.cloudinary.com/dmygblav6/image/upload/v1738583110/piclumen-1738582764073_dos5be.svg"
                     alt="Logo" class="w-20 h-20">
            </a>
        </div>

        <!-- Glass Effect Form Container -->
        <div class="absolute right-10 top-1/2 transform -translate-y-1/2 w-[480px] h-[796px] glass-effect px-6 py-4">

            <!-- Form for Login, Register, Forgot Password (Depending on the page) -->
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white/90 shadow-lg rounded-[20px]">
                <!-- Session Status -->
                @if(session('status'))
                    <div class="bg-green-500 text-white p-2 rounded mb-4">
                        {{ session('status') }}
                    </div>
                @endif

                
                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="email">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required
                               autofocus autocomplete="username"
                               class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="password">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                               class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                   name="remember">
                            <span class="ms-2 text-sm text-gray-600">Remember me</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <a href="{{ route('password.request') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md">
                            Forgot your password?
                        </a>

                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 text-white rounded-md text-xs uppercase tracking-widest hover:bg-gray-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Log in
                        </button>
                    </div>
                </form>

                <!-- Register Form Link -->
                <div class="mt-4 text-center">
                    <span class="text-sm text-gray-600">Don't have an account? </span>
                    <a href="{{ route('register') }}" class="text-sm text-indigo-600 hover:text-indigo-800">
                        Register here
                    </a>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
