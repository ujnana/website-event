@extends('layouts.website')
@section('content')
    <section class="bg-cover bg-center bg-blend-multiply bg-no-repeat"
             style="background-image: url({{ url('assets/img/hero-2.webp') }}); background-color: rgba(0, 0, 0, 0.5);">
        <div class="h-[30rem] mx-auto flex flex-col items-center justify-center max-w-screen-xl text-center">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white dark:text-white">TENTANG KAMI</h2>
            <p class="mb-4 text-white">We are strategists, designers and developers. Innovators and problem solvers.
                Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.
                Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you
                need.</p>
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h4 class="mb-4 text-xl tracking-tight font-extrabold text-gray-900 dark:text-white">Apa itu </h4>
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">For People Media
                    ?</h2>
                <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small
                    enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.
                    Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you
                    need.</p>
            </div>

        </div>
    </section>
    <section class="px-60 py-5">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center">EVENT PARTNER</h2>
        <div class="grid grid-cols-6 gap-4 mt-8">
            <div>
                <img src="{{ asset('assets/img/LOGO_ZENIORA.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ZENIORA.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ZENIORA.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ZENIORA.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ZENIORA.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ZENIORA.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ZENIORA.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ZENIORA.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ZENIORA.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ZENIORA.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ZENIORA.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ZENIORA.png') }}" alt="">
            </div>
        </div>
    </section>
    <section class="px-60 py-10">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center">KAMPUS</h2>
        <div class="grid grid-cols-6 gap-4 mt-8">
            <div>
                <img src="{{ asset('assets/img/LOGO_ITB.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ITB.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ITB.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ITB.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ITB.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ITB.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ITB.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ITB.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ITB.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ITB.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ITB.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/LOGO_ITB.png') }}" alt="">
            </div>
        </div>
    </section>
@endsection
