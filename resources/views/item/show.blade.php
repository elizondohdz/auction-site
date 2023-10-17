<x-layout>
    <x-item-filter></x-item-filter>

    <div class="grid mt-8  gap-8 grid-cols-1 md:grid-cols-1 xl:grid-cols-1">
            <x-item-card :item="$item">
            
                <div class="flex space-x-3 text-sm font-medium items-center">
                    <div class="flex-auto flex space-x-3">
                        <div class="flex-1 inline-flex items-center">
                            <p class="text-gray-400"> {{ $item->description }} </p>
                        </div>
                    </div>
                </div>
            <form action="{{ route('item.bid.store', $item) }}" method="POST">
            @csrf
                <div class="flex space-x-3 text-sm font-medium items-center mt-4">
                    <div class="flex-auto flex space-x-3">
                        <div class="flex-1 inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-gray-400"> {{ number_format($item->starting_bid, 2) }} </p>
                        </div>
                    </div>

                    <div class="flex-auto flex space-x-3">
                        <div class="flex-1 inline-flex items-center">
                            <input type="number" id="amount" name="amount" placeholder="Place your bid" class="w-full rounded-md border border-gray-100 bg-gray-100 px-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                                value="" />

                            <button
                                class="bg-gray-900 px-8 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                                type="submit" aria-label="like">Bid</button>
                        </div>
                    </div>
                </div>                
            </form>
            </x-item-card>
    </div>
</x-layout>
