<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cactus</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Title --}}
    <title>Cactus | Premium Clothing Brand – Blazers, Panjabis, Shirts, Pants & Complete Suits</title>

    {{-- Meta Description --}}
    <meta name="description"
        content="Discover CActus – a premium clothing brand crafting high-quality blazers, panjabis, shirts, pants, sherwanis, and complete suits. Shop stylish, comfortable, and custom-made outfits for every occasion.">

    {{-- Meta Keywords --}}
    <meta name="keywords"
        content="Cactus, Clothing Brand, Blazers, Panjabis, Shirts, Pants, Sherwanis, Complete Suits, Premium Apparel, Custom-made Clothing, Fashion, Style">

    {{-- Open Graph / Social Sharing (optional) --}}
    <meta property="og:title"
        content="Cactus | Premium Clothing Brand – Blazers, Panjabis, Shirts, Pants & Complete Suits">
    <meta property="og:description"
        content="Discover Cactus – a premium clothing brand crafting high-quality blazers, panjabis, shirts, pants, sherwanis, and complete suits. Shop stylish, comfortable, and custom-made outfits for every occasion.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}"> {{-- replace with your image --}}
    <meta property="og:url" content="{{ url()->current() }}">

    {{-- Twitter Card (optional) --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"
        content="Cactus | Premium Clothing Brand – Blazers, Panjabis, Shirts, Pants & Complete Suits">
    <meta name="twitter:description"
        content="Discover Cactus – a premium clothing brand crafting high-quality blazers, panjabis, shirts, pants, sherwanis, and complete suits. Shop stylish, comfortable, and custom-made outfits for every occasion.">
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.jpg') }}"> {{-- replace with your image --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
        rel="stylesheet">

    @yield('custom_styles')

</head>

<body class="homepage">

    @include('web.include.navbar')

    @yield('content')

    @include('web.include.footer')




    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/script.min.js') }}"></script>


    @yield('custom_js')



</body>