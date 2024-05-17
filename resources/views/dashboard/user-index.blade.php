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
                <h5 class="text-md leading-none text-gray-900 dark:text-white">Proposal Partnership</h5>
                <p class="text-2xl font-semibold text-gray-900 dark:text-white mt-1">{{ $partnershipCount }}</p>
            </div>
        </div>
    </div>
    <section class="px-5 mb-3">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Latest Proposal</h1>
    </section>
    <section class="bg-gray-50 dark:bg-gray-900 px-4 md:px-0">
        <div class="mx-auto max-w-screen-xl">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">

                    </div>

                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th style="width: 5%" scope="col" class="px-4 py-3"></th>
                            <th style="width: 20%" scope="col" class="px-4 py-3">Event Name</th>
                            <th style="width: 20%" scope="col" class="px-4 py-3 text-center">Event Date</th>
                            <th style="width: 15%" scope="col" class="px-4 py-3 text-center">Phone</th>
                            <th style="width: 15%" scope="col" class="px-4 py-3 text-center">Email</th>
                            <th style="width: 15%" scope="col" class="px-4 py-3 text-center">Request Date</th>
                            <th style="width: 10%" scope="col" class="px-4 py-3 text-center">Proposal</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($partnerships as $partnership)
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $partnership->event_name }}</td>
                                <td class="px-4 py-3 text-center">{{ $partnership->event_date->format('d-m-Y') }}</td>
                                <td class="px-4 py-3">{{ $partnership->phone }}</td>
                                <td class="px-4 py-3">{{ $partnership->email }}</td>
                                <td class="px-4 py-3 text-center">{{ $partnership->created_at->format('d-m-Y') }}</td>
                                <td class="px-4 py-3 flex items-center justify-center">
                                    <button>
                                        {{--
                                                                                onclick="Livewire.dispatch('openModal', { component: 'posts.delete-post', arguments: { post: '{{ $post->id }}' } })">
                                        --}}
                                        <x-iconsax-bol-document-download class="text-green-500" height="1.5rem" width="1.5rem"/>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <nav
                    class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
                    aria-label="Table navigation">
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                    Showing
                    <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                    of
                    <span class="font-semibold text-gray-900 dark:text-white">1000</span>
                </span>
                    <ul class="inline-flex items-stretch -space-x-px">
                        <li>
                            <a href="#"
                               class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Previous</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                               class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Next</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
@endsection
