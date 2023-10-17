<x-layout>
    <x-item-filter></x-item-filter>

    <div class="grid mt-8  gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
        @forelse ($items as $item)
            <x-item-card :item="$item">
                <div class="flex space-x-3 text-sm font-medium">
                    <div class="flex-auto flex space-x-3">
                        <div class="flex-1 inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-gray-400"> {{ number_format($item->starting_bid, 2) }} </p>
                        </div>
                    </div>
                            
                    <a href="{{ route('item.show', $item) }}"
                        class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                        type="button" aria-label="like">Place your bid</a>
                </div>
            </x-item-card>
        @empty
            
        @endforelse
    </div>
</x-layout>