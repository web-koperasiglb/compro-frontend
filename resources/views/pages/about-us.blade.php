@extends('layouts.general')

@section('title', 'About Us')

@push('content')
    <main class="relative mt-[4.5rem] sm:mt-16 h-96 sm:h-screen flex items-center overflow-hidden hero-about-us">
        <!-- Konten utama -->
        <div class="mx-6 sm:mx-16 p-10 flex flex-col items-center sm:items-start text-center sm:text-start gap-4 sm:gap-6 sm:w-1/2 bg-white py-2 sm:py-10 rounded-2xl animate__animated animate__fadeIn">
            <h1 class="text-3xl sm:text-7xl flex flex-col gap-2 font-bold text-[#333333]">{{ __('messages.about-us.hero.headline') }}</h1>
            <p class="text-gray-secondary hero-title font-light text-base">{{ __('messages.about-us.hero.sub-headline') }}</p>
            <a href="{{ route('contact-us') }}" class="bg-green-primary hover:bg-green-secondary text-white px-6 py-3 rounded-full w-max text-lg z-10 uppercase">
                {{ __('messages.btn.contact-us') }}
            </a>
        </div>
    </main>

    <section class="py-16 px-6 sm:px-16">
        <p class="font-bold text-4xl text-center text-gray-title">
            "{{ __('messages.about-us.short-desc') }}"
        </p>
    </section>

    <section class="py-16 px-6 sm:px-16 space-y-14">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="flex flex-col justify-center gap-10">
                <img alt="Gallery Gunung Luhur Berkah" class="w-full h-[430px] object-cover rounded-md" src="{{ asset('images/about-us/gallery-gunung-luhur-berkah-1.png') }}"/>
                <img alt="Gallery Gunung Luhur Berkah" class="w-full h-[320px] object-cover rounded-md" src="{{ asset('images/about-us/gallery-gunung-luhur-berkah-4.png') }}"/>
            </div>
            <div class="flex flex-col justify-center gap-10">
                <img alt="Gallery Gunung Luhur Berkah" class="w-full h-[320px] object-cover rounded-md" src="{{ asset('images/about-us/gallery-gunung-luhur-berkah-2.png') }}"/>
                <img alt="Gallery Gunung Luhur Berkah" class="w-full h-[430px] object-cover rounded-md" src="{{ asset('images/about-us/gallery-gunung-luhur-berkah-5.png') }}"/>
            </div>
            <div class="flex flex-col justify-center gap-10">
                <img alt="Gallery Gunung Luhur Berkah" class="w-full h-[430px] object-cover rounded-md" src="{{ asset('images/about-us/gallery-gunung-luhur-berkah-3.png') }}"/>
                <img alt="Gallery Gunung Luhur Berkah" class="w-full h-[320px] object-cover rounded-md" src="{{ asset('images/about-us/gallery-gunung-luhur-berkah-6.png') }}"/>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row gap-4">
            <div class="sm:w-1/2">
                <img src="{{ asset('images/about-us/gunung-luhur-berkah-mission.png') }}" class="object-cover rounded-md" alt="Misi Gunung Lubur Berkah">
            </div>
            <div class="sm:w-1/2 space-y-2">
                <h2 class="text-3xl text-gray-primary font-semibold">{{ __('messages.about-us.mission') }}</h2>
                <ol class="list-decimal list-inside text-base text-gray-secondary font-light">
                    <li>{{ __('messages.about-us.mission-0') }}</li>
                    <li>{{ __('messages.about-us.mission-1') }}</li>
                    <li>{{ __('messages.about-us.mission-2') }}</li>
                    <li>{{ __('messages.about-us.mission-3') }}</li>
                    <li>{{ __('messages.about-us.mission-4') }}</li>
                    <li>{{ __('messages.about-us.mission-5') }}</li>
                </ol>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row gap-4">
            <div class="sm:w-1/2 space-y-2">
                <h2 class="text-3xl text-gray-primary font-semibold">{{ __('messages.about-us.vision') }}</h2>
                <p class="text-base text-gray-secondary font-light">
                    {{ __('messages.about-us.vision.desc') }}
                </p>
            </div>
            <div class="sm:w-1/2">
                <img src="{{ asset('images/about-us/gunung-luhur-berkah-vision.png') }}" class="object-cover rounded-md" alt="Visi Gunung Lubur Berkah">
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="px-6 sm:px-16">
            <!-- Heading -->
            <div class="mb-12 flex flex-col sm:flex-row text-center sm:text-start sm:justify-between">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4 sm:w-1/3">{{ __('messages.about-us.business.headline') }}</h2>
                <p class="text-gray-secondary text-lg sm:w-1/3 desc-dedication">{{ __('messages.about-us.business.desc') }}</p>
            </div>

            <div class="flex flex-col gap-8">
                <img src="{{ asset('images/about-us/gunung-luhur-berkah-dedication.png') }}" alt="Dedikasi Gunung Luhur Berkah" class="w-full h-80 object-cover rounded-md">
                <div class="flex flex-col sm:flex-row gap-6 sm:gap-10 dedication-wrapper">
                    <h2 class="text-xl sm:text-3xl font-medium text-gray-primary mb-4 sm:w-1/4">{{ __('messages.about-us.business.points') }}</h2>
                    <div class="flex flex-col gap-6 sm:w-3/4">
                        <div class="flex sm:flex-row flex-col gap-4">
                            <!-- item dedication -->
                            <div class="flex flex-col gap-4 border-b border-b-[#D7D7D7] sm:border-0 pb-4 sm:pb-0">
                                <h2 class="text-gray-primary text-base sm:text-xl">{{ __('messages.about-us.business.points.0') }}</h2>
                                <p class="text-gray-secondary font-light text-sm sm:text-base">{{ __('messages.about-us.business.points.0.desc') }}</p>
                            </div>
                            <div class="flex flex-col gap-4 border-b border-b-[#D7D7D7] sm:border-0 pb-4 sm:pb-0">
                                <h2 class="text-gray-primary text-base sm:text-xl">{{ __('messages.about-us.business.points.1') }}</h2>
                                <p class="text-gray-secondary font-light text-sm sm:text-base">{{ __('messages.about-us.business.points.1.desc') }}</p>
                            </div>
                        </div>
                        <hr class="hidden sm:block">
                        <div class="flex sm:flex-row flex-col gap-4">
                            <!-- item dedication -->
                            <div class="flex flex-col gap-4 border-b border-b-[#D7D7D7] sm:border-0 pb-4 sm:pb-0">
                                <h2 class="text-gray-primary text-base sm:text-xl">{{ __('messages.about-us.business.points.2') }}</h2>
                                <p class="text-gray-secondary font-light text-sm sm:text-base">{{ __('messages.about-us.business.points.2.desc') }}</p>
                            </div>
                            <div class="flex flex-col gap-4 border-b border-b-[#D7D7D7] sm:border-0 pb-4 sm:pb-0">
                                <h2 class="text-gray-primary text-base sm:text-xl">{{ __('messages.about-us.business.points.3') }}</h2>
                                <p class="text-gray-secondary font-light text-sm sm:text-base">{{ __('messages.about-us.business.points.3.desc') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="px-6 sm:px-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-title mb-4">{{ __('messages.about-us.business.legality.headline') }}</h2>
            <p class="text-gray-secondary text-lg font-light">{{ __('messages.about-us.business.legality.subheadline') }}</p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-16 font-poppins">
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Cooperative incorporation deed</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">002322/BH/M.KUKM.2/X/2016</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Last change of deed</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">AHU-000088.AH.01.9.TAHUN 2023</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Business Registration Number (NIB)</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">91200511148</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Business Permit	(SIUP)</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">503t1095/DPM	SP/PK/BJ/IX/2019</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Taxt Indentification Number (NPWP)</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">80.678.717.2-439.000</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Registration Certificate Number</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">Wholesaler of Coffee, Tea and Cocoa <br>
                        (46314/10.10.2.46.032723)</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Registration Certificate Number</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">Motorized Transportation for General Goods <br>
                        (49431/10.10.2.46.032724)</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Registration Certificate Number</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">Agricultural Crops for Beverage Ingredients <br>
                        (01270/10.10.2.46.032725)</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Registration Certificate Number</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">Fertilization Services, Planting Seeds/Seeds and Controlling Servies <br>
                        (01612/10.10.2.46.032726)</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Registration Certificate Number</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">Other Warehousing Services <br>
                        (01612/10.10.2.46.032727)</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Registration Certificate Number</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">Coffee and Tea Processing Services <br>
                        (01612/10.10.2.46.032731)</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Affidavit of Residence</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">474/161/SKD/PEM</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Warehouse Management Permit</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">224/BAPPEBTI/Kep-SRG/SP/PG/04/2020</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Permit Letter of Statement of WRS</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">Warehouse decreee WRS Hofland <br>
                        25/BAPPEBTI/Kep-SRG/SP/SP/GD/04/2020</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Permit Letter of Statement of WRS</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">Warehouse decreee WRS PB. Sri Ampeli <br>
                        34/BAPPEBTI/Kep-SRG/SP/SP/GD/05/2020</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Permit Letter of Statement of WRS</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">Warehouse decreee WRS PB. Rizki Wijaya <br>
                        36/BAPPEBTI/Kep-SRG/SP/SP/GD/05/2020</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Export License</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">02.ETK-02.20.0172</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Seed Production Business License</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">525.2/Kep.07/27.1.12.0/DPMPTSP/2020</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">Halal Decree</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">01121258770121</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">SPPB-PSAT</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">861/SPPB/OKKPD-32/09/201</span>
                </div>
                <div>
                    <h1 class="text-base sm:text-xl text-gray-primary">HACCP</h1>
                    <span class="text-xs sm:text-sm text-gray-secondary mt-2">106/MS HACCP/2021</span>
                </div>
            </div>
        </div>
    </section>
@endpush
