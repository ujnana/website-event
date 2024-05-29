<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : 'Website' }}</title>
    {{--@vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-DgjkFXs7.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-DWWURUsa.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>

@include('website.partials.navbar')

<main class="grow">
    @yield('content')
</main>
@include('website.partials.footer')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('build/assets/app-whTaYw9x.js') }}"></script>

@stack('script')
</body>
</html>
