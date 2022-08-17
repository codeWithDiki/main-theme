<div>
    <div x-data="subscribeUtilities()">
        <button class="bg-gradient-to-r from-primary-500 via-white to-white text-primary-800 shadow text-md font-bold w-full text-center py-2 hover:bg-opacity-90"
        @click="open_modal = true"
        >
            Subscribe
        </button>
        <div class="fixed inset-0 z-50 bg-zinc-500 bg-opacity-30 backdrop-blur-md flex justify-center items-center px-3"
        x-cloak
        x-show="open_modal"
        >
            <form class="w-full max-w-md bg-white px-5 py-6 border rounded-lg space-y-5 relative mt-10 lg:mt-0" 
            @click.away="open_modal=false"
            wire:submit.prevent="submit">
                <h1 class="text-2xl font-semibold">
                    Subscribe
                </h1>
                {{ $this->form }}
                <div class="flex gap-2">
                    <div 
                    @click="open_modal=false"
                    wire:loading.attr="disabled"
                    wire:loading.class="bg-opacity-90"
                    class="py-2 px-3 text-center font-bold bg-white w-1/2 rounded-md text-primary-500 border border-primary cursor-pointer">
                        Cancel
                    </div>
                    <button class="py-2 px-3 text-center font-bold bg-primary-500 w-1/2 rounded-md text-white"
                    wire:loading.attr="disabled"
                    wire:loading.class="bg-opacity-90"
                    >
                        Subscribe
                    </button>
                </div>

                <div class="absolute -top-2 rounded-full backdrop-blur-sm right-3 p-2 bg-zinc-500 bg-opacity-10 cursor-pointer"
                @click="open_modal=false"
                wire:loading.attr="disabled"
                >
                    @svg('heroicon-o-x', 'w-3 h-3')
                </div>
            </form>
        </div>
    </div>


    <script>
        function subscribeUtilities()
        {
            return {
                open_modal : false,
            };
        }
    </script>
</div>
