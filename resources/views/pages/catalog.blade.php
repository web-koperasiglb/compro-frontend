@extends('layouts.general')

@section('title', 'Catalog')

@push('content')
    <section class="py-20 mt-20 px-6 sm:px-16">
        <h2 class="text-xl sm:text-6xl font-bold text-center mb-20 text-gray-title uppercase">{{ __('messages.catalog.title') }}</h2>

        <div class="mb-12 relative">
            <input
                type="text"
                placeholder="{{ __('messages.catalog.search') }}"
                class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                oninput="filterProducts()"
                id="searchInput"
            />
            <!-- Icon -->
            <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-[#B3B3B3]" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.9419 17.5575L14.0302 13.6466C15.1639 12.2854 15.7293 10.5395 15.6086 8.77214C15.488 7.00475 14.6906 5.35192 13.3823 4.15748C12.074 2.96304 10.3557 2.31895 8.58462 2.3592C6.81357 2.39945 5.12622 3.12094 3.87358 4.37358C2.62094 5.62622 1.89945 7.31357 1.8592 9.08462C1.81895 10.8557 2.46304 12.574 3.65748 13.8823C4.85192 15.1906 6.50475 15.988 8.27214 16.1086C10.0395 16.2293 11.7854 15.6639 13.1466 14.5302L17.0575 18.4419C17.1156 18.4999 17.1845 18.546 17.2604 18.5774C17.3363 18.6089 17.4176 18.625 17.4997 18.625C17.5818 18.625 17.6631 18.6089 17.739 18.5774C17.8149 18.546 17.8838 18.4999 17.9419 18.4419C17.9999 18.3838 18.046 18.3149 18.0774 18.239C18.1089 18.1631 18.125 18.0818 18.125 17.9997C18.125 17.9176 18.1089 17.8363 18.0774 17.7604C18.046 17.6845 17.9999 17.6156 17.9419 17.5575ZM3.12469 9.24969C3.12469 8.13717 3.45459 7.04963 4.07267 6.12461C4.69076 5.19958 5.56926 4.47861 6.5971 4.05287C7.62493 3.62712 8.75593 3.51573 9.84707 3.73277C10.9382 3.94981 11.9405 4.48554 12.7272 5.27221C13.5138 6.05888 14.0496 7.06116 14.2666 8.15231C14.4837 9.24345 14.3723 10.3745 13.9465 11.4023C13.5208 12.4301 12.7998 13.3086 11.8748 13.9267C10.9497 14.5448 9.86221 14.8747 8.74969 14.8747C7.25836 14.873 5.82858 14.2799 4.77404 13.2253C3.71951 12.1708 3.12634 10.741 3.12469 9.24969Z" fill="currentColor"/>
                </svg>
            </div>
        </div>

        <!-- Product Grid -->
        <div id="productGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Product Card -->
            <div class="product-card cursor-pointer" onclick="openModal(0)">
                <img src="{{ asset('images/home/robusta-coffee-bean.png') }}" alt="Robusta Coffee Gunung Luhur Berkah" class="w-full h-[300px] object-cover rounded">
                <h2 class="font-bold text-xl mt-2">Robusta Origin Sumatra Grade 1</h2>
                <p class="text-gray-500">S18 - Clean & S16 - Clean</p>
            </div>
            <div class="product-card cursor-pointer" onclick="openModal(1)">
                <img src="{{ asset('images/home/arabic-coffee-bean.png') }}" alt="Arabica Coffee Gunung Luhur Berkah" class="w-full h-[300px] object-cover rounded">
                <h2 class="font-bold text-xl mt-2">Arabica Natural Coffee Bean</h2>
                <p class="text-gray-500">S18 - Clean</p>
            </div>
            <div class="product-card cursor-pointer" onclick="openModal(2)">
                <img src="{{ asset('images/home/arabic-coffee-bean.png') }}" alt="Arabica Coffee Gunung Luhur Berkah" class="w-full h-[300px] object-cover rounded">
                <h2 class="font-bold text-xl mt-2">Arabica Full Washed Coffee Bean</h2>
                <p class="text-gray-500">S18 - Clean</p>
            </div>
        </div>
        <p id="noProductsMessage" class="text-center text-gray-500 mt-6 hidden">{{ __('messages.catalog.item.notfound') }}</p>
    </section>

    <div id="productModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-2/3 p-6 max-h-screen overflow-y-auto">
            <!-- Modal Header -->
            <div class="flex justify-between items-center">
                <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 text-2xl font-bold mb-6">
                    <svg class="w-5 h-5" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_77_2491)">
                        <path d="M16.9999 7.5L7 17.4999" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M7 7.5L16.9999 17.4999" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_77_2491">
                        <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                        </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>

            <!-- Modal Content -->
            <div class="flex flex-col sm:flex-row gap-6">
                <!-- Main Image with Navigation -->
                <div class="relative flex justify-center items-center w-full sm:w-1/2">
                    <img
                        id="mainImage"
                        src=""
                        alt="Catalog Gunung Luhur Berkah"
                        class="w-full max-w-md h-[210px] sm:h-[420px] object-cover rounded-lg"
                    />
                </div>

                <!-- Product Details -->
                <div class="flex flex-col gap-2 w-full sm:w-1/2">
                    <div class="border-b border-[#EEEEEE]">
                        <h1 id="productName" class="font-bold text-[#333333] text-3xl mb-2"></h1>
                        <p id="productType" class="text-gray-500 text-sm mb-2"></p>
                    </div>
                    <div>
                        <h3 class="text-base font-semibold text-gray-800 mb-2">{{ __('messages.catalog.item.title') }}</h3>
                        <p id="productDescription" class="text-gray-secondary text-sm"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('script')
    <script>
        const products = [
            {
                name: "Robusta Origin Sumatra Grade 1",
                type: "S-18 Clean & S-16 Clean",
                description: "Robusta Origin Sumatra Grade 1 berasal dari ketinggian 600 - 800 mdpl dan diproses menggunakan metode specialty processing. Memiliki kadar air 12%, tingkat cacat 5%, bebas bau apek, serta tidak mengandung serangga hidup.\n\nCita rasanya unik dengan kombinasi kacang, karamel, burnt, dan kakao.\n\nHarga FOB Tanjung Priok ke Jeddah $5/kg, sedangkan CIF $5,4/kg.",
                description_en: "Robusta Origin Sumatra Grade 1 comes from an altitude of 600 - 800 meters above sea level and is processed using specialty processing methods. It has a moisture content of 12%, a defect rate of 5%, is free from rancid odors, and does not contain live insects.\n\nIts flavor profile is unique, with a combination of nutty, caramel, burnt, and cocoa notes.\n\nThe price is FOB Tanjung Priok to Jeddah at $5/kg, and CIF at $5.4/kg.",
                images: ["{{ asset('images/home/robusta-coffee-bean.png') }}"],
            },
            {
                name: "Arabica Natural Coffee Bean",
                type: "S18 - Clean",
                description: "Arabica Natural Coffee Bean berasal dari dataran tinggi Jawa (1200 - 1400 mdpl) dengan metode natural processing. Memiliki kadar air 12%, tingkat cacat 5%, bebas bau apek, dan tidak mengandung serangga hidup.\n\nCita rasanya fruity dengan sentuhan pisang, nangka, dan jeruk. Varietasnya meliputi Arabica Java Preanger, Lini S, dan Andung Sari.\n\nHarga FOB Tanjung Priok ke Jeddah $8/kg, sedangkan CIF $8,4/kg.",
                description_en: "Arabica Natural Coffee Bean is sourced from the highlands of Java (1200 - 1400 meters above sea level) using a natural processing method. It has a moisture content of 12%, a defect rate of 5%, is free from rancid odors, and does not contain live insects.\n\nIts flavor profile is fruity with hints of banana, jackfruit, and orange. The varieties include Arabica Java Preanger, Lini S, and Andung Sari.\n\nThe price is FOB Tanjung Priok to Jeddah at $8/kg, and CIF at $8.4/kg.",
                images: ["{{ asset('images/home/arabic-coffee-bean.png') }}"],
            },
            {
                name: "Arabica Coffee Origin Java – Full Washed",
                type: "S18 - Clean",
                description: "Arabica Coffee Origin Java - Full Washed berasal dari ketinggian 1200 - 1400 mdpl dan diproses menggunakan metode full washed, menghasilkan rasa yang lebih bersih dan halus. Memiliki kadar air 12%, tingkat cacat 5%, bebas bau apek, serta tidak mengandung serangga hidup.\n\nCita rasanya cenderung manis dengan nuansa karamel dan vanila. Varietasnya meliputi Arabica Java Preanger, Lini S, dan Andung Sari.\n\nHarga FOB Tanjung Priok ke Jeddah $7/kg, sedangkan CIF $7,4/kg.",
                description_en: "Arabica Coffee Origin Java – Full Washed comes from an altitude of 1200 - 1400 meters above sea level and is processed using the full washed method, resulting in a cleaner and smoother taste. It has a moisture content of 12%, a defect rate of 5%, is free from rancid odors, and does not contain live insects.\n\nIts flavor profile is sweet with caramel and vanilla undertones. The varieties include Arabica Java Preanger, Lini S, and Andung Sari.\n\nThe price is FOB Tanjung Priok to Jeddah at $7/kg, and CIF at $7.4/kg.",
                images: ["{{ asset('images/home/arabic-coffee-bean.png') }}"],
            },
        ];

        let currentProductImages = [];
        let currentImageIndex = 0;

        function openModal(productIndex) {
            const product = products[productIndex];
            currentProductImages = product.images;
            currentImageIndex = 0;

            // Update modal content
            document.getElementById("productName").innerText = product.name;
            document.getElementById("productType").innerText = product.type;
            document.getElementById("productDescription").innerText = product.description;
            const locale = "{{ app()->getLocale() }}";
            const description = locale === 'EN' ? product.description_en : product.description;
            document.getElementById("productDescription").innerText = description;

            // Update main image
            updateMainImage(0);

            // Show modal
            document.getElementById("productModal").classList.remove("hidden");
        }

        function updateMainImage(index) {
            currentImageIndex = index;
            document.getElementById("mainImage").src = currentProductImages[index];
        }

        function closeModal() {
            document.getElementById("productModal").classList.add("hidden");
        }

        function filterProducts() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const productGrid = document.getElementById('productGrid');
            const noProductsMessage = document.getElementById('noProductsMessage');
            productGrid.innerHTML = '';

            let foundProducts = false;

            products.forEach((product, index) => {
                if (product.name.toLowerCase().includes(searchInput) || product.type.toLowerCase().includes(searchInput)) {
                    const productCard = `
                        <div class="product-card cursor-pointer" onclick="openModal(${index})">
                            <img src="${product.images[0]}" alt="${product.name}" class="w-full h-[300px] object-cover rounded">
                            <h2 class="font-bold text-xl mt-2">${product.name}</h2>
                            <p class="text-gray-500">${product.type}</p>
                        </div>
                    `;
                    productGrid.innerHTML += productCard;
                    foundProducts = true;
                }
            });

            if (!foundProducts) {
                noProductsMessage.classList.remove('hidden');
            } else {
                noProductsMessage.classList.add('hidden');
            }
        }
    </script>
@endpush
