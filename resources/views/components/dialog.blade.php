<div
        @keydown.escape="isDialogOpen = false"
        x-data="modal()"
>

    <div @click="isDialogOpen = true">
        @if($activator)
            {{ $activator }}
        @else
            <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 transition transition-all duration-1000 ease-in"
                    type="button">
                Open modal
            </button>
        @endif
    </div>

    <template x-if="isDialogOpen">
        <!-- overlay -->
        <div
                class="overflow-auto"
                style="background-color: rgba(0,0,0,0.5)"
                :class="{ 'absolute inset-0 z-10 flex items-center justify-center': isDialogOpen }"
        >
            <!-- dialog -->
            <div class="relative h-screen w-auto flex justify-center items-center {{ $size }}"
            >
                <!-- content -->
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none"
                     @if($scrollable) style="max-height: 60%" @endif
                     @if(!$persistent) @click.away="isDialogOpen = false" @endif
                >
                    <div class="flex items-start justify-between p-5 border-b border-solid border-gray-300 rounded-t">
                        <h3 class="text-3xl font-semibold">
                            {{ $title }}
                        </h3>
                        <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                                @click="toggleModal()">
                        <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                            <svg>
                                <path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/>
                            </svg>
                        </span>
                        </button>
                    </div>

                    <!--body-->
                    <div class="relative text-gray-600 text-lg leading-relaxed p-6 flex-auto @if($scrollable) overflow-y-scroll @endif">
                        {{--                        overflow-y-scroll--}}
                        {{ $slot }}
                    </div>
                    <!--footer-->
                    <div class="flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
                        @if($footer)
                            {{ $footer  }}
                        @else
                            @unless($noClose)
                                <button class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-500 hover:text-white active:bg-red-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1"
                                        type="button" style="transition: all .15s ease" @click="toggleModal()">
                                    {{ $closeTitle }}
                                </button>
                            @endunless
                            <button class="text-red-500 bg-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1"
                                    type="submit" style="transition: all .15s ease" @click="toggleModal()">
                                {{ $okTitle }}
                            </button>
                        @endif
                    </div>
                </div>
                <!--content-->
            </div>
        </div><!-- /dialog -->
    </template>

</div><!-- /overlay -->

<script>
    function modal() {
        return {
            showModal: false,
            isDialogOpen: false,
            toggleModal() {
                this.isDialogOpen = !this.isDialogOpen;
            }
        }
    }
</script>
