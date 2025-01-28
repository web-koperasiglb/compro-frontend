@extends('layouts.base')

@section('body')
    @include('components.general-header')
    {{-- Content Pages --}}
    @stack('content')

    @include('components.general-footer')

@endsection
