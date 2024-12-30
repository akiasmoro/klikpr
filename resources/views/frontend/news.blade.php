@extends('frontend.layouts.app')

@section('title')
    Detail Berita
@endsection

@section('content')
<!-- News Section -->
<section id="berita" class="bg-gray-100 dark:bg-gray-800 py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            @for ($i = 1; $i <= 9; $i++)
                <div class="bg-white dark:bg-gray-900 rounded-xl overflow-hidden custom-shadow card-transition news-card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('img/tentang-1.jpg') }}" alt="Berita {{ $i }}" 
                             class="w-full h-56 object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="text-gray-500 text-sm">1 jam yang lalu</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Berita {{ $i }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Deskripsi singkat berita {{ $i }} yang informatif dan menarik untuk dibaca.
                        </p>
                        <a href="{{ route('frontend.newsdetail') }}" class="inline-flex items-center text-yellow-500 font-semibold hover:text-yellow-600">
                            Baca Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endfor
        </div>
        {{-- <div class="space-y-6 mt-8">
            <div class="flex justify-center gap-6">
                <a href="#" class="yellow-gradient px-8 py-4 rounded-full text-gray-900 font-semibold text-lg inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    Lihat Semua Berita
                </a>
            </div>
        </div> --}}
    </div>
</section>
@endsection
