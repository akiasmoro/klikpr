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

        .main-banner {
            background-image: url('{{ asset('img/lampung-hero.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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
    <section class="main-banner overflow-hidden bg-white relative">
        <div class="swiper-container relative h-screen max-h-[400px] md:max-h-[700px]">
            <div class="swiper-wrapper">
                <div class="swiper-slide animate__animated animate__fadeIn">
                    <div class="relative h-full">
                        {{-- <img src="{{ asset('img/lampung-hero.png') }}" alt="Banner 1" class="hidden md:block w-full md:h-full object-cover"> --}}
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="hero-content text-center max-w-4xl mx-4">
                                <h1 class="text-4xl md:text-6xl font-bold animate__animated animate__fadeIn text-black/80 mb-6">
                                    Selamat datang di Portal</h1>
                                <h2 class="text-5xl md:text-8xl font-extrabold animate__animated animate__fadeIn text-yellow-500 mb-8">
                                    TATA RUANG</h2>
                                <h3 class="text-5xl md:text-8xl font-extrabold animate__animated animate__fadeIn text-yellow-500 mb-8">
                                    DINAS PERUMAHAN DAN PERMUKIMAN KOTA BANDAR LAMPUNG</h3>
                                <p class="text-xl text-black/80 mb-8 max-w-2xl mx-auto">
                                    Portal Layanan Terpadu Untuk Informasi Tata Ruang, Konsultasi Tata Ruang dan Pelaporan Masalah Tata Ruang.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                         class="w-full rounded-2xl transition-shadow duration-300">
                </div>
                <div class="w-full lg:w-[45%] space-y-6">
                    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed text-justify">
                        <b>KLIK PR adalah “Keterangan Langsung Informasi Kesesuaian Pemanfaatan Ruang Ruang”.</b> Merupakan platform digital yang memudahkan Masyarakat Bandar Lampung untuk memperoleh informasi peruntukan tata ruang, berkonsultasi mengenai tata ruang dan melaporkan permasalahan terkait tata ruang.  ini, warga dapat dengan mudah mengajukan pertanyaan tentang peraturan tata ruang, serta melaporkan pengaduan mengenai pelanggaran atau masalah yang ada, seperti penggunaan lahan yang tidak sesuai atau dampak pembangunan yang merugikan. KLIK PR juga menyediakan informasi terkini tentang kebijakan dan  kegiatan tata ruang di Kota Bandar Lampung , memfasilitasi transparansi dan partisipasi aktif warga dalam perencanaan dan pengelolaan ruang kota. Dengan adanya platform ini, diharapkan dapat tercipta komunikasi yang lebih baik antara pemerintah dan masyarakat untuk membangun kota yang lebih teratur dan nyaman.
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
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#C27803"><path d="M880-80 720-240H320q-33 0-56.5-23.5T240-320v-40h440q33 0 56.5-23.5T760-440v-280h40q33 0 56.5 23.5T880-640v560ZM160-473l47-47h393v-280H160v327ZM80-280v-520q0-33 23.5-56.5T160-880h440q33 0 56.5 23.5T680-800v280q0 33-23.5 56.5T600-440H240L80-280Zm80-240v-280 280Z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center text-gray-800 dark:text-gray-100">Bantuan Ahli</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-center leading-relaxed">
                        Konsultasikan permasalahan tata ruang Anda dengan tim ahli kami untuk mendapatkan solusi yang tepat.
                    </p>
                </div>
    
                <div class="bg-white dark:bg-gray-900 rounded-xl p-8 custom-shadow card-transition">
                    <div class="bg-yellow-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#C27803"><path d="m480-80-10-120h-10q-142 0-241-99t-99-241q0-142 99-241t241-99q71 0 132.5 26.5t108 73q46.5 46.5 73 108T800-540q0 75-24.5 144t-67 128q-42.5 59-101 107T480-80Zm80-146q71-60 115.5-140.5T720-540q0-109-75.5-184.5T460-800q-109 0-184.5 75.5T200-540q0 109 75.5 184.5T460-280h100v54Zm-101-95q17 0 29-12t12-29q0-17-12-29t-29-12q-17 0-29 12t-12 29q0 17 12 29t29 12Zm-29-127h60q0-30 6-42t38-44q18-18 30-39t12-45q0-51-34.5-76.5T460-720q-44 0-74 24.5T344-636l56 22q5-17 19-33.5t41-16.5q27 0 40.5 15t13.5 33q0 17-10 30.5T480-558q-35 30-42.5 47.5T430-448Zm30-65Z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center text-gray-800 dark:text-gray-100">Pertanyaan Umum</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-center leading-relaxed">
                        Temukan jawaban dari berbagai pertanyaan yang sering diajukan mengenai tata ruang di bagian FAQ kami.
                    </p>
                </div>
    
                <div class="bg-white dark:bg-gray-900 rounded-xl p-8 custom-shadow card-transition">
                    <div class="bg-yellow-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#C27803"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h168q13-36 43.5-58t68.5-22q38 0 68.5 22t43.5 58h168q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm80-80h280v-80H280v80Zm0-160h400v-80H280v80Zm0-160h400v-80H280v80Zm200-190q13 0 21.5-8.5T510-820q0-13-8.5-21.5T480-850q-13 0-21.5 8.5T450-820q0 13 8.5 21.5T480-790ZM200-200v-560 560Z"/></svg>
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
                            src="https://www.youtube.com/embed/zRH6882G1pc?si=8G2clfAw5BLnvYiP"" 
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
