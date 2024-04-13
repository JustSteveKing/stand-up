<div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-slate-200 dark:border-slate-950 bg-slate-50 dark:bg-slate-900 px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
    <button type="button" class="-m-2.5 p-2.5 lg:hidden" @click="open = true">
        <span class="sr-only">Open sidebar</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
        </svg>
    </button>
    <div class="h-6 w-px bg-slate-900/10 dark:bg-slate-50/10 lg:hidden" aria-hidden="true"></div>
    <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
        <form class="relative flex flex-1" action="#" method="GET">
            <label for="search-field" class="sr-only">Search</label>
            <svg class="pointer-events-none absolute inset-y-0 left-0 h-full w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd"></path>
            </svg>
            <input id="search-field" class="block h-full w-full bg-slate-50 dark:bg-slate-900 border-0 py-0 pl-8 pr-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm" placeholder="Search..." type="search" name="search">
        </form>
        <div class="flex items-center gap-x-4 lg:gap-x-6">
            <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-slate-900/10 dark:lg:bg-slate-50/10" aria-hidden="true"></div>
            <div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false" class="relative">
                <button type="button" class="-m-1.5 flex items-center p-1.5" id="user-menu-button" x-ref="button" @click="open = !open" @keyup.space.prevent="open = !open" @keydown.enter.prevent="open = !open" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}">
                    <span class="hidden lg:flex lg:items-center">
                        <span class="ml-4 text-sm font-semibold leading-6" aria-hidden="true">{{ $this->user->name }}</span>
                        <svg class="ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none" x-ref="menu-items" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" @keydown.tab="open = false" @keydown.enter.prevent="open = false" @keyup.space.prevent="open = false" x-cloak>
                    <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="user-menu-item-0">Your profile</a>
                    <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="user-menu-item-1">Sign out</a>
                </div>
            </div>
        </div>
    </div>
</div>
