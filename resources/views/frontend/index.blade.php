@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')

    <style>
        .flex-lg-row-reverse {
            display: flex;
            flex-direction: row-reverse !important;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }
        .d-block {
            display: block !important;
        }

        .mx-lg-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .col-lg-6 {
            flex: 0 0 auto;
            width: 50%;
            margin: auto;
        }

        .lh-1 {
        line-height: 1 !important;
        }
        .fw-bold {
            font-weight: 700 !important;
        }
        .mb-3 {
            margin-bottom: 1rem !important;
        }
        .display-5 {
            font-size: calc(1.425rem + 2.1vw);
            font-weight: 300;
            line-height: 1.2;
        }
        .lead {
        font-size: 1.25rem;
        font-weight: 300;
        }

        .row1 {
        display: flex;
        flex-wrap: wrap;
        margin-top: calc(var(--bs-gutter-y)* -1);
        margin-right: calc(var(--bs-gutter-x)* -.5);
        margin-left: calc(var(--bs-gutter-x)* -.5);
        }

        .col {
            flex: 1 0 0%;
        }

        .align-items-start {
            align-items: flex-start !important;
        }

        .fw-bold {
            font-weight: 700 !important;
        }
        .mb-0 {
            margin-bottom: 0 !important;
        }

        @media screen and (max-width: 1025px) {
        .col-10 {
            visibility: hidden;
            display: none;
        }
        .col-lg-6 {
            width: 100%;
        }

        }

        .dark\:text-white:is(.dark *) {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

    </style>

    <section class="bg-white dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl px-4 py-24 text-center sm:px-12">
            <div class="m-6 flex justify-center">
                <img class="h-24 rounded" src="{{ asset('img/logo-square.png') }}" alt="{{ app_name() }}">
            </div>
            <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white sm:text-6xl">
                {{ app_name() }}
            </h1>
            <p class="mb-10 text-lg font-normal text-gray-500 dark:text-gray-400 sm:px-16 sm:text-2xl xl:px-48">
                Selamat Datang di 
                <br/>{!! setting('app_description') !!}
            </p>
            <div class="mb-8 flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-x-4 sm:space-y-0 lg:mb-16">
                <!-- <a class="inline-flex items-center justify-center rounded-lg bg-gray-700 px-5 py-3 text-center text-base font-medium text-white hover:bg-gray-800 focus:ring-4 focus:ring-gray-300"
                    href="#r" target="_blank">
                    <svg class="icon icon-tabler icons-tabler-outline icon-tabler-brand-github"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                    </svg>
                    <span class="ms-2">
                        Github
                    </span>
                </a> -->
                <a class="inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-3 text-center text-base font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:border-gray-700 dark:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-800"
                    href="https://bandarlampungkota.go.id/" target="_blank">
                    <svg class="icon icon-tabler icons-tabler-outline icon-tabler-world-www"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M19.5 7a9 9 0 0 0 -7.5 -4a8.991 8.991 0 0 0 -7.484 4" />
                        <path d="M11.5 3a16.989 16.989 0 0 0 -1.826 4" />
                        <path d="M12.5 3a16.989 16.989 0 0 1 1.828 4" />
                        <path d="M19.5 17a9 9 0 0 1 -7.5 4a8.991 8.991 0 0 1 -7.484 -4" />
                        <path d="M11.5 21a16.989 16.989 0 0 1 -1.826 -4" />
                        <path d="M12.5 21a16.989 16.989 0 0 0 1.828 -4" />
                        <path d="M2 10l1 4l1.5 -4l1.5 4l1 -4" />
                        <path d="M17 10l1 4l1.5 -4l1.5 4l1 -4" />
                        <path d="M9.5 10l1 4l1.5 -4l1.5 4l1 -4" />
                    </svg>
                    <span class="ms-2">
                        Situs Kota Bandar Lampung
                    </span>
                </a>
            </div>

            @include('frontend.includes.messages')
        </div>
    </section>

    <section class="bg-gray-100 py-20 text-gray-600 dark:bg-gray-700 dark:text-gray-400">


    <div class="container col-xxl-8 px-4 py-5" style="margin: 0 auto;">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{ asset('img/tentang-1.jpg') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="520" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white sm:text-5xl">Tentang DISPERKIM</h1>
        <p class="lead">Dinas Perumahan dan Pemukiman (DISPERKIM) mempunyai tugas pokok membantu
        Gubernur dalam melaksanakan kewenangan desentralisasi dan dekonsentrasi di bidang Perumahan, Kawasan Permukiman dan Pertanahan sesuai dengan kebijaksanaan yang ditetapkan berdasarkan peraturan perundang-undangan. Situs ini sebagai alat untuk mendukung tugas dan fungsi Dinas PERKIM Kota Bandar Lampung dengan memberikan pelayanan sebagai berikut:</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">

        <div class="row1 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start px-3">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="1.75em" height="1.75em"> <path d="M64 64a64 64 0 1 1 128 0A64 64 0 1 1 64 64zM25.9 233.4C29.3 191.9 64 160 105.6 160l44.8 0c27 0 51 13.4 65.5 34.1c-2.7 1.9-5.2 4-7.5 6.3l-64 64c-21.9 21.9-21.9 57.3 0 79.2L192 391.2l0 72.8c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-115.7c-26.5-9.5-44.7-35.8-42.2-65.6l4.1-49.3zM448 64a64 64 0 1 1 128 0A64 64 0 1 1 448 64zM431.6 200.4c-2.3-2.3-4.9-4.4-7.5-6.3c14.5-20.7 38.6-34.1 65.5-34.1l44.8 0c41.6 0 76.3 31.9 79.7 73.4l4.1 49.3c2.5 29.8-15.7 56.1-42.2 65.6L576 464c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-72.8 47.6-47.6c21.9-21.9 21.9-57.3 0-79.2l-64-64zM272 240l0 32 96 0 0-32c0-9.7 5.8-18.5 14.8-22.2s19.3-1.7 26.2 5.2l64 64c9.4 9.4 9.4 24.6 0 33.9l-64 64c-6.9 6.9-17.2 8.9-26.2 5.2s-14.8-12.5-14.8-22.2l0-32-96 0 0 32c0 9.7-5.8 18.5-14.8 22.2s-19.3 1.7-26.2-5.2l-64-64c-9.4-9.4-9.4-24.6 0-33.9l64-64c6.9-6.9 17.2-8.9 26.2-5.2s14.8 12.5 14.8 22.2z"/></svg>
        <div>
          <h4 class="fw-bold mb-0">Konsultasi Tata Ruang</h4>
          <p>Pengguna dapat melakukan pengajuan konsultasi.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start px-3">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="1.75em" height="1.75em"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24l0 112c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-112c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
        <div>
          <h4 class="fw-bold mb-0">Pengaduan Tata Ruang</h4>
          <p>Pengguna dapat melakukan laporan pengaduan terkait masalah tataruang.</p>
        </div>
      </div>
        </div>

        <div class="row1 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start px-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="1.75em" height="1.75em"><path d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152l0 270.8c0 9.8-6 18.6-15.1 22.3L416 503l0-302.6zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6l0 251.4L32.9 502.7C17.1 509 0 497.4 0 480.4L0 209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77l0 249.3L192 449.4 192 255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/></svg>
        <div>
          <h4 class="fw-bold mb-0">KLIKPR</h4>
          <p>Aplikasi KLIKPR merupakan aplikasi peta interaktif yang berisi informasi pola ruang Kota Bandar Lampung.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start px-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="1.75em" height="1.75em"><path d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zM96 136c0-13.3 10.7-24 24-24c137 0 248 111 248 248c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-110.5-89.5-200-200-200c-13.3 0-24-10.7-24-24zm0 96c0-13.3 10.7-24 24-24c83.9 0 152 68.1 152 152c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-57.4-46.6-104-104-104c-13.3 0-24-10.7-24-24zm0 120a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
        <div>
          <h4 class="fw-bold mb-0">Berita Terkini</h4>
          <p>Info terkini mengenai berita, dan kegiatan dilingkungan DISPERKIM. </p>
        </div>
      </div>
        </div>


        
      </div>
    </div>
  </div>




    
        <div class="container py-5">
            <!-- <div class="w-full text-center lg:w-2/3"> -->
                <!-- <h1 class="mb-4 text-3xl font-medium text-gray-800 dark:text-gray-200 sm:text-4xl">
                    {{ __('Screenshots of the project') }}
                </h1>

                <p class="mb-8 leading-relaxed">
                    In the following section we listed a number of screenshots of different parts of the project, Laravel
                    Starter.
                </p> -->

                
            <!-- </div> -->
        </div>
    </section>

    <section class="bg-white dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl px-4 py-24 text-center sm:px-12">
            <h2 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white sm:text-5xl" style="margin-bottom:4rem;">
                Stakeholder
            </h2>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-x-4 sm:space-y-0 ">
                <a class="inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-3 text-center text-base font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:border-gray-700 dark:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-800"
                    href="#" target="_blank">
                    <img class="h-24 rounded" src="{{ asset('img/lampung.png') }}" alt="{{ app_name() }}">
                </a>
                <a class="inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-3 text-center text-base font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:border-gray-700 dark:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-800"
                href="#" target="_blank">
                    <img class="h-24 rounded" src="{{ asset('img/big.png') }}" alt="{{ app_name() }}">
                </a>
                <a class="inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-3 text-center text-base font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:border-gray-700 dark:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-800"
                    href="href="#"" target="_blank">
                    <img class="h-24 rounded" src="{{ asset('img/brin.png') }}" alt="{{ app_name() }}">
                </a>
            </div>
    </div>
    </section>
@endsection
