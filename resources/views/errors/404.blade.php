@extends('layouts.base')

@section('body')
<div class="flex items-center justify-center min-h-screen bg-white">
    <div class="flex flex-col md:flex-row items-center">
        <div class="flex items-center justify-center">
            <img alt="Not Found - Gunung Luhur Berkah" class="h-2/3 w-2/3 sm:w-full sm:h-full" src="{{ asset('images/404.png') }}"/>
        </div>
        <div class="mt-4 md:mt-0 md:ml-8 text-center md:text-left">
            <h1 class="text-6xl font-bold text-gray-800">
            Oops!
            </h1>
            <p class="text-gray-600 text-base mt-2">
                Sepertinya kami tidak dapat menemukan apa yang Anda cari.
            </p>
        </div>
    </div>
</div>
@endsection
