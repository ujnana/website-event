@extends('layouts.website')
@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">We invest in the world’s potential</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
        </div>
    </section>
    <section class="grid grid-cols-4 gap-3 px-5 mb-20">
        @foreach($articles as $article)
            <article class="p-3 pb-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <img src="{{ $article->thumbnail ? asset('uploads/thumbnails/'.$article->thumbnail) : 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png' }}" class="mb-2 rounded-md object-cover h-40 w-full"
                     alt="Image 1">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $article->title }}</h5>
                <div class="mb-4 font-normal text-gray-700 dark:text-gray-400 text-wrap text-clip max-w-xxl overflow-hidden">
                    <div class="line-clamp-3">{!! $article->content !!}</div>
                </div>
                <div class="justify-end text-end">
                    <a href="{{ route('articles-detail', $article->id) }}"
                       class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        Read more
                    </a>
                </div>
            </article>
        @endforeach
    </section>
@endsection
