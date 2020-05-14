<div class="w-full mt-6" x-data="tabs()">
    <div>
        <ul class="flex border-b">
            <template x-for="(item, index) in navs" :key="index">
                <li class="mr-1 flex flex-grow" :class="index == 0 ? '-mb-px ' : ''" @click="openTab = item">
                    <a :class="openTab === item ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'"
                       class="flex-1 bg-white inline-block py-2 px-4 font-semibold capitalize" href="#" x-text="item"></a>
                </li>
            </template>
        </ul>
    </div>
    <div class="bg-white p-6">
        {{ $slot }}
    </div>
</div>

<script>
    let navs = {!! $navs !!}

    function tabs() {
        return {
            openTab: navs[0],
            navs: navs
        }
    }
</script>
