@extends('layouts.general')

@section('title', 'Contact Us')

@push('content')
    <section class="py-16 mt-20 px-6 sm:px-16">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
            <h1 class="text-3xl sm:text-6xl font-bold text-gray-title sm:w-1/2">CONTACT</h1>
            <div class="flex flex-col md:flex-row gap-8 mt-4 md:mt-0">
                <div class="sm:w-1/2">
                    <h2 class="text-base font-bold sm:text-xl font-poppins text-[#333333]">{{ __('messages.contact-us.address') }}</h2>
                    <p class="text-[#464646] font-light text-sm mt-2">Kp. Babakan jati RT 001 RW 006, Desa Cisaat, Kecamatan Cisaat, Subang, Indonesia 41281</p>
                </div>
                <div class="sm:w-1/2">
                    <h2 class="text-base font-bold sm:text-xl font-poppins text-[#333333]">{{ __('messages.contact-us.telp') }}</h2>
                    <p class="text-[#464646] font-light text-sm mt-2">+62 822 4232 2423</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-4 justify-between items-start">
            <div class="w-full md:w-1/2 mb-8 md:mb-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.443432990131!2d107.7768363!3d-6.7156161999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6927a68e184eb9%3A0xf650458156d59de3!2sKOPERASI%20PRODUSEN%20GUNUNG%20LUHUR%20BERKAH!5e0!3m2!1sid!2sid!4v1738047673425!5m2!1sid!2sid" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-md h-[250px] sm:h-[450px]"></iframe>
            </div>
            <div class="w-full md:w-1/2 bg-white p-8 rounded-lg border border-[#E6E6E6]">
                <h2 class="text-2xl sm:text-5xl font-extrabold mb-4">{{ __('messages.contact-us.form.title') }}</h2>
                <form class="flex flex-col gap-6" onsubmit="return submitForm()">
                    @csrf
                    <div class="flex flex-col sm:flex-row gap-6">
                        <input placeholder="{{ __('messages.contact-us.field.name') }}" class="mt-1 block w-full sm:w-1/2 p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" id="name" type="text" required/>
                        <input placeholder="{{ __('messages.contact-us.field.email') }}" class="mt-1 block w-full sm:w-1/2 p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" id="email" type="email" required/>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-6">
                        <input placeholder="{{ __('messages.contact-us.field.subject') }}" class="mt-1 block w-full sm:w-1/2 p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" id="subject" type="text" required/>
                        <input placeholder="{{ __('messages.contact-us.field.telp') }}" class="mt-1 block w-full sm:w-1/2 p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" id="telp" type="text" required/>
                    </div>
                    <textarea class="block w-full p-4 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" id="message" rows="3" placeholder="{{ __('messages.contact-us.field.message') }}"></textarea>
                    <button type="submit" id="submitButton" class="px-16 py-4 bg-green-primary hover:bg-green-secondary text-white rounded-full text-lg transition w-max mx-auto sm:mx-0">
                        {{ __('messages.btn.send') }}
                    </button>
                    <div id="loadingSpinner" class="hidden mx-auto sm:mx-0">
                        <svg class="animate-spin h-5 w-5 text-green-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                        </svg>
                    </div>
                    <p id="successMessage" class="hidden text-green-500 text-center mt-2">{{ __('messages.contact-us.form.success') }}</p>
                </form>
            </div>
        </div>
    </section>
@endpush

@push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        function submitForm() {
            $('#submitButton').addClass('hidden');
            $('#loadingSpinner').removeClass('hidden');

            $.ajax({
                url: '{{ route('contact-us.store') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    name: $('#name').val(),
                    email: $('#email').val(),
                    subject: $('#subject').val(),
                    telp: $('#telp').val(),
                    message: $('#message').val(),
                },
                success: function (response) {
                    $('#loadingSpinner').addClass('hidden');
                    $('#successMessage').removeClass('hidden');
                    // Clear the form
                    $('#name').val('');
                    $('#email').val('');
                    $('#subject').val('');
                    $('#telp').val('');
                    $('#message').val('');
                },
                error: function (xhr, status, error) {
                    console.error('Request failed:', status, error);
                    alert('Terjadi kesalahan saat mengirim pesan Anda. Silakan coba lagi.');
                    $('#submitButton').removeClass('hidden');
                    $('#loadingSpinner').addClass('hidden');
                }
            });

            return false;
        }
    </script>
@endpush
