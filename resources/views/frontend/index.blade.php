@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        section {
            overflow: hidden;
        }

        .swiper-button-next,
        .swiper-button-prev {
            width: 50px;
            height: 50px;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 24px;
            font-weight: bold;
            color: #FCD34D;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background-color: #FCD34D;
        }

        .swiper-button-next:hover::after,
        .swiper-button-prev:hover::after {
            color: white;
        }

        .card-transition {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-transition:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(252, 211, 77, 0.2);
        }

        .section-title {
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
            margin-bottom: 2rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #FCD34D 0%, #FBBF24 100%);
            border-radius: 2px;
        }

        .hero-content {
            /* background: rgba(0, 0, 0, 0.5); */
            /* backdrop-filter: blur(4px); */
            padding: 2rem;
            border-radius: 1rem;
        }

        .custom-shadow {
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        }

        .yellow-gradient {
            background: linear-gradient(135deg, #FCD34D 0%, #FBBF24 100%);
            transition: all 0.3s ease;
        }

        .yellow-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(251, 191, 36, 0.3);
        }

        .news-card img {
            transition: transform 0.5s ease;
        }

        .news-card:hover img {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .swiper-container {
                height: 80vh;
            }
        }
    </style>

    <!-- Hero Section -->
    <section class="main-banner overflow-hidden bg-white">
        <div class="swiper-container relative h-screen max-h-[400px] md:max-h-[600px]">
            <div class="swiper-wrapper">
                <div class="swiper-slide animate__animated animate__fadeIn">
                    <div class="relative h-full">
                        <img src="{{ asset('img/bg-2.png') }}" alt="Banner 1" class="hidden md:block w-full md:h-full object-cover">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="hero-content text-center max-w-4xl mx-4">
                                <h1 class="text-4xl md:text-6xl font-bold animate__animated animate__fadeIn text-black/80 mb-6">
                                    SELAMAT DATANG DI PORTAL</h1>
                                <h2 class="text-5xl md:text-7xl font-extrabold animate__animated animate__fadeIn text-yellow-400 mb-8">
                                    DISPERKIM</h2>
                                <p class="text-xl text-black/80 mb-8 max-w-2xl mx-auto">
                                    Portal layanan terpadu untuk konsultasi dan pelaporan tata ruang Kota Bandar Lampung
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-white dark:bg-gray-900 py-24 flex items-center justify-center">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col items-center justify-center">
                <h2 class="text-4xl font-bold text-center section-title">Apa Itu KLIK PR?</h2>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-12">
                <div class="w-full lg:w-[45%]">
                    <img src="{{ asset('img/aboutklikpr.png') }}" alt="Apa Itu KLIK PR" 
                         class="w-full rounded-2xl shadow-2xl hover:shadow-3xl transition-shadow duration-300">
                </div>
                <div class="w-full lg:w-[45%] space-y-6">
                    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed text-justify">
                        <b>KLIK PR adalah platform digital yang memudahkan masyarakat Bandar Lampung untuk berkonsultasi
                        mengenai tata ruang dan melaporkan permasalahan terkait</b>. Melalui platform ini, warga dapat dengan
                        mudah mengajukan pertanyaan tentang peraturan tata ruang, serta melaporkan pengaduan mengenai
                        pelanggaran atau masalah yang ada, seperti penggunaan lahan yang tidak sesuai atau dampak
                        pembangunan yang merugikan.
                    </p>
                    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed text-justify">
                        KLIK PR juga menyediakan informasi terkini tentang kebijakan dan kegiatan tata ruang di Kota Bandar
                        Lampung, memfasilitasi transparansi dan partisipasi aktif warga dalam perencanaan dan pengelolaan
                        ruang kota. Dengan adanya platform ini, diharapkan dapat tercipta komunikasi yang lebih baik antara
                        pemerintah dan masyarakat untuk membangun kota yang lebih teratur dan nyaman.
                    </p>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Consultation Section -->
    <section id="konsultasi" class="bg-gray-100 dark:bg-gray-800 py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col items-center justify-center">
                <h2 class="text-4xl font-bold text-center section-title text-gray-800 dark:text-gray-100">
                    Konsultasi Tata Ruang
                </h2>
                <p class="mt-4 text-lg text-center text-gray-600 dark:text-gray-400 max-w-2xl">
                    Solusi cepat dan terpercaya untuk pertanyaan dan masalah tata ruang Anda. Pilih layanan yang sesuai dengan kebutuhan Anda di bawah ini.
                </p>
            </div>
    
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                <div class="bg-white dark:bg-gray-900 rounded-xl p-8 custom-shadow card-transition">
                    <div class="bg-yellow-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16h8M8 12h4m-4-4h8m-4-6a8 8 0 110 16 8 8 0 010-16z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center text-gray-800 dark:text-gray-100">Bantuan Ahli</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-center leading-relaxed">
                        Konsultasikan permasalahan tata ruang Anda dengan tim ahli kami untuk mendapatkan solusi yang tepat.
                    </p>
                </div>
    
                <div class="bg-white dark:bg-gray-900 rounded-xl p-8 custom-shadow card-transition">
                    <div class="bg-yellow-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M12 14a4 4 0 10-4-4 4 4 0 014 4zm0 0v2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center text-gray-800 dark:text-gray-100">Pertanyaan Umum</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-center leading-relaxed">
                        Temukan jawaban dari berbagai pertanyaan yang sering diajukan mengenai tata ruang di bagian FAQ kami.
                    </p>
                </div>
    
                <div class="bg-white dark:bg-gray-900 rounded-xl p-8 custom-shadow card-transition">
                    <div class="bg-yellow-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-4 6h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center text-gray-800 dark:text-gray-100">Formulir Konsultasi</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-center leading-relaxed">
                        Ajukan permintaan konsultasi melalui formulir khusus kami untuk mendapatkan perhatian langsung dari tim.
                    </p>
                </div>
            </div>
        </div>
    </section>        

    <!-- Report Section -->
    <section id="laporan" class="bg-white dark:bg-gray-900 py-24">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center">
                <h2 class="text-4xl font-bold section-title">Laporan Pengaduan Tata Ruang</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 mb-12 max-w-3xl mx-auto">
                    Laporkan masalah tata ruang di daerah Anda melalui platform kami untuk penanganan yang cepat dan efektif.
                </p>
                <div class="space-y-6">
                    <div class="flex justify-center gap-6">
                        <a href="#" class="yellow-gradient px-8 py-4 rounded-full text-gray-900 font-semibold text-lg inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01m0-12a9 9 0 110 18 9 9 0 010-18z" />
                            </svg>                                                      
                            Laporkan Sekarang
                        </a>
                        <a href="#" class="bg-gray-100 hover:bg-gray-200 px-8 py-4 rounded-full text-gray-700 font-semibold text-lg inline-flex items-center transition-colors duration-300">
                            Lihat Panduan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section id="berita" class="bg-gray-100 dark:bg-gray-800 py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col items-center justify-center">
                <h2 class="text-4xl font-bold text-center section-title text-gray-800 dark:text-gray-100">
                    Berita Terkini
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="bg-white dark:bg-gray-900 rounded-xl overflow-hidden custom-shadow card-transition news-card">
                        <div class="overflow-hidden">
                            <img src="{{ asset('img/tentang-1.jpg') }}" alt="Berita {{ $i }}" 
                                 class="w-full h-56 object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <span class="bg-yellow-100 text-yellow-800 text-sm font-medium px-3 py-1 rounded-full">
                                    Kategori
                                </span>
                                <span class="text-gray-500 text-sm ml-4">1 jam yang lalu</span>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Berita {{ $i }}</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                Deskripsi singkat berita {{ $i }} yang informatif dan menarik untuk dibaca.
                            </p>
                            <a href="#" class="inline-flex items-center text-yellow-500 font-semibold hover:text-yellow-600">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="space-y-6 mt-8">
                <div class="flex justify-center gap-6">
                    <a href="#" class="yellow-gradient px-8 py-4 rounded-full text-gray-900 font-semibold text-lg inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Lihat Semua Berita
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Tutorial Section -->
    <section id="tutorial" class="bg-white dark:bg-gray-900 py-24">
        <div class="max-w-5xl mx-auto px-6">
            <div class="flex flex-col items-center justify-center">
                <h2 class="text-4xl font-bold text-center section-title text-gray-800 dark:text-gray-100">
                    Tutorial Penggunaan KLIK PR
                </h2>
            </div>
            <div class="mt-12">
                <div class="relative rounded-2xl overflow-hidden custom-shadow">
                    <iframe class="w-full aspect-video" 
                            src="https://www.youtube.com/embed/" 
                            frameborder="0" 
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Enhanced Swiper configuration
            const swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    renderBullet: function (index, className) {
                        return '<span class="' + className + ' bg-yellow-400"></span>';
                    }
                },
            });

            // Enhanced scroll animations with intersection observer
            const observerOptions = {
                root: null,
                threshold: 0.1,
                rootMargin: '0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate__animated');
                        
                        // Add different animations based on section
                        if (entry.target.classList.contains('main-banner')) {
                            entry.target.classList.add('animate__fadeIn');
                        } else if (entry.target.id === 'about') {
                            entry.target.classList.add('animate__fadeIn');
                        } else if (entry.target.id === 'konsultasi') {
                            entry.target.classList.add('animate__fadeInLeft');
                        } else if (entry.target.id === 'laporan') {
                            entry.target.classList.add('animate__fadeInRight');
                        } else {
                            entry.target.classList.add('animate__fadeIn');
                        }
                        
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe all sections
            document.querySelectorAll('section').forEach(section => {
                observer.observe(section);
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Add scroll-triggered animations for cards
            const cards = document.querySelectorAll('.card-transition');
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 200);
            });
        });
    </script>
@endsection