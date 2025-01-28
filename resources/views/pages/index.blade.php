@extends('layouts.general')

@section('title', __('messages.home'))

@push('content')
    <main class="relative mt-24 h-96 sm:h-screen flex items-center overflow-hidden">
        <!-- Background pertama (pojok kiri atas) -->
        <div class="parallax-bg absolute top-14 -left-4 sm:top-10 sm:left-16 h-[140px] w-[115px] sm:w-[302px] sm:h-[370px] rounded-xl parallax-1">
        </div>

        <!-- Background kedua (pojok kanan bawah) -->
        <div class="parallax-bg absolute bottom-10 right-0 sm:bottom-16 sm:right-16 w-[90px] h-[110px] sm:w-[242px] sm:h-[290px] rounded-xl parallax-2">
        </div>

        <!-- Konten utama -->
        <div class="mx-auto text-center items-center flex flex-col gap-9">
            <div class="text-3xl sm:text-7xl w-3/4 sm:w-1/2 font-bold text-[#333333] z-10 animate__animated animate__fadeIn uppercase">
                {{ __('messages.home.hero.title') }}
            </div>
            <a href="{{ route('catalog') }}" class="bg-green-primary hover:bg-green-secondary text-white px-6 py-3 rounded-full w-max text-base sm:text-lg z-10 uppercase">
                {{ __('messages.home.hero.cta') }}
            </a>
        </div>
    </main>

    <section class="py-20">
        <div class="px-6 sm:px-16">
            <h2 class="text-5xl font-bold text-center mb-8 text-gray-primary">{{ __('messages.home.collaboration') }}</h2>
            <!-- Swiper -->
            <div class="swiper mySwiper pt-10">
                <div class="swiper-wrapper">
                    <!-- Logo Items -->
                    <div class="swiper-slide">
                        <img src="{{ asset('images/logo-glb.svg') }}" alt="Client 1" class="mx-auto">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/logo-glb.svg') }}" alt="Client 1" class="mx-auto">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/logo-glb.svg') }}" alt="Client 1" class="mx-auto">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/logo-glb.svg') }}" alt="Client 1" class="mx-auto">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/logo-glb.svg') }}" alt="Client 1" class="mx-auto">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/logo-glb.svg') }}" alt="Client 1" class="mx-auto">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/logo-glb.svg') }}" alt="Client 1" class="mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative bg-cover bg-center text-white py-16 about-us-section">
        <div class="px-6 sm:px-16">
            <!-- Tentang Kami -->
            <h2 class="text-lg font-semibold mb-4 uppercase text-center sm:text-start">{{ __('messages.home.about-us.title') }}</h2>
            <div class="flex flex-row-reverse">
                <div class="w-full sm:w-1/2">
                    <p class="text-center sm:text-start text-base sm:text-2xl font-normal leading-relaxed mb-8">
                        {{ __('messages.home.about-us.desc') }}
                    </p>
                    <!-- Statistik -->
                    <div class="flex flex-wrap justify-between mt-8 gap-6 sm:gap-10">
                        <div class="text-center flex-1 flex flex-col gap-3 items-center">
                            <p class="text-6xl font-bold">500+</p>
                            <p class="text-base">{{ __('messages.home.about-us.points.0') }}</p>
                        </div>
                        <div class="text-center flex-1 flex flex-col gap-3 items-center">
                            <p class="text-6xl font-bold">20,000+</p>
                            <p class="text-base">{{ __('messages.home.about-us.points.1') }}</p>
                        </div>
                        <div class="text-center flex-1 flex flex-col gap-3 items-center">
                            <p class="text-6xl font-bold">15+</p>
                            <p class="text-base">{{ __('messages.home.about-us.points.2') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="px-6 sm:px-16">
            <div class="flex flex-wrap items-center justify-between">
                <!-- Deskripsi (Kiri) -->
                <div class="w-full sm:w-2/3 mb-8 sm:mb-0 flex flex-col gap-5 text-center sm:text-start">
                    <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 sm:w-1/2 w-full">{{ __('messages.home.catalog.title') }}</h2>
                    <p class="text-gray-secondary sm:w-5/12 w-full text-lg font-light">
                        {{ __('messages.home.catalog.desc') }}
                    </p>
                    <a href="{{ route('catalog') }}"
                        class="px-6 py-3 bg-green-primary hover:bg-green-secondary text-white rounded-full text-lg transition w-max mx-auto sm:mx-0">
                        {{ __('messages.btn.explore') }}
                    </a>
                </div>

                <!-- Carousel Produk (Kanan) -->
                <div class="w-full sm:w-1/3 relative flex flex-col gap-6">
                    <!-- Wrapper Carousel -->
                    <div
                        id="carousel-wrapper"
                        class="overflow-hidden w-full cursor-grab"
                    >
                        <div
                            id="carousel"
                            class="flex transition-transform duration-500 ease-in-out gap-5"
                            style="transform: translateX(0);"
                        >
                            <!-- Produk 1 -->
                            <div class="flex-shrink-0 w-[300px]">
                                <div class="font-poppins">
                                    <img src="{{ asset('images/home/robusta-coffee-bean.png') }}" alt=""
                                        class="rounded-md mb-4 w-full h-[300px] object-cover" />
                                    <h3 class="text-center text-lg font-medium text-gray-800">Robusta Coffee Bean</h3>
                                </div>
                            </div>
                            <!-- Produk 2 -->
                            <div class="flex-shrink-0 w-[300px]">
                                <div class="font-poppins">
                                    <img src="{{ asset('images/home/arabic-coffee-bean.png') }}" alt=""
                                        class="rounded-md mb-4 w-full h-[300px] object-cover" />
                                    <h3 class="text-center text-lg font-medium text-gray-800">Arabica Coffee Bean</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Navigasi -->
                    <div class="sm:flex flex-row hidden">
                        <button id="prevButton" class="hover:bg-gray-200 text-gray-800 w-10 h-10 flex items-center justify-center">
                            ←
                        </button>
                        <button id="nextButton" class="hover:bg-gray-200 text-gray-800 w-10 h-10 flex items-center justify-center">
                            →
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="px-6 sm:px-16">
            <!-- Heading -->
            <div class="mb-12 flex flex-col sm:flex-row text-center sm:text-start sm:justify-between">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4 sm:w-1/4">{{ __('messages.home.news.title') }}</h2>
                <p class="text-gray-600 text-lg sm:w-1/4">{{ __('messages.home.news.desc') }}</p>
            </div>

            <!-- List News -->
            <div class="flex flex-col sm:flex-row gap-8">
                <div class="flex flex-col w-full sm:w-8/12 gap-4">
                    <img src="{{ asset('images/news-gunung-luhur-berkah-sep-2021.jpg') }}" alt="Pelepasan Ekspor Komoditas Kopi Di Subang Oleh Menteri Koperasi Dan UKM RI" class="w-full h-80 object-cover rounded-md">
                    <div class="flex flex-col gap-4">
                        <p class="text-sm text-[#949494]">September 2021</p>
                        <h3 class="text-lg font-semibold text-gray-800">
                            Pelepasan Ekspor Komoditas Kopi Di Subang Oleh Menteri Koperasi Dan UKM RI
                        </h3>
                        <p class="text-gray-secondary font-light">
                            Menteri Koperasi dan UKM RI, Teten Masduki melakukan kunjungan ke Koperasi Produsen Gunung Luhur Berkah yang berlokasi di Desa Cisalak, Kecamatan Cisalak Subang, Jum'at (17/09/2021)...
                        </p>
                        <a target="_blank" href="https://www.subang.go.id/berita/pelepasan-ekspor-komoditas-kopi-di-subang-oleh-menteri-koperasi-dan-ukm-ri" class="text-green-primary font-bold hover:underline">{{ __('messages.btn.read-more') }}</a>
                    </div>
                </div>
                <div class="flex flex-col w-full sm:w-1/3 gap-4">
                    <img src="{{ asset('images/news-gunung-luhur-berkah-apr-2024.jpg') }}" alt="Koperasi Gunung Luhur Berkah, Melejitkan Nama Kopi Subang" class="w-full h-80 object-cover rounded-md">
                    <div class="flex flex-col gap-4">
                        <p class="text-sm text-[#949494]">April 2024</p>
                        <h3 class="text-lg font-semibold text-gray-800">
                            Koperasi Gunung Luhur Berkah, Melejitkan Nama Kopi Subang
                        </h3>
                        <p class="text-gray-secondary font-light">
                            Koperasi Produsen Gunung Luhur Berkah (GLB) adalah koperasi berskala nasional yang bergerak di bidang pertanian dan perkebunan...
                        </p>
                        <a target="_blank" href="https://idxcoop.kemenkopukm.go.id/blog/koperasi-sektor-pangan/koperasi-gunung-luhur-berkah-melejitkan-nama-kopi-subang" class="text-green-primary font-bold hover:underline">{{ __('messages.btn.read-more') }}</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-8 mt-8">
                <div class="flex flex-col w-full sm:w-1/3 gap-4">
                    <img src="{{ asset('images/news-gunung-luhur-berkah-aug-2024.jpg') }}" alt="Kemenkop UKM ajak investor dukung permodalan koperasi produsen" class="w-full h-80 object-cover rounded-md">
                    <div class="flex flex-col gap-4">
                        <p class="text-sm text-[#949494]">Agustus 2024</p>
                        <h3 class="text-lg font-semibold text-gray-800">
                            Kemenkop UKM ajak investor dukung permodalan koperasi produsen
                        </h3>
                        <p class="text-gray-secondary font-light">
                            Jakarta (ANTARA) - Kementerian Koperasi dan UKM mengajak para investor untuk mendukung permodalan koperasi produsen, salah satunya...
                        </p>
                        <a target="_blank" href="https://www.antaranews.com/berita/4238795/kemenkop-ukm-ajak-investor-dukung-permodalan-koperasi-produsen" class="text-green-primary font-bold hover:underline">{{ __('messages.btn.read-more') }}</a>
                    </div>
                </div>
                <div class="flex flex-col w-full sm:w-8/12 gap-4">
                    <img src="{{ asset('images/news-gunung-luhur-berkah-pelepasan.jpg') }}" alt="Kopi asal Subang Diekspor ke Timur Tengah, 20 Ton Perbulan" class="w-full h-80 object-cover rounded-md">
                    <div class="flex flex-col gap-4">
                        <p class="text-sm text-[#949494]">Agustus 2024</p>
                        <h3 class="text-lg font-semibold text-gray-800">
                            Kopi asal Subang Diekspor ke Timur Tengah, 20 Ton Perbulan
                        </h3>
                        <p class="text-gray-secondary font-light">
                            SUBANG, TINTAHIJAUcom — Kopi asal Subang rupanya digemari lidah warga Timur Tengah. Ini dibuktikan dengan ekspor kopi setiap bulannya tidak kurang dari 20 ton...
                        </p>
                        <a target="_blank" href="https://www.tintahijau.com/ragam/kopi-asal-subang-diekspor-ke-timur-tengah-20-ton-perbulan/" class="text-green-primary font-bold hover:underline">{{ __('messages.btn.read-more') }}</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('news') }}"
                    class="px-6 py-3 bg-green-primary hover:bg-green-secondary text-white rounded-full text-lg transition w-max">
                    {{ __('messages.btn.explore') }}
                </a>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="flex flex-col sm:flex-row items-center gap-3 px-6 sm:px-16">
            <!-- Text Section -->
            <div class="w-full sm:w-1/2 h-72 text-white p-8 rounded-lg shadow-md flex flex-col justify-center contact-us-section gap-8">
                <h2 class="text-3xl sm:text-5xl font-bold">{{ __('messages.home.news.criticism') }}</h2>
                <a href="{{ route('contact-us') }}"
                    class="px-6 py-3 bg-green-primary hover:bg-green-secondary text-white rounded-full text-lg transition w-max">
                    {{ __('messages.home.news.criticism-cta') }}
                </a>
            </div>

            <!-- Image Section -->
            <div class="sm:w-1/2 h-72">
                <img src="{{ asset('images/home/contact-us-section-side.png') }}" alt="Coffee 1" class="w-full h-full object-cover rounded-lg shadow-md">
            </div>
        </div>
    </section>
@endpush

@push('head')
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
@endpush

@push('script')
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('scroll', () => {
            const scrollY = window.scrollY;

            // Ambil elemen paralaks
            const parallaxElements = document.querySelectorAll('.parallax-bg');

            // Terapkan efek paralaks
            parallaxElements.forEach((el, index) => {
                const speed = index === 0 ? 0.2 : 0.5; // Atur kecepatan untuk setiap elemen
                el.style.transform = `translateY(${scrollY * speed}px)`;
            });
        });


        const swiper = new Swiper(".mySwiper", {
            slidesPerView: 2, // Pada mobile, tampil 1 logo
            spaceBetween: 20, // Jarak antar logo
            breakpoints: {
                768: {
                    slidesPerView: 2, // Pada tablet, tampil 2 logo
                },
                1024: {
                    slidesPerView: 4, // Pada desktop, tampil 4 logo
                }
            },
            loop: true, // Infinite scroll
            autoplay: {
                delay: 3000, // 3 detik
                disableOnInteraction: false, // Tidak berhenti saat user berinteraksi
            },
        });

        document.addEventListener('DOMContentLoaded', () => {
            const carousel = document.getElementById('carousel');
            const carouselWrapper = document.getElementById('carousel-wrapper');
            const prevButton = document.getElementById('prevButton');
            const nextButton = document.getElementById('nextButton');
            const totalItems = carousel.children.length;
            let itemWidth = carousel.children[0].offsetWidth;
            let currentIndex = 0;

            let isDragging = false;
            let startX = 0; // Posisi awal mouse/touch
            let currentX = 0; // Posisi saat ini
            let initialScroll = 0; // Posisi scroll awal

            // Fungsi untuk mengupdate posisi carousel
            function updateCarousel() {
                carousel.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
            }

            // Event Tombol Navigasi
            nextButton.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % totalItems;
                updateCarousel();
            });

            prevButton.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + totalItems) % totalItems;
                updateCarousel();
            });

            // Dragging Events
            carouselWrapper.addEventListener('mousedown', (e) => {
                isDragging = true;
                startX = e.clientX;
                initialScroll = currentIndex * itemWidth;
                carouselWrapper.classList.add('active'); // Ubah kursor
            });

            carouselWrapper.addEventListener('mousemove', (e) => {
                if (!isDragging) return;
                const diff = e.clientX - startX; // Perbedaan posisi
                carousel.style.transform = `translateX(${-initialScroll + diff}px)`; // Geser sementara
            });

            carouselWrapper.addEventListener('mouseup', (e) => {
                isDragging = false;
                const diff = e.clientX - startX;
                carouselWrapper.classList.remove('active'); // Reset kursor

                // Geser ke item berikut/terakhir berdasarkan threshold
                if (diff > 50) {
                    currentIndex = Math.max(currentIndex - 1, 0);
                } else if (diff < -50) {
                    currentIndex = Math.min(currentIndex + 1, totalItems - 1);
                }

                updateCarousel();
            });

            carouselWrapper.addEventListener('mouseleave', () => {
                isDragging = false; // Batalkan drag jika keluar area
                carouselWrapper.classList.remove('active');
            });

            // Swipe Events untuk perangkat sentuh
            carouselWrapper.addEventListener('touchstart', (e) => {
                isDragging = true;
                startX = e.touches[0].clientX;
                initialScroll = currentIndex * itemWidth;
                carouselWrapper.classList.add('active');
            });

            carouselWrapper.addEventListener('touchmove', (e) => {
                if (!isDragging) return;
                const diff = e.touches[0].clientX - startX;
                carousel.style.transform = `translateX(${-initialScroll + diff}px)`;
            });

            carouselWrapper.addEventListener('touchend', (e) => {
                isDragging = false;
                carouselWrapper.classList.remove('active');
                const diff = e.changedTouches[0].clientX - startX;

                if (diff > 50) {
                    currentIndex = Math.max(currentIndex - 1, 0);
                } else if (diff < -50) {
                    currentIndex = Math.min(currentIndex + 1, totalItems - 1);
                }

                updateCarousel();
            });

            // Responsive: Update item width saat resize
            window.addEventListener('resize', () => {
                itemWidth = carousel.children[0].offsetWidth;
                updateCarousel();
            });
        });

    </script>
@endpush
