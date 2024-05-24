@extends('layouts.website')
@section('content')
    <section class="bg-cover bg-center bg-blend-multiply bg-no-repeat"
             style="background-image: url({{ url('assets/img/hero-2.webp') }}); background-color: rgba(0, 0, 0, 0.5);">
        <div class="h-[30rem] mx-auto flex items-center justify-center max-w-screen-xl text-center">
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h4 class="mb-4 text-xl tracking-tight font-extrabold text-gray-900 dark:text-white">Apa itu </h4>
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">For People Media ?</h2>
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
    <section class="grid grid-cols-6 p-5 py-10 bg-center bg-blend-multiply bg-no-repeat"
             style="background-image: url({{ url('assets/img/hero-2.webp') }}); background-color: rgba(0, 0, 0, 0.5);">
        <div class="col-span-2 pt-5">
            <h3 class="text-xl text-white font-bold text-gray-900 dark:text-white">Terbaru di</h3>
            <h1 class="text-4xl text-white font-bold text-gray-900 dark:text-white">For People Media</h1>
        </div>
        <div class="col-span-4 grid grid-cols-3 gap-3 px-5">
            <img src="{{ asset('assets/img/poster.webp') }}" alt="">
            <img src="{{ asset('assets/img/poster.webp') }}" alt="">
            <img src="{{ asset('assets/img/poster.webp') }}" alt="">
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center flex py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">We didn't reinvent
                    the wheel</h2>
                <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small
                    enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.
                    Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you
                    need.</p>
            </div>
            <div style="left: 0; width: 100%; height: 180px; position: relative;">
                <iframe src="https://open.spotify.com/embed/album/2ODvWsOgouMbaA5xf0RkJe?utm_source=oembed"
                        style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;"
                        allowfullscreen
                        allow="clipboard-write; encrypted-media; fullscreen; picture-in-picture;"></iframe>
            </div>
        </div>
    </section>
    <section class="px-5 pb-16">
        <h3 class="text-2xl text-black font-bold dark:text-white pb-4">#Artikel</h3>
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-4">
                <div class="grid grid-cols-3 gap-2">
                    @foreach($articles as $article)
                        <article
                            class="p-0 pb-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <img
                                src="{{ $article->thumbnail ? asset('uploads/thumbnails/'.$article->thumbnail) : 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png' }}"
                                class="mb-2 rounded-t-md object-cover h-40 w-full"
                                alt="Image 1">

                            <div class="p-3">
                                <h6 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $article->title }}</h6>
                                <div
                                    class="mb-4 font-normal text-gray-700 dark:text-gray-400 text-wrap text-clip max-w-xxl overflow-hidden">
                                    <div class="line-clamp-3">{!! $article->content !!}</div>
                                </div>
                            </div>
                            <div class="justify-end text-center">
                                <a href="{{ route('articles-detail', $article->id) }}"
                                   class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                    Read more
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
                <div class="mt-5 bg-blue-900 p-5">
                    <h3 class="text-2xl text-white font-bold dark:text-white pb-5">#For People</h3>
                    <div>
                        <iframe width="100%" height="450"
                                src="https://www.youtube.com/embed/zB-6lKHuLLU?si=BY1C9o368RWnGvjj"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div style="left: 0; width: 100%; height: 750px; position: relative;">
                    <iframe src="https://open.spotify.com/embed/album/2ODvWsOgouMbaA5xf0RkJe?utm_source=oembed"
                            style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;"
                            allowfullscreen
                            allow="clipboard-write; encrypted-media; fullscreen; picture-in-picture;"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
