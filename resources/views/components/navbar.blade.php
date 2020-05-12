<nav class="bg-gray-800" x-data="navbar()">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button @click="toggleMenu()"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out">
                    <!-- Icon when menu is closed. -->
                    <svg class="h-6 w-6" :class="{'hidden': menu, 'block': !menu }" stroke="currentColor" fill="none"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <!-- Icon when menu is open. -->
                    <svg class="h-6 w-6" :class="{'block': menu, 'hidden': !menu }" stroke="currentColor" fill="none"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <!-- Logo -->
                @isset($logo)
                    <div class="flex-shrink-0">
                        {{ $logo }}
                    </div>
                @endisset
            <!-- Links -->
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex">
                        @foreach($links as $link_name => $link_path)
                            @if($loop->first)
                                <a href="{{ \Illuminate\Support\Facades\Route::has($link_path) ? route($link_path) : url($link_path) }}"
                                   class="px-3 py-2 rounded-md text-sm font-medium leading-5 text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                                    {{ $link_name }}
                                </a>
                            @else
                                <a href="{{ \Illuminate\Support\Facades\Route::has($link_path) ? route($link_path) : url($link_path) }}"
                                   class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                                    {{ $link_name }}
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                @if($notification)
                    <button class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </button>
                @endif
            <!-- Profile dropdown -->
                @isset($profileDropdown)
                    <div class="ml-3 relative">
                        <div>
                            <button @click="toggleDropdown()"
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-white transition duration-150 ease-in-out">
                                <img class="h-8 w-8 rounded-full"
                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                     alt=""/>
                            </button>
                        </div>
                        <!--
                          Profile dropdown panel, show/hide based on dropdown state.
                        -->
                        <template x-if="dropdown">
                            <div @click.away="dropdown = false"
                                 class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg"
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                            >
                                <div class="py-1 rounded-md bg-white shadow-xs">
                                        {{ $profileDropdown }}
                                </div>
                            </div>
                        </template>
                    </div>
                @endisset
            </div>
        </div>
    </div>

    <div class="sm:hidden" :class="{'block': menu, 'hidden': !menu }">
        <div class="px-2 pt-2 pb-3">
            @foreach($links as $link_name => $link_path)
                @if($loop->first)
                    <a href="{{ \Illuminate\Support\Facades\Route::has($link_path) ? route($link_path) : url($link_path) }}"
                       class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                        {{ $link_name }}
                    </a>
                @else
                    <a href="{{ \Illuminate\Support\Facades\Route::has($link_path) ? route($link_path) : url($link_path) }}"
                       class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                        {{ $link_name }}
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</nav>

<script>
    function navbar() {
        return {
            menu: false,
            dropdown: false,
            toggleMenu() {
                this.menu = !this.menu;
            },
            toggleDropdown() {
                this.dropdown = !this.dropdown;
            }
        }
    }
</script>



