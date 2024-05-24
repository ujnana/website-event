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
                <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Selengkapnya
                </button>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">

            </div>
        </div>
    </section>
@endsection
