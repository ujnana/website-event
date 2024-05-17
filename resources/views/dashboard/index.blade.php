@extends('layouts.dashboard')
@section('content')
    <div class="grid grid-cols-1 gap-3 md:grid-cols-3 mb-4 p-5">
        <div
            class="flex flex-row rounded-xl bg-blue-200 dark:bg-gray-800 border border-blue-300 dark:border-gray-700 p-5 gap-3">
            <div class="basis-1/4">
                    <span
                        class="inline-flex items-center justify-center p-3 text-sm font-medium text-gray-500 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800">
                        <x-iconoir-page color="white" class="w-6 h-6"/>
                    </span>
            </div>
            <div class="basis-3/4">
                <h5 class="text-md leading-none text-gray-900 dark:text-white">Total Article</h5>
                <p class="text-2xl font-semibold text-gray-900 dark:text-white mt-1">{{ $articleCount }}</p>
            </div>
        </div>
        <div
            class="flex flex-row rounded-xl bg-blue-200 dark:bg-gray-800 border border-blue-300 dark:border-gray-700 p-5 gap-3">
            <div class="basis-1/4">
                    <span
                        class="inline-flex items-center justify-center p-3 text-sm font-medium text-gray-500 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800">
                        <x-heroicon-s-users color="white" class="w-6 h-6"/>
                    </span>
            </div>
            <div class="basis-3/4">
                <h5 class="text-md leading-none text-gray-900 dark:text-white">Total User</h5>
                <p class="text-2xl font-semibold text-gray-900 dark:text-white mt-1">{{ $userCount }}</p>
            </div>
        </div>
        <div
            class="flex flex-row rounded-xl bg-blue-200 dark:bg-gray-800 border border-blue-300 dark:border-gray-700 p-5 gap-3">
            <div class="basis-1/4">
                    <span
                        class="inline-flex items-center justify-center p-3 text-sm font-medium text-gray-500 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800">
                        <x-iconoir-page color="white" class="w-6 h-6"/>
                    </span>
            </div>
            <div class="basis-3/4">
                <h5 class="text-md leading-none text-gray-900 dark:text-white">Request Partnership</h5>
                <p class="text-2xl font-semibold text-gray-900 dark:text-white mt-1">{{ $partnershipCount }}</p>
            </div>
        </div>
    </div>
    <section class="px-5 mb-3">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Latest Articles</h1>
    </section>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-3 px-5">
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
    </div>
@endsection
