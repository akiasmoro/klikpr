<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex flex-col items-center justify-center bg-gray-50 dark:bg-gray-900 py-6 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div class="flex justify-center items-center">
                <a href="/">
                    <img src="{{ asset('img/logo-with-text.png') }}" class="h-20" alt="Default Logo" />
                </a>
            </div>

            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-yellow-400 dark:text-white">
                    {{ __('Masuk ke akun anda') }}
                </h2>
                
            </div>
            <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-6">
                @csrf
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input class="mt-1 block w-full" id="email" name="email" type="email" :value="old('email')" required
                        autocomplete="email" placeholder="{{ __('Masukkan email anda') }}" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Kata sandi')" />
                    <x-text-input class="mt-1 block w-full" id="password" name="password" type="password" required
                        autocomplete="current-password" placeholder="{{ __('Masukkan password anda') }}" />
                    <x-input-error class="mt-2" :messages="$errors->get('password')" />
                </div>

                <!-- Remember Me -->
                <div class="mt-4 flex items-center justify-between">
                    <label class="inline-flex items-center" for="remember_me">
                        <input
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                            id="remember_me" name="remember" type="checkbox">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ingat Saya') }}</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="text-sm font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400"
                            href="{{ route('password.request') }}">
                            {{ __('Lupa Kata sandi?') }}
                        </a>
                    @endif
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <x-primary-button class="w-full flex justify-center items-center">
                        {{ __('Masuk') }}
                    </x-primary-button>
                </div>                

                <p class="mt-2 text-center text-sm text-gray-600 dark:text-gray-400">
                    {{ __('atau') }}
                    <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400">
                        {{ __('Daftar') }}
                    </a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>
