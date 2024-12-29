<x-guest-layout>
    <div class="flex flex-col items-center justify-center bg-gray-50 dark:bg-gray-900 py-6 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div class="flex justify-center items-center">
                <a href="/">
                    <img src="{{ asset('img/logo-with-text.png') }}" class="h-20" alt="Logo" />
                </a>
            </div>
            
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-yellow-400 dark:text-white">
                    {{ __('Buat Akun') }}
                </h2>
                
            </div>
            <form method="POST" action="{{ route('register') }}" class="mt-8 space-y-6">
                @csrf

                <!-- Nama -->
                <div>
                    <x-input-label for="name" :value="__('Nama')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                        autofocus autocomplete="name" placeholder="{{ __('Masukkan nama Anda') }}" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Alamat Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                        autocomplete="username" placeholder="{{ __('Masukkan email Anda') }}" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Kata Sandi -->
                <div>
                    <x-input-label for="password" :value="__('Kata Sandi')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" placeholder="{{ __('Masukkan kata sandi Anda') }}" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Konfirmasi Kata Sandi -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required
                        autocomplete="new-password" placeholder="{{ __('Konfirmasi kata sandi Anda') }}" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Tombol Daftar -->
                <div class="mt-6">
                    <x-primary-button class="w-full flex justify-center items-center">
                        {{ __('Daftar') }}
                    </x-primary-button>
                </div>

                <p class="mt-2 text-center text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Sudah punya akun?') }}
                    <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400">
                        {{ __('Masuk') }}
                    </a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>
