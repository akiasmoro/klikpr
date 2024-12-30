    <nav class="fixed top-0 z-50 w-full border-gray-200 bg-white shadow-md dark:border-gray-700 dark:bg-gray-900">
        <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img class="h-9" src="{{ asset('img/logo-with-text.png') }}" alt="{{ config('app.name') }} Logo" />
            </a>
    
            <div class="flex items-center justify-end space-x-1 rtl:space-x-reverse md:order-2 md:space-x-0">
                {{-- Theme Toggle --}}
                <button
                    class="rounded-lg p-2.5 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                    id="theme-toggle" 
                    type="button"
                >
                    <svg 
                        class="hidden h-5 w-5" 
                        id="theme-toggle-dark-icon" 
                        fill="currentColor" 
                        viewBox="0 0 20 20"
                    >
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg 
                        class="hidden h-5 w-5" 
                        id="theme-toggle-light-icon" 
                        fill="currentColor" 
                        viewBox="0 0 20 20"
                    >
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
    
                {{-- Language Selector --}}
                <button
                    class="inline-flex cursor-pointer items-center justify-center rounded px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white"
                    data-dropdown-toggle="language-dropdown-menu"
                    type="button"
                >
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5h7m-2-2v2c0 4.418-2.239 8-5 8m1-8c0 2.144 2.952 3.908 6.7 4m-.7 8l4-9 4 9m-4.1-2h-6.2"></path>
                    </svg>
                    <span class="ms-2 hidden sm:block">{{ strtoupper(app()->currentLocale()) }}</span>
                </button>
    
                {{-- Language Dropdown Menu --}}
                <div class="z-50 hidden my-4 list-none divide-y divide-gray-100 rounded-lg bg-white text-base shadow dark:bg-gray-700"
                    id="language-dropdown-menu">
                    <ul class="py-2 font-medium" role="none">
                        @foreach (config('app.available_locales') as $locale_code => $locale_name)
                            <li>
                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    href="{{ route('language.switch', $locale_code) }}" 
                                    role="menuitem"
                                >
                                    <div class="inline-flex items-center">
                                        {{ $locale_name }}
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
    
                {{-- Guest/Auth Links --}}
                @guest
                    @if (user_registration())
                        <a href="{{ route('register') }}" 
                            class="inline-flex cursor-pointer items-center justify-center rounded px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white"
                        >
                            <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span class="ms-2 hidden sm:block">{{ __('Register') }}</span>
                        </a>
                    @endif
                    <a href="{{ route('login') }}"
                        class="inline-flex cursor-pointer items-center justify-center rounded px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white"
                    >
                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                        </svg>
                        <span class="ms-2 hidden sm:block">{{ __('Login') }}</span>
                    </a>
                @endguest
    
                {{-- Authenticated User Menu --}}
                @auth
                    <button
                        class="inline-flex cursor-pointer items-center justify-center rounded px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white"
                        data-dropdown-toggle="user-dropdown-menu"
                        type="button"
                    >
                        <img class="h-9 rounded-md" src="{{ asset(Auth::user()->avatar) }}" alt="User avatar">
                        <span class="ms-2 hidden sm:block">{{ Auth::user()->name }}</span>
                    </button>
    
                    {{-- User Dropdown Menu --}}
                    <div class="z-50 hidden my-4 list-none divide-y divide-gray-100 rounded-lg bg-white text-base shadow dark:bg-gray-700"
                        id="user-dropdown-menu">
                        <ul class="py-2 font-medium" role="none">
                            @can('view_backend')
                                <li>
                                    <a href="{{ route('backend.dashboard') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    >
                                        <svg class="h-5 w-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                        </svg>
                                        {{ __('Admin Dashboard') }}
                                    </a>
                                </li>
                            @endcan
                            <li>
                                <a href="{{ route('frontend.users.profile') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                >
                                    <svg class="h-5 w-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    {{ __('Profile') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                >
                                    <svg class="h-5 w-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                    {{ __('Logout') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                @endauth
    
                {{-- Mobile Menu Toggle --}}
                <button
                    class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                    data-collapse-toggle="navbar-menu"
                    type="button"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
    
            {{-- Main Navigation Menu --}}
            <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto" id="navbar-menu">
                <ul class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0 md:dark:bg-gray-900">
                    <x-frontend.nav-item :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-frontend.nav-item>
                    <x-frontend.nav-item :href="route('frontend.news')" :active="request()->routeIs('frontend.news.*')">
                        {{ __('Posts') }}
                    </x-frontend.nav-item>
                    <x-frontend.nav-item :href="route('frontend.categories.index')" :active="request()->routeIs('frontend.categories.*')">
                        {{ __('Categories') }}
                    </x-frontend.nav-item>
                    <x-frontend.nav-item href="/admin/peta" target="_blank">
                        <div style="display:flex; align-items:center;">
                            <img src="{{ asset('img/logo-klikpr-menu.png') }}"  /> &nbsp;
                            <span>{{ __('KLIKPR') }}</span> 
                        </div>
                    </x-frontend.nav-item>
                </ul>
            </div>
        </div>
    </nav>
