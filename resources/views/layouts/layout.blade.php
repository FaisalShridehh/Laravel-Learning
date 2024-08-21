<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset=" utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class=" h-full">
    <div class="min-h-full">
        @unless (request()->routeIs('auth.create.register') || request()->routeIs('login') )
        <nav class="bg-sky-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://api.dicebear.com/9.x/shapes/svg?seed=Peanut"
                                alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <x-nav-link href="{{route('home.index')}}" :active="request()->routeIs('home.index') ">
                                    Home
                                </x-nav-link>
                                <x-nav-link href="{{route('jobs.index')}}" :active="request()->routeIs('jobs*')">
                                    Jobs</x-nav-link>
                                <x-nav-link href="{{route('contact.index')}}"
                                    :active="request()->routeIs('contact.index')">
                                    Contact</x-nav-link>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        @auth
                        <div class="ml-4 flex items-center md:ml-6">
                            <button type="button"
                                class="relative rounded-full bg-sky-800 p-1 text-sky-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-sky-800">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div class="relative ml-3 flex items-center justify-center gap-5">
                                <div>
                                    <button type="button"
                                        class="relative flex gap-5 pr-4 max-w-lg items-center rounded-full bg-sky-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-sky-800"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-10 w-10 rounded-full"
                                            src="https://xsgames.co/randomusers/avatar.php?g=male" alt="">
                                        <p class="text-white text-xs font-semibold capitalize">{{Auth::user()->name}}</p>
                                    </button>
                                </div>
                            </div>
                            <form action="{{ route('auth.logout') }}" method="post" class="ml-4" >
                                @csrf
                                <x-form.form-button type="submit" class="text-white text-xs font-semibold">Logout</x-form->
                            </form>
                        </div>
                        @endauth
                        <div class="ml-4 flex items-center md:ml-6 gap-5">
                            @guest
                            <x-nav-link href="{{ route('login') }}"
                                :active="request()->routeIs('login')">
                                Login</x-nav-link>
                            <x-nav-link href="{{ route('login') }}"
                                :active="request()->routeIs('auth.create.register')">
                                Register</x-nav-link>
                            @endguest
                        </div>
                    </div>

                </div>
            </div>
        </nav>
        @endunless

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
                @if (request()->routeIs('login') || request()->routeIs('auth.create.register') )
                <div class=" flex justify-between items-center  w-full">
                    <div class="flex-shrink-0 flex items-center gap-5">
                        <img class="h-8 w-8" src="https://api.dicebear.com/9.x/shapes/svg?seed=Peanut"
                            alt="Your Company">
                        <h1 class="text-2xl font-bold tracking text-gray-900 ">{{$heading}}</h1>
                    </div>
                    <div>
                        @if (request()->routeIs('login') )
                        <x-nav-link href="{{ route('auth.create.register') }}" class="bg-sky-900">Register
                        </x-nav-link>
                        @elseif (request()->routeIs('auth.create.register') )
                        <x-nav-link href="{{ route('login') }}" class="bg-sky-900">
                            Login</x-nav-link>
                        @endif
                    </div>
                </div>
                @else
                <h1 class="text-2xl font-bold tracking text-gray-900">{{$heading}}</h1>
                @endif
                @if(request()->routeIs('jobs.index'))
                <x-button href="{{ route('jobs.create') }}">
                    Create Job
                </x-button>
                @endif
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 h-[calc(100vh-9.40rem)]">
                {{$slot}}
            </div>
        </main>
    </div>

</body>

</html>
