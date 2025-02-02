<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Home') - Gunung Luhur Berkah</title>

    @php
        $defaultMetaDescription = 'Gunung Luhur Berkah, eksportir biji kopi berkualitas tinggi dari Indonesia. Menyediakan biji kopi pilihan untuk pasar global dengan cita rasa autentik dan keunggulan premium';
    @endphp

    <meta property="og:image" itemprop="image" content="@yield('image', url(asset('images/logo-glb.svg')))">
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="@yield('type', 'website')">
    <meta property="og:title" content="@yield('title', 'Gunung Luhur Berkah - Eksportir Biji Kopi')">
    <meta property="og:description" content="@yield('description', $defaultMetaDescription)">
    <meta property="og:site_name" content="Gunung Luhur Berkah - Eksportir Biji Kopi">
    <meta name="twitter:title" content="@yield('title', 'Gunung Luhur Berkah - Eksportir Biji Kopi')" />
    <meta name="twitter:description" content="@yield('description', $defaultMetaDescription)" />
    <meta name="twitter:image" content="@yield('image', url(asset('images/logo-glb.svg')))" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="canonical" href="{{ url()->current() }}"/>

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('images/logo-glb.svg') }}" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Theme Tailwind --}}
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                'green-primary': '#148900',
                'green-secondary': '#0F6101',
                'gray-primary': '#222222',
                'gray-secondary': '#4F4F4F',
                'gray-title': '#333333',
              }
            }
          }
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Gunung Luhur Berkah",
            "url": "{{ url('/') }}",
            "logo": "{{ asset('images/logo-glb.svg') }}",
            "description": "Gunung Luhur Berkah adalah eksportir biji kopi berkualitas dari Indonesia.",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+62 813-2282-0078",
                "contactType": "Lead"
            }
        }
    </script>

    @stack('head')
</head>
<body>
    @yield('body')

    @stack('script')
</body>
</html>
