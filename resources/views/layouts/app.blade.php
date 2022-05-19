<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                        <a href="/">{{ __('The Bookshelf') }}</a>
                    </h1>
                    {{ $header }}
                </div>
                <div>
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            <a href="{{ url('/dictionary') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dictionary</a>
                            @auth
                                <a href="{{ url('/my_stories') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">My Stories</a>
                                <!-- Logout -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
    
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
                
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            {{-- Footer --}}
            <footer class="bg-gray-100">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <div class="font-semibold text-x3 text-gray-500 leading-tight text-center">
                        <a href="https://github.com/SashaMGuerra/the_bookshelf" target="_blank">
                            <img width="25" src="{{ asset("images/footer/github_logo.png") }}"  alt="repository" style="display: inline-block">
                        </a>
                        {{ __('Made by Sasha') }} 
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
