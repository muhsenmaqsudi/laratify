<div x-data="collapse()" {{ $attributes }}>
    @isset($activator)
        {{ $activator }}
    @else
        <button
            class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1"
            @click="isOpen = !isOpen">
            Toggle
        </button>
    @endisset
    <template x-if="isOpen">
        <div class="w-full m-2"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform scale-90"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-90"
        >
            {{ $slot }}
        </div>
    </template>
</div>

<script>
    function collapse() {
        return {
            isOpen: false
        }
    }
</script>
