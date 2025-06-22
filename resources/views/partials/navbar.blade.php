<header class="fixed w-full shadow-md z-50">
    <nav class="bg-gray-900 w-full md:static md:text-sm">
        <div class="max-w-7xl mx-auto px-8 sm:px-0 relative items-center md:flex" x-data="{ openDropdown: true }">
            <div class="flex items-center justify-between py-3 md:py-5 md:block">
                <a aria-label="Logo" href="{{ route('home') }}" class="flex items-center gap-x-2">
                    <div
                        class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold">
                        US
                    </div>
                    <span class="text-xl font-bold text-white">USEG</span>
                </a>
                <div class="flex gap-x-3 items-center md:hidden">
                    <button x-on:click="openDropdown = !openDropdown" role="button" aria-label="Open the menu"
                        class="p-2 rounded-lg text-gray-400 hover:bg-gray-800 border border-slate-00">
                        <svg x-show="openDropdown = true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg>
                        <svg x-show="openDropdown = false" data-slot="icon" fill="none" stroke-width="1.5"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="bg-gray-900 flex-1 md:py-0 md:block md:static md:z-0 hidden">
                <ul class="justify-end items-center space-y-6 md:flex md:space-x-6 md:space-y-0 md:font-medium">
                    <li class="text-gray-200 hover:text-sky-500 duration-150 font-semibold tracking-wide">
                        <a class="block text-sm" href="{{ route('events.index') }}">Évènements</a>
                    </li>

                    <li class="text-gray-200 hover:text-sky-500 duration-150 font-semibold">
                        <a class="block text-sm" href="/#about-us">À propos de nous</a>
                    </li>

                    <li class="text-gray-200 hover:text-sky-500 duration-150 font-semibold">
                        <a class="block text-sm" href="#">Contact</a>
                    </li>

                    <li><span class="bg-gray-800 hidden w-px h-5 md:block"></span></li>

                    <li>
                        <a href="/login"
                            class="py-2 px-4 text-center duration-150 flex items-center justify-center gap-x-1 font-medium text-sm text-white bg-gray-800 hover:bg-gray-700 active:bg-gray-900 rounded-full">
                            Faire un don
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-4 h-4">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Mobile -->
            <div x-show="openDropdown"
                class="bg-gray-900 flex-1 md:py-0 md:block md:static md:z-0 absolute z-20 inset-x-0 px-10 py-6 w-full">
                <ul class="justify-end items-center space-y-4 md:flex md:space-x-6 md:space-y-0 md:font-medium">
                    <li class="text-gray-200 hover:text-sky-500">
                        <a class="block text-sm" href="{{ route('events.index') }}">Évènements</a>
                    </li>
                    <li class="text-gray-200 hover:text-sky-500">
                        <a class="block text-sm" href="/#about-us">À propos de nous</a>
                    </li>
                    <li class="text-gray-200 hover:text-sky-500">
                        <a class="block text-sm" href="#">Contact</a>
                    </li>
                    <li>
                        <span class="bg-gray-800 hidden w-px h-5 md:block"></span>
                    </li>

                    <li>
                        <a href="#"
                            class="py-2.5 px-4 text-center duration-150 flex items-center justify-center gap-x-1 font-medium text-sm text-white bg-gray-800 hover:bg-gray-700 active:bg-gray-900 rounded-lg">
                            Faire un don
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-4 h-4">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
