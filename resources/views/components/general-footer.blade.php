  <!-- Footer -->
  <footer class="bg-[#000000] text-white">
    <div class="px-6 sm:px-16 py-10">
        <div class="flex flex-col sm:flex-row justify-between items-center sm:items-start gap-8">
            <!-- Logo & Address -->
            <img src="{{ asset('images/logo-glb.svg') }}" alt="Logo" class="w-24 h-24 mb-4">
            <div class="flex flex-col items-start text-base gap-6 sm:gap-0 w-full sm:w-1/3">
                <div class="flex flex-col gap-2 text-sm sm:text-base">
                    <p>Kp. Babakan RT 001 RW 004, Desa Cisalak, Kecamatan Cisalak, Subang, Indonesia 41283</p>
                    <a href="tel:082243222423">+62 822-4322-2423</a>
                    <a href="mailto:gunungluhurkopi@gmail.com">gunungluhurkopi@gmail.com</a>
                </div>

                <div class="sm:hidden text-sm sm:text-base flex flex-col sm:flex-row gap-4 sm:gap-8 sm:text-left">
                    <a href="{{ route('home') }}">{{ __('messages.home') }}</a>
                    <a href="{{ route('about-us') }}">{{ __('messages.about-us') }}</a>
                    <a href="{{ route('catalog') }}">{{ __('messages.catalog') }}</a>
                    <a href="{{ route('news') }}">{{ __('messages.news') }}</a>
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="border-t border-gray-700 mt-8 pt-6 text-center text-sm flex flex-col sm:flex-row justify-between gap-8">
            <div class="font-light text-sm">
                <span>&copy; {{ date('Y') }} Koperasi Produsen Gunung Luhur Berkah. All rights reserved | </span> <a href="{{ route('sitemap') }}">Sitemap</a>
            </div>
            <!-- Links -->
            <div class="text-base sm:flex flex-col sm:flex-row gap-4 sm:gap-8 text-center sm:text-left hidden">
                <a href="{{ route('home') }}">{{ __('messages.home') }}</a>
                <a href="{{ route('about-us') }}">{{ __('messages.about-us') }}</a>
                <a href="{{ route('catalog') }}">{{ __('messages.catalog') }}</a>
                <a href="{{ route('news') }}">{{ __('messages.news') }}</a>
            </div>
        </div>
    </div>
</footer>
