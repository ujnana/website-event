@extends('layouts.website')
@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">
                Partnership</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
                Join us for an exclusive event to explore exciting partnership opportunities and connect with
                like-minded individuals. Together, we can achieve greater success and make a lasting impact.
            </p>
            <form action="{{ route('partnership-page.store') }}" class="space-y-8" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <div class="flex w-full gap-5">
                    <x-input-text class="flex-1" label="Event Name" name="event_name" id="event_name" required/>
                    <x-datepicker class="flex-1" label="Event Date" name="event_date" id="event_date" required/>
                </div>
                <div class="flex w-full gap-5">
                    <x-input-email class="flex-1" label="Email" name="email" id="email" required/>
                    <x-input-text class="flex-1" label="Phone" name="phone" id="phone" required/>
                </div>
                <x-input-file label="Proposal Document" name="document" id="document" accept="application/pdf"
                              required/>
                <div class="w-full flex mt-5 justify-end">
                    <button type="submit"
                            class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Send Proposal
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
