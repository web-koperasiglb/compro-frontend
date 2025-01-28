<header class="fixed top-0 left-0 w-full flex py-4 px-6 sm:px-16 bg-white font-[sans-serif] min-h-[70px] tracking-wide z-50">
    <div class="flex flex-wrap items-center justify-between gap-4 w-full">
        <a href="{{ route('home') }}" class="lg:absolute max-lg:left-10 lg:top-2/4 lg:left-2/4 lg:-translate-x-1/2 lg:-translate-y-1/2 max-sm:hidden">
            <img src="{{ asset('images/logo-glb.svg') }}" alt="logo" height="42" />
        </a>
        <a href="{{ route('home') }}" class="hidden max-sm:block">
            <img src="{{ asset('images/logo-glb.svg') }}" alt="logo" height="42" />
        </a>
        <div id="collapseMenu"
            class="max-lg:hidden lg:!block max-lg:w-full max-lg:fixed max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50">
            <button id="toggleClose" class="lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 fill-black" viewBox="0 0 320.591 320.591">
                    <path
                        d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                        data-original="#000000"></path>
                    <path
                        d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                        data-original="#000000"></path>
                </svg>
            </button>
            <ul class="lg:flex lg:gap-x-8 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50">
                <li class="mb-6 hidden max-lg:block">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo-glb.svg') }}" alt="logo" class="h-10" />
                    </a>
                </li>
                <li class="max-lg:py-3">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'font-bold' : '' }} text-gray-primary block text-[15px]">{{ __('messages.home') }}</a>
                </li>
                <li class="max-lg:py-3">
                    <a href="{{ route('about-us') }}" class="{{ request()->routeIs('about-us') ? 'font-bold' : '' }} text-gray-primary block text-[15px]">{{ __('messages.about-us') }}</a>
                </li>
                <li class="max-lg:py-3">
                    <a href="{{ route('catalog') }}" class="{{ request()->routeIs('catalog') ? 'font-bold' : '' }} text-gray-primary block text-[15px]">{{ __('messages.catalog') }}</a>
                </li>
                <li class="max-lg:py-3">
                    <a href="{{ route('news') }}" class="{{ request()->routeIs('news') ? 'font-bold' : '' }} text-gray-primary block text-[15px]">{{ __('messages.news') }}</a>
                </li>
                <a href="{{ route('contact-us') }}"
                class="hidden max-lg:block w-full px-4 py-2 text-sm rounded-full font-semibold text-green-primary border-2 border-green-primary transition-all ease-in-out duration-300 hover:bg-green-primary hover:text-white">
                    {{ __('messages.contact') }}
                </a>
            </ul>
        </div>

        <div class="flex items-center ml-auto space-x-6">
            <form action="{{ route('language.switch') }}" class="max-w-sm mx-auto" method="POST">
                @csrf
                <select id="language" name="language" onchange="this.form.submit()" class="text-gray-primary text-sm rounded-lg">
                    <option value="id" {{ app()->getLocale() == 'id' ? 'selected' : '' }}>Bahasa</option>
                    <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                    <option value="ar" {{ app()->getLocale() == 'ar' ? 'selected' : '' }}>Arabic</option>
                </select>
            </form>
            <a href="{{ route('contact-us') }}"
                class="max-sm:hidden px-4 py-2 text-sm rounded-full font-semibold text-green-primary border-2 border-green-primary transition-all ease-in-out duration-300 hover:bg-green-primary hover:text-white">
                {{ __('messages.contact') }}
            </a>
            <button id="toggleOpen" class="lg:hidden">
                <svg width="20" height="21" class="w-7 h-7" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.33398 10.4993H16.6673M3.33398 7.16602H16.6673M3.33398 13.8327H10.0007" stroke="#222222"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
</header>

<script>
    let toggleOpen = document.getElementById('toggleOpen');
    let toggleClose = document.getElementById('toggleClose');
    let collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
        if (collapseMenu.style.display === 'block') {
            collapseMenu.style.display = 'none';
        } else {
            collapseMenu.style.display = 'block';
        }
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);
</script>
