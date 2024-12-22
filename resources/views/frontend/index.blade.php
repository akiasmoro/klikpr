@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        .swiper-button-next,
        .swiper-button-prev {
            width: 30px;
            height: 30px;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 20px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: rgba(197, 187, 0, 0.5);
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            color: rgba(158, 150, 5, 0.8);
        }

        @media (max-width: 768px) {
            .swiper-container {
                height: 60vh;
            }

            .description-section {
                padding: 2rem 1rem;
            }

            .description-section img {
                width: 100%;
                height: auto;
                margin-bottom: 1rem;
            }

            .grid-cols-3 {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- Main Banner -->
    <section class="main-banner overflow-hidden">
        <div class="swiper-container relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide animate__animated animate__fadeIn">
                    <div class="relative">
                        <img src="{{ asset('img/bg-2.png') }}" alt="Banner 1" class="w-full">
                        <!-- Overlay Text -->
                        <div
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
                            <h1 class="text-2xl font-medium animate__animated animate__fadeIn text-gray-800">SELAMAT DATANG</h1>
                            <h2 class="text-2xl font-semibold animate__animated animate__fadeIn text-gray-800">DI PORTAL</h2>
                            <h3 class="text-6xl font-bold animate__animated animate__fadeIn text-gray-800">DISPERKIM</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination absolute top-4 left-0 right-0 mx-auto"></div>
        </div>
    </section>

    <!-- Section: Apa Itu KLIK PR -->
    <section class="description-section bg-white dark:bg-gray-900 py-16 px-6 md:px-20">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8 animate__animated animate__fadeInUp">Apa Itu KLIK PR?</h2>
            <div class="flex flex-wrap justify-center items-center">
                <div class="w-full md:w-1/2 px-3">
                    <img src="https://via.placeholder.com/600x400" alt="Apa Itu KLIK PR"
                        class="w-full rounded-lg shadow-lg animate__animated animate__zoomIn">
                </div>
                <div class="w-full text-justify md:w-1/2 animate__animated animate__slideInRight">
                    <p class="text-gray-400 px-3">
                        KLIK PR adalah platform digital yang memudahkan masyarakat Bandar Lampung untuk berkonsultasi
                        mengenai tata ruang dan melaporkan permasalahan terkait. Melalui platform ini, warga dapat dengan
                        mudah mengajukan pertanyaan tentang peraturan tata ruang, serta melaporkan pengaduan mengenai
                        pelanggaran atau masalah yang ada, seperti penggunaan lahan yang tidak sesuai atau dampak
                        pembangunan yang merugikan.
                    </p>
                    <p class="text-gray-400 px-3 mt-3 hidden lg:block">
                        KLIK PR juga menyediakan informasi terkini tentang kebijakan dan kegiatan tata ruang di Kota Bandar
                        Lampung, memfasilitasi transparansi dan partisipasi aktif warga dalam perencanaan dan pengelolaan
                        ruang kota. Dengan adanya platform ini, diharapkan dapat tercipta komunikasi yang lebih baik antara
                        pemerintah dan masyarakat untuk membangun kota yang lebih teratur dan nyaman.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Konsultasi Tata Ruang -->
    <section class="consultation-section bg-gray-200 dark:bg-gray-800 py-12 px-6 md:px-24">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold text-center mb-6 animate__animated animate__fadeIn">Konsultasi Tata Ruang</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div
                    class="p-6 rounded-lg shadow-md text-center bg-white dark:bg-gray-900 animate__animated animate__bounceIn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-yellow-300 mx-auto" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h3v3H9zm0 4h3v3H9zm5-9h3v3h-3zm0 4h3v3h-3z" />
                    </svg>
                    <h3 class="text-xl font-semibold mb-4">Bantuan Ahli</h3>
                    <p class="text-gray-400">Dapatkan bantuan dari para ahli...</p>
                </div>
                <div
                    class="p-6 rounded-lg shadow-md text-center bg-white dark:bg-gray-900 animate__animated animate__slideInUp">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-yellow-300 mx-auto" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 6h12M8 12h12M8 18h12" />
                    </svg>
                    <h3 class="text-xl font-semibold mb-4">Pertanyaan Umum</h3>
                    <p class="text-gray-400">Cek FAQ...</p>
                </div>
                <div
                    class="p-6 rounded-lg shadow-md text-center bg-white dark:bg-gray-900 animate__animated animate__fadeInUp">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-yellow-300 mx-auto" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 9h4m4 0h2m-6 4h2m-6 4h2m-4 4h8M8 5h4m4 4h2m-6 0h2" />
                    </svg>
                    <h3 class="text-xl font-semibold mb-4">Formulir Konsultasi</h3>
                    <p class="text-gray-400">Isi formulir konsultasi...</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Laporan Pengaduan -->
    <section class="report-section bg-gray-200 dark:bg-gray-800 py-12 px-6 md:px-24">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-6 animate__animated animate__fadeInDown">Laporan Pengaduan Tata Ruang</h2>
            <p class="text-lg text-gray-400 mb-6 animate__animated animate__fadeIn">Laporkan masalah tata ruang di daerah
                Anda melalui platform kami.</p>
            <a href="#"
                class="bg-yellow-300 px-6 py-3 rounded-lg shadow-md text-black hover:bg-yellow-400 animate__animated animate__pulse">Laporkan
                Sekarang</a>
        </div>
    </section>

    <!-- Section: Berita Terkini -->
    <section class="news-section bg-gray-200 dark:bg-gray-800 py-12 px-6 md:px-24">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold text-center mb-6 animate__animated animate__fadeIn">Berita Terkini</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 rounded-lg shadow-md bg-white dark:bg-gray-900 animate__animated animate__fadeInUp">
                    <img src="https://via.placeholder.com/150x150" alt="Berita 1" class="rounded-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">Berita 1</h3>
                    <p class="text-gray-400">Deskripsi singkat berita 1.</p>
                    <button
                        class="bg-yellow-300 text-sm px-4 py-2 rounded-lg text-black shadow-md mt-4">Selengkapnya</button>
                </div>
                <div class="p-6 rounded-lg shadow-md bg-white dark:bg-gray-900 animate__animated animate__fadeInUp">
                    <img src="https://via.placeholder.com/150x150" alt="Berita 1" class="rounded-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">Berita 1</h3>
                    <p class="text-gray-400">Deskripsi singkat berita 1.</p>
                    <button
                        class="bg-yellow-300 text-sm px-4 py-2 rounded-lg text-black shadow-md mt-4">Selengkapnya</button>
                </div>
                <div class="p-6 rounded-lg shadow-md bg-white dark:bg-gray-900 animate__animated animate__fadeInUp">
                    <img src="https://via.placeholder.com/150x150" alt="Berita 1" class="rounded-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">Berita 1</h3>
                    <p class="text-gray-400">Deskripsi singkat berita 1.</p>
                    <button
                        class="bg-yellow-300 text-sm px-4 py-2 rounded-lg text-black shadow-md mt-4">Selengkapnya</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Tutorial -->
    <section class="tutorial-section bg-gray-200 dark:bg-gray-800 py-12 px-6 md:px-24">
        <div class="flex flex-col items-center">
            <h2 class="text-3xl font-semibold text-center mb-4 animate__animated animate__fadeInDown">Tutorial Penggunaan
                KLIK PR</h2>
            <iframe class="w-full md:w-2/3 h-64 rounded-lg shadow-lg animate__animated animate__fadeInUp"
                src="https://www.youtube.com/embed/your-video-id" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });
    </script>
@endsection
