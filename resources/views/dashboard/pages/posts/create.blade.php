@extends('layouts.dashboard')
@section('content')
    @include('dashboard.partials.breadcrumb')
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="author" value="{{ auth()->user()->id }}"/>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 gap-4 mb-4">
            <div class="col-span-4 bg-white p-4 rounded-lg">
                <x-input-text label="Title" name="title" value="{{ old('title') }}" class="mb-3"/>
                <div>
                    <label for="editor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Content </label>
                    <div class="mt-3">
                        <textarea id="editor" name="content"></textarea>
                    </div>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg col-span-2 grid grid-cols-1 h-fit gap-y-3">
                <div>
                    <x-input-file label="Thumbnail" name="thumbnail" id="thumbnail" class="mb-3"/>
                </div>

                <div>
                    <x-input-select label="Category" name="category_id" :options="$categories" placeholder="Choose a category" class="mb-3"/>
                </div>
                <div>
                    <x-button-primary class="w-full">Save</x-button-primary>
                </div>
            </div>
        </div>
    </form>
@endsection
