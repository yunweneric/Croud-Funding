<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.app3')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

</head>


<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 no-underline ml-2">Dashboard</a>
                    <a href="{{ url('/campeign') }}" class="text-sm text-gray-700 no-underline ml-2">Campeigns</a>
                    <a href="{{ url('/posts') }}" class="text-sm text-gray-700 no-underline ml-2">Donations</a>
                    <form action="{{ url('/logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit " class="text-sm text-gray-700 no-underline ml-2">
                            Logout </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 no-underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 no-underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        @if (Route::has('login'))
            @auth
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                        <h1 class="text-gray-600 font-bold">I-DONATIONS</h1>

                    </div>

                    <div class="container mt-6">
                        <p class="text-gray-600 text-sm mb-6">Thanks for your donation<br> We are glad and appreciate every
                            kind jesture from your. Be rest assured that your contibutions will go a long way to help
                            others.

                        </p>


                        <div class="flex">
                            <a href="{{ url('/posts') }}"
                                class="group relative w-3/12 flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white primary-bg hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 "
                                type="submit">
                                See Donations
                            </a>
                            <a href="{{ url('/campeign') }}"
                                class="group relative w-3/12 flex justify-center inline py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white primary-bg hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 ml-8"
                                type="submit">
                                Donate Again!
                            </a>
                        </div>
                    </div>
                </div>
            @else
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                        <h1 class="text-gray-600 font-bold">I-DONATIONS</h1>

                    </div>

                    <div class="container mt-6">
                        <p class="text-gray-600 text-sm mb-6">Welcome to I-donate and I-Campeign, The best online campeign,
                            donation ans support platfrom ever.
                            <br>Signup today and taste the difference!
                        </p>


                        <div class="flex">
                            <a href="{{ url('/addcampeign') }}"
                                class="group relative w-2/12 flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white primary-bg hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 "
                                type="submit">
                                About us
                            </a>
                            <a href="{{ url('/addcampeign') }}"
                                class="group relative w-2/12 flex justify-center inline py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white primary-bg hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 ml-8"
                                type="submit">
                                our blog
                            </a>
                        </div>
                    </div>
                </div>
            @endauth
        @endif
    </div>
</body>

</html>
