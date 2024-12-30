<footer class="bg-gray-200 p-4 dark:bg-gray-800 sm:p-20">
    <div class="mx-auto max-w-screen-xl">
        <!-- Logo Section -->
        <div class="text-center mb-8">
            <a class="inline-flex items-center justify-center text-2xl font-semibold text-gray-900 dark:text-white" href="/">
                <img class="h-10" src="{{ asset('img/logo-with-text.png') }}" alt="{{ app_name() }} Logo" />
            </a>
            <p class="mx-auto mt-4 text-gray-500 dark:text-gray-400 max-w-2xl">
                <!-- {!! setting('meta_description') !!} -->
            </p>
        </div>

        {{-- <!-- Navigation Links -->
        <nav class="mb-12">
            <ul class="flex flex-wrap items-center justify-center gap-6 text-gray-900 dark:text-white">
                <li>
                    <a class="hover:underline transition-colors" href="#">@lang('About')</a>
                </li>
                <li>
                    <a class="hover:underline transition-colors" href="{{ route('privacy') }}" wire:navigate.hover>@lang('Privacy')</a>
                </li>
                <li>
                    <a class="hover:underline transition-colors" href="{{ route('terms') }}" wire:navigate.hover>@lang('Terms')</a>
                </li>
                <li>
                    <a class="hover:underline transition-colors" href="#">@lang('Contact')</a>
                </li>
            </ul>
        </nav> --}}

        <!-- Contact Information -->
        <div class="max-w-lg mx-auto text-center mb-12">
            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6">Hubungi Kami</h3>
            <ul class="space-y-4 text-gray-600 dark:text-gray-300">
                <li class="flex items-start justify-center">
                    <span class="mr-3 flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#C27803"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg></span>
                    <span>Jalan Dokter Susilo No.1A, Sumur Batu, Teluk Betung, Kota Bandar Lampung</span>
                </li>
                <li class="flex items-center justify-center">
                    <span class="mr-3 flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#C27803"><path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z"/></svg></span>
                    <span>(0721) xxxx</span>
                </li>
                <li class="flex items-center justify-center">
                    <span class="mr-3 flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#C27803"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg></span>
                    <span>infoq@gmail.com</span>
                </li>
            </ul>
        </div>

        <!-- Copyright -->
        <div class="text-center text-sm text-gray-500 dark:text-gray-400 pt-6 border-t border-gray-300 dark:border-gray-700">
            Dinas Perumahan dan Pemukiman Kota Bandar Lampung © 2024
        </div>
    </div>
</footer>