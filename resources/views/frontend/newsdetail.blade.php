@extends('frontend.layouts.app')

@section('title')
    Detail Berita
@endsection

@section('content')
<!-- Detail Berita Section -->
<section id="detail-berita" class="bg-gray-100 dark:bg-gray-800 py-24">
    <div class="max-w-5xl mx-auto px-6">

        <!-- Header -->
        <div class="mb-12 text-center">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-100">
                Judul Berita
            </h1>
            <p class="text-gray-500 mt-4">
                Dipublikasikan pada: 12 Desember 2024 | 1 jam yang lalu
            </p>
        </div>

        <!-- Gambar Utama -->
        <div class="mb-8">
            <img src="{{ asset('img/tentang-1.jpg') }}" alt="Gambar Berita"
                class="w-full object-cover rounded-xl shadow-md">
        </div>

        <!-- Konten Berita -->
        <div class="prose lg:prose-xl dark:prose-invert mx-auto">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vehicula ex eu volutpat sodales. 
                Aenean efficitur, neque non luctus sagittis, ipsum elit porttitor turpis, vel tincidunt sapien velit nec urna.
            </p>
            <p>
                Donec vulputate, nulla a varius lacinia, nisi purus porttitor justo, a laoreet enim lorem at nisl. Suspendisse ac risus nec arcu 
                vehicula dignissim. Curabitur eget orci in mi vehicula luctus sit amet id metus.
            </p>
            <h2>Subjudul yang Menarik</h2>
            <p>
                Quisque ut diam sit amet purus laoreet egestas ac ac libero. Sed eget ex sit amet arcu vehicula dapibus. 
                Cras nec metus ac lectus pharetra consequat et a lorem.
            </p>
            <blockquote>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum."
            </blockquote>
        </div>

        <!-- Tombol Kembali -->
        <div class="mt-12 text-center">
            <a href="{{ route('frontend.index') }}" 
                class="inline-flex items-center px-8 py-4 text-white bg-yellow-500 hover:bg-yellow-600 rounded-full font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Kembali ke Beranda
            </a>
        </div>
    </div>
</section>
@endsection
