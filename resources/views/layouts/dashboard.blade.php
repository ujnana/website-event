<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : 'Dashboard' }}</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app-B6D7v1_B.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-DgjkFXs7.css') }}">
    <script src="{{ asset('build/assets/app-B6D7v1_B.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
<div class="antialiased bg-gray-50 dark:bg-gray-900">
    <!-- Navbar -->
    @include('dashboard.partials.navbar')
    <!-- Sidebar -->
    @include('dashboard.partials.sidebar')
    <!-- Content -->
    <main class="p-1 md:p-4 md:ml-64 min-h-screen pt-20 md:pt-20">
        @yield('content')
    </main>
    @livewireScripts
    @livewire('wire-elements-modal')
</div>
</body>
</html>
