@extends('layouts.general')

@section('title', 'Berita')

@push('content')
    <section class="py-16 mt-20 px-6 sm:px-16">
        <div class="mb-20 text-center flex flex-col gap-8">
            <h2 class="text-3xl sm:text-6xl font-bold text-center text-gray-title">{{ __('messages.news.headline') }}</h2>
            <p class="font-poppins font-light text-base sm:text-lg text-gray-secondary">{{ __('messages.news.desc') }}</p>
        </div>
    </section>

    <section class="py-16 font-poppins">
        <div class="px-6 sm:px-16">
            <h2 class="text-2xl sm:text-2xl font-bold text-gray-primary">{{ __('messages.news.all.title') }}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-8">
                <div>
                    <img src="{{ asset('images/news-gunung-luhur-berkah-aug-2024.jpg') }}" alt="Kemenkop UKM ajak investor dukung permodalan koperasi produsen" class="w-full h-72 object-cover rounded-md">
                    <div class="mt-4">
                        <span class="text-[#949494] font-light text-xs">Agustus 2024</span>
                        <h2 class="line-clamp-3 leading-6 mt-2 min-h-[4.5rem]">Kemenkop UKM ajak investor dukung permodalan koperasi produsen</h2>
                        <p class="text-gray-secondary font-light text-sm mb-2 line-clamp-3">Jakarta (ANTARA) - Kementerian Koperasi dan UKM mengajak para investor untuk mendukung permodalan koperasi produsen...</p>
                        <a target="_blank" href="https://www.antaranews.com/berita/4238795/kemenkop-ukm-ajak-investor-dukung-permodalan-koperasi-produsen" class="text-green-primary font-bold hover:underline text-sm">{{ __('messages.btn.read-more') }}</a>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('images/news-gunung-luhur-berkah-apr-2024.jpg') }}" alt="Koperasi Gunung Luhur Berkah, Melejitkan Nama Kopi Subang" class="w-full h-72 object-cover rounded-md">
                    <div class="mt-4">
                        <span class="text-[#949494] font-light text-xs">April 2024</span>
                        <h2 class="line-clamp-3 leading-6 mt-2 min-h-[4.5rem]">Koperasi Gunung Luhur Berkah, Melejitkan Nama Kopi Subang</h2>
                        <p class="text-gray-secondary font-light text-sm mb-2 line-clamp-3">Koperasi Produsen Gunung Luhur Berkah (GLB) adalah koperasi berskala nasional yang bergerak di bidang pertanian dan perkebunan...</p>
                        <a target="_blank" href="https://idxcoop.kemenkopukm.go.id/blog/koperasi-sektor-pangan/koperasi-gunung-luhur-berkah-melejitkan-nama-kopi-subang" class="text-green-primary font-bold hover:underline text-sm">{{ __('messages.btn.read-more') }}</a>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('images/news-gunung-luhur-berkah-mar-2023.jpg') }}" alt="Perkuat MoU, ULBI Tanda Tangani Kerjasama dengan Koperasi Produsen Gunung Luhur Berkah" class="w-full h-72 object-cover rounded-md">
                    <div class="mt-4">
                        <span class="text-[#949494] font-light text-xs">Maret 2023</span>
                        <h2 class="line-clamp-3 leading-6 mt-2 min-h-[4.5rem]">Perkuat MoU, ULBI Tanda Tangani Kerjasama dengan Koperasi Produsen Gunung Luhur Berkah</h2>
                        <p class="text-gray-secondary font-light text-sm mb-2 line-clamp-3">Bandung - Kerjasama bagi Perguruan Tinggi dengan mitra adalah salah satu terobosan yang paling cepat dan efektif...</p>
                        <a target="_blank" href="https://www.ulbi.ac.id/2023/03/perkuat-mou-ulbi-tanda-tangani.html" class="text-green-primary font-bold hover:underline text-sm">{{ __('messages.btn.read-more') }}</a>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('images/news-gunung-luhur-berkah-sep-2018.jpg') }}" alt="Menkop UKM Lepas Ekspor Kopi Koperasi Gunung Luhur Berkah Subang" class="w-full h-72 object-cover rounded-md">
                    <div class="mt-4">
                        <span class="text-[#949494] font-light text-xs">September 2018</span>
                        <h2 class="line-clamp-3 leading-6 mt-2 min-h-[4.5rem]">Menkop UKM Lepas Ekspor Kopi Koperasi Gunung Luhur Berkah Subang</h2>
                        <p class="text-gray-secondary font-light text-sm mb-2 line-clamp-3">Subang - Menteri Koperasi dan UKM Teten Masduki melakukan pelepasan secara simbolis ekspor komoditas kopi Koperasi...</p>
                        <a target="_blank" href="https://www.satukanegeri.com/post/128139/menkop_ukm_lepas_ekspor_kopi_koperasi_gunung_luhur_berkah_subang" class="text-green-primary font-bold hover:underline text-sm">{{ __('messages.btn.read-more') }}</a>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('images/news-gunung-luhur-berkah-sep-2021.jpg') }}" alt="Pelepasan Ekspor Komoditas Kopi Di Subang Oleh Menteri Koperasi Dan UKM RI" class="w-full h-72 object-cover rounded-md">
                    <div class="mt-4">
                        <span class="text-[#949494] font-light text-xs">September 2021</span>
                        <h2 class="line-clamp-3 leading-6 mt-2 min-h-[4.5rem]">Pelepasan Ekspor Komoditas Kopi Di Subang Oleh Menteri Koperasi Dan UKM RI</h2>
                        <p class="text-gray-secondary font-light text-sm mb-2 line-clamp-3">Menteri Koperasi dan UKM RI, Teten Masduki melakukan kunjungan ke Koperasi Produsen Gunung Luhur Berkah yang berlokasi di Desa Cisalak...</p>
                        <a target="_blank" href="https://www.subang.go.id/berita/pelepasan-ekspor-komoditas-kopi-di-subang-oleh-menteri-koperasi-dan-ukm-ri" class="text-green-primary font-bold hover:underline text-sm">{{ __('messages.btn.read-more') }}</a>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('images/news-gunung-luhur-berkah-pelepasan.jpg') }}" alt="Kopi asal Subang Diekspor ke Timur Tengah, 20 Ton Perbulan" class="w-full h-72 object-cover rounded-md">
                    <div class="mt-4">
                        <span class="text-[#949494] font-light text-xs">Agustus 2024</span>
                        <h2 class="line-clamp-3 leading-6 mt-2 min-h-[4.5rem]">Kopi asal Subang Diekspor ke Timur Tengah, 20 Ton Perbulan</h2>
                        <p class="text-gray-secondary font-light text-sm mb-2 line-clamp-3">SUBANG, TINTAHIJAUcom — Kopi asal Subang rupanya digemari lidah warga Timur Tengah. Ini dibuktikan dengan ekspor kopi setiap bulannya tidak kurang dari 20 ton...</p>
                        <a target="_blank" href="https://www.tintahijau.com/ragam/kopi-asal-subang-diekspor-ke-timur-tengah-20-ton-perbulan/" class="text-green-primary font-bold hover:underline text-sm">{{ __('messages.btn.read-more') }}</a>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('images/news-gunung-luhur-berkah-pelepasan-ke-uea.jpg') }}" alt="Sebanyak 311,4 Ton Kopi Subang Diekspor ke UEA" class="w-full h-72 object-cover rounded-md">
                    <div class="mt-4">
                        <span class="text-[#949494] font-light text-xs">Agustus 2024</span>
                        <h2 class="line-clamp-3 leading-6 mt-2 min-h-[4.5rem]">Sebanyak 311,4 Ton Kopi Subang Diekspor ke UEA</h2>
                        <p class="text-gray-secondary font-light text-sm mb-2 line-clamp-3">Koperasi Produsen Gunung Luhur Berkah (GLB) Kabupaten Subang, mengekspor kopi sebanyak 311,4 ton, dari Sistem Resi Gudang (SRG) Subang ke Uni Emirat Arab (UEA)</p>
                        <a target="_blank" href="https://www.rri.co.id/bisnis/912489/sebanyak-311-4-ton-kopi-subang-diekspor-ke-uea" class="text-green-primary font-bold hover:underline text-sm">{{ __('messages.btn.read-more') }}</a>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('images/news-gunung-luhur-berkah-pelepasan-2.jpg') }}" alt="Kopi Subang Merambah Pasar Uni Emirat Arab" class="w-full h-72 object-cover rounded-md">
                    <div class="mt-4">
                        <span class="text-[#949494] font-light text-xs">Agustus 2024</span>
                        <h2 class="line-clamp-3 leading-6 mt-2 min-h-[4.5rem]">Kopi Subang Merambah Pasar Uni Emirat Arab</h2>
                        <p class="text-gray-secondary font-light text-sm mb-2 line-clamp-3">AGRICOM, SUBANG - Badan Pengawas Perdagangan Berjangka Komoditi (Bappebti) melepas ekspor kopi dari Sistem Resi Gudang (SRG) Subang ke Uni Emirat Arab (UEA) pada hari ini, Kamis (15/8) di Koperasi Produsen Gunung Luhur Berkah (GLB), Kabupaten Subang, Jawa Barat.</p>
                        <a target="_blank" href="https://www.agricom.id/news/2527/kopi-subang-merambah-pasar-uni-emirat-arab#google_vignette" class="text-green-primary font-bold hover:underline text-sm">{{ __('messages.btn.read-more') }}</a>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('images/news-gunung-luhur-berkah-pelepasan-ke-kemendag.jpg') }}" alt="Pelepasan Ekspor Komoditas Kopi Sistem Resi Gudang di Subang" class="w-full h-72 object-cover rounded-md">
                    <div class="mt-4">
                        <span class="text-[#949494] font-light text-xs">Agustus 2024</span>
                        <h2 class="line-clamp-3 leading-6 mt-2 min-h-[4.5rem]">Pelepasan Ekspor Komoditas Kopi Sistem Resi Gudang di Subang</h2>
                        <p class="text-gray-secondary font-light text-sm mb-2 line-clamp-3">Kepala Biro Pembinaan dan Pengembangan Sistem Resi Gudang dan Pasar Lelang Komoditas Badan Pengawas Perdagangan Berjangka Komoditi (Bappebti), Heryono Hadi Prasetyo melepas ekspor komoditas kopi melalui gudang Sistem Resi Gudang (SRG) Koperasi Produsen Gudang Luhur Berkah di Kabupaten Subang</p>
                        <a target="_blank" href="https://www.kemendag.go.id/berita/foto/pelepasan-ekspor-komoditas-kopi-sistem-resi-gudang-di-subang" class="text-green-primary font-bold hover:underline text-sm">{{ __('messages.btn.read-more') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endpush
