<footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl text-center">
        <a href="#" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
            <img src="{{ asset('assets/img/logo.png') }}" class="h-20" alt="For People Medi Logo"/>
        </a>
        <p class="my-6 text-gray-500 dark:text-gray-400">
            Feel the rhythm, connect with the energy, live the music with For People Music.
        </p>
        <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
            <li>
                <a href="{{ route('home') }}" class="mr-4 hover:font-bold md:mr-6 {{ request()->routeIs('home') ? 'text-primary-700 font-bold' : 'text-gray-700' }} ">Home</a>
            </li>
            <li>
                <a href="{{ route('about-page') }}" class="mr-4 hover:font-bold md:mr-6 {{ request()->routeIs('about-page') ? 'text-primary-700 font-bold' : 'text-gray-700' }}">About</a>
            </li>
            <li>
                <a href="{{ route('contact-page') }}" class="mr-4 hover:font-bold md:mr-6 {{ request()->routeIs('contact-page') ? 'text-primary-700 font-bold' : 'text-gray-700' }} ">Contact</a>
            </li>
            <li>
                <a href="{{ route('articles-page') }}" class="mr-4 hover:font-bold md:mr-6 {{ request()->routeIs('articles-page') ? 'text-primary-700 font-bold' : 'text-gray-700' }}">Articles</a>
            </li>
        </ul>
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="{{ route('home') }}" class="hover:underline">For Media People</a>. All Rights Reserved.</span>
    </div>
</footer>
