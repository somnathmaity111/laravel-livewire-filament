<nav class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="nav-left" class="flex items-center">
        <a href="{{ route('home') }}">
            <x-application-mark />
        </a>
        <div class="top-menu ml-10">
            <div class="flex space-x-4">
                {{-- <li>
                    <a class="flex space-x-2 items-center hover:text-yellow-900 text-sm text-yellow-500"
                        href="{{route("home")}}">
                        Home
                    </a>
                </li> --}}
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
                        {{ __('Blog') }}
                    </x-nav-link>
                </div>

            </div>
        </div>
    </div>
    <div id="header-right" class="flex items-center md:space-x-6">
        @auth
            @include('layouts.partials.haeder-right-auth')
        @else
            @include('layouts.partials.header-right-guest')
        @endauth
        
    </div>
</nav>
